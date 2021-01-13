<?php
namespace App\Table;

use App\Helpers\URLHelper;
use App\QueryBuilder;

class EstateTable {

    private $query;

    private $get;

    private $sortable = [];

    private $columns = [];

    private $limit = 20;

    private $formatters = [];

    const SORT_KEY = "sort";

    const DIR_KEY = "dir";

    public function __construct(QueryBuilder $query, array $get)
    {
        $this->query = $query;
        $this->get = $get;
    }

    public function sortable(string ...$sortable): self
    {
        $this->sortable = $sortable;
        return $this;
    }

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function format(string $key, callable $function): self
    {
        $this->formatters[$key] = $function;
        return $this;
    }

    private function th (string $sortKey): string
    {
        if(!in_array($sortKey, $this->sortable)){
            return $this->columns[$sortKey];
        }
        $sort = $this->get[self::SORT_KEY] ?? null; 
        $direction = $this->get[self::DIR_KEY] ?? null;
        $icon = "";
        if($sort === $sortKey) {
            $icon = $direction === "asc" ? "^" : "v";
        }
        $url = URLHelper::withParams($this->get, [
            self::SORT_KEY => $sortKey,
            self::DIR_KEY => $direction === "asc" && $sort === $sortKey ? 'desc' : 'asc']);
        return <<<HTML
        <a href="?$url">{$this->columns[$sortKey]} $icon</a>
HTML;
    }

    private function td (string $key, array $item): string
    {
        if(isset($this->formatters[$key])){
            return $this->formatters[$key]($item[$key]);
        }
        return $item[$key];
    }
    
    public function render()
    {
        $page = $this->get['page'] ?? 1;
        $count = (clone $this->query)->count();
        // Organisation
        if(!empty($this->get['sort']) && in_array($this->get['sort'], $this->sortable)) {
            $this->query->orderBy($this->get['sort'], $this->get['dir'] ?? 'asc');
        }
        $items = $this->query
            ->select(array_keys($this->columns))
            ->limit($this->limit)
            ->page($page)
            ->fetchAll();

            $pages = ceil($count / $this->limit);
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <?php foreach($this->columns as $key => $column): ?>
                        <th><?= $this->th($key) ?></th>
                        <?php endforeach ;?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $item) :?>
                    <tr>
                        <?php foreach ($this->columns as $key => $column) :?>
                            <td><?= $this->td($key, $item) ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <aside class="text-center mb-5">
            <?php if ($pages > 1 && $page > 1) : ?>
                <a href="?<?= URLHelper::withParam($_GET, "p", [$page-1, $page+2])?>" class="text-dark"><i class='fas fa-angle-double-left'></i></a>
            <?php endif ; ?>
            <?php if ($pages > 1 && $page < $pages) : ?>
                <a href="?<?= URLHelper::withParam($_GET, "p", $page+1)?>" class="text-dark"><i class='fas fa-angle-double-right'></i></a>
            <?php endif ; ?>
            </aside>
            
            <?php
    }
}