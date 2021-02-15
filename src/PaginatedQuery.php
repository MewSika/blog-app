<?php
namespace App;
use \PDO;
use App\Config\Database;
use App\Helpers\URLHelper;

class PaginatedQuery {

    private $query;
    private $queryCount;
    private $pdo;
    private $perPage;
    private $count;
    private $items;

    public function __construct (
        string $query, 
        string $queryCount, 
        ?PDO $pdo = null, 
        int $perPage = 10)
    {
        $this->query = $query;
        $this->queryCount = $queryCount;
        $this->pdo = $pdo ?: Database::getPDO();
        $this->perPage = $perPage;
    }

    public function getItems(string $classMapping, ?array $data = [], ?string $key = null):array
    {
        if($this->items === null) {
            $currentPage = $this->getCurrentPage();
            $pages = $this->getPages($data);
            if(!isset($key) && $currentPage > $pages) {
                throw new \Exception('Cette page n\'existe pas');
            }
            $offset = $this->perPage*($currentPage - 1);
            if(null !== $key) {
                $sql = $this->pdo->prepare(
                    $this->query .
                    " LIMIT {$this->perPage} OFFSET $offset");
                $sql->bindValue($key, '%'.$_GET['q'].'%', PDO::PARAM_STR);
                $sql->execute();
                return $this->items = $sql->fetchAll(PDO::FETCH_CLASS, $classMapping);
            }
            return $this->items = $this->pdo->query(
                $this->query . 
                " LIMIT {$this->perPage} OFFSET $offset")
                ->fetchAll(PDO::FETCH_CLASS, $classMapping);
        }
    }

    private function getCurrentPage(): int
    {
        return URLHelper::getPositiveInt('p', 1);
    }

    public function previousLink(string $link, array $params = []): ?string
    {
        $currentPage = $this->getCurrentPage();
        if($currentPage <= 1) return null;
        if($currentPage >= 2) {
            $previous = $link. "?" . URLHelper::withParam($params, 'p', $currentPage-1);
        }
        $start = $link . "?" . URLHelper::withParam($params, 'p', $currentPage = 1);
        return  <<<HTML
        <a href="{$start}" class="text-dark"><i class='fas fa-angle-double-left'></i></a>
        <a href="{$previous}" class="text-dark"><i class='fas fa-angle-left'></i></a>
HTML;
    }

    public function nextLink(string $link, array $params = []): ?string
    {
        $url = $this->getParams($params);
        $currentPage = $this->getCurrentPage();
        $pages = $this->getPages();
        if($currentPage >= $pages) return null;
        if($currentPage ) {
            $next = $link. "?".URLHelper::withParam($params, 'p', $currentPage+1);
        }
        if(!empty($params)) {
            $end = $link . "?" . URLHelper::withParam($params, 'p', $pages);
        } else {
            $end = $link . "?p=" . $pages;
        }

        return  <<<HTML
        <a href="{$next}" class="text-dark"><i class='fas fa-angle-right'></i></a>
        <a href="{$end}" class="text-dark"><i class='fas fa-angle-double-right'></i></a>
HTML;
    }

    private function getParams(array $params):string
    {
        if(is_array($params)) {
            $param = implode(',', $params);
        }
        return http_build_query($params, $param);
    }

    private function getPages(?array $data = []) :int
    {
        if($this->count === null) {
            if(!empty($data)) {
                $this->count = $this->pdo->prepare($this->queryCount);
                $this->count->bindValue("name", '%'.$_GET['q'].'%', PDO::PARAM_STR);
                $this->count->execute();
                $this->count =  $this->count->fetch(PDO::FETCH_NUM)[0];
                return ceil($this->count/$this->perPage);
            }
            $this->count = (int)$this->pdo
            ->query($this->queryCount)
            ->fetch(PDO::FETCH_NUM)[0];
        }
        return ceil($this->count/$this->perPage);
    }
}