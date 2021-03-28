<?php

namespace App\Table;
use App\Model\Fighter;
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

    /**
     * Hydrate la table Weightcategory
     *
     * @param  array $fighters
     * @return WeightCategory 
     */
    public function hydrateWeightCategory(array $fighters): ?array
    {
        $fighterCatID = [];
        foreach($fighters as $fighter) {
            $fighterCatID[$fighter->getWeightCatId()] = $fighter;
        }
        if(empty($fighters)) 
        {
            return null;
        }
        $categories = $this->pdo->query(
                'SELECT wc.* 
                FROM weightcategory wc
                WHERE wc.id IN ('. implode(',', array_keys($fighterCatID)).')'
            )->fetchAll(\PDO::FETCH_CLASS, WeightCategory::class);
        return $categories;
    }
}
