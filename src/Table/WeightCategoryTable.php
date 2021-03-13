<?php

namespace App\Table;
use App\Model\WeightCategory;

final class WeightCategoryTable extends Table{

    protected $table = 'weightcategory';
    protected $class = WeightCategory::class;

    public function createCategory(WeightCategory $weightCategory): void
    {
        $id = $this->create([
            'name' => $weightCategory->getName(),
            'weight' => $weightCategory->getWeight(),
        ]);

        $weightCategory->setID($id);
    }

    public function list(): array
    {
        $weightCategories = $this->queryAndFetchAll("SELECT * FROM {$this->table} ORDER BY id ASC");
        $results = [];
        foreach($weightCategories as $weightCategory) {
            $results[$weightCategory->getID()] = $weightCategory->getName();
        }
        return $results;
    }


}
