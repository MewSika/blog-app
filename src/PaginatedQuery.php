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

    public function getItems(string $classMapping):array
    {
        if($this->items === null) {
            $currentPage = $this->getCurrentPage();
            $pages = $this->getPages();
            if($currentPage > $pages) {
                throw new Exception('Cette page n\'existe pas');
            }
            $offset = $this->perPage*($currentPage - 1);
            $this->items = $this->pdo->query(
                $this->query . 
                " LIMIT {$this->perPage} OFFSET $offset")
                ->fetchAll(PDO::FETCH_CLASS, $classMapping);
        }
        return $this->items;

    }

    private function getCurrentPage(): int
    {
        return URLHelper::getPositiveInt('p', 1);
    }

    public function previousLink(string $link): ?string
    {
        $currentPage = $this->getCurrentPage();
        if($currentPage <= 1) return null;
        if($currentPage >= 2) {
            $l = $link. "?p=" .($currentPage - 1);
        }
        return  <<<HTML
        <a href="{$link}" class="text-dark"><i class='fas fa-angle-double-left'></i></a>
        <a href="{$l}" class="text-dark"><i class='fas fa-angle-left'></i></a>
HTML;
    }
    
    public function nextLink(string $link): ?string
    {
        $currentPage = $this->getCurrentPage();
        $pages = $this->getPages();
        if($currentPage >= $pages) return null;
        if($currentPage ) {
            $l = $link. "?p=".($currentPage + 1);
        }
        return  <<<HTML
        <a href="{$l}" class="text-dark"><i class='fas fa-angle-right'></i></a>
        <a href="{$link}?p={$pages}" class="text-dark"><i class='fas fa-angle-double-right'></i></a>
HTML;
    }
    private function getPages()
    {
        if($this->count === null) {
            $this->count = (int)$this->pdo
            ->query($this->queryCount)
            ->fetch(PDO::FETCH_NUM)[0];
        }

        return ceil($this->count/$this->perPage);
    }
}