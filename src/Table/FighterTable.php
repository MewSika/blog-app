<?php

namespace App\Table;

use PDO;
use App\Table\Table;
use App\Model\Fighter;
use App\PaginatedQuery;
use App\Manager\FileManager;

class FighterTable extends Table{

    protected $table = "fighter";
    protected $class = Fighter::class;

    public function createFighter(array $data){

    }

    public function updateFighter()
    {

    }

    public function deleteFighter()
    {

    }

    /**
     * @param  int $categoryID
     * @return void
     */
    public function findPaginated(?array $params = [], ?string $key = null)
    {
        $paginatedQuery = new PaginatedQuery(
            "SELECT * FROM {$this->table} ".
            (!is_null($key) ? ' WHERE '.$key.' LIKE :'.$key : '').
            " ORDER BY name DESC ",
            "SELECT COUNT(id) FROM {$this->table} " .
            (!is_null($key) ? ' WHERE '.$key.' LIKE :'.$key : ''),
            $this->pdo,
            30
        );
        $fighters = $paginatedQuery->getItems(Fighter::class, $params, $key);
        return [$fighters, $paginatedQuery];
    }

    public function getAllFighters()
    {
        return $this->queryAndFetchAll("SELECT * FROM {$this->table} ORDER BY name ASC");
    }

    public function importData($filePath)
    {
        $fileManager = new FileManager();
        $fightersData = $fileManager->explodeFileToArray($filePath);

        /* foreach($fightersData as $k => $fighter){
            $sql = "INSERT INTO {$this->table}
                    SET name = :name, win = :win, lose = :lose, draw = :draw, nc = :nc,
                        height = :height, weight = :weight, reach = :reach, stance = :stance,
                        dob = :dob, SLpM = :SLpM, Str_Acc = :Str_Acc, SApM = :SApM, Str_Def = :Str_Def,
                        TD_Avg = :TD_Avg, TD_Acc = :TD_Acc, TD_Def = :TD_Def, Sub_Avg = :Sub_Avg, last_updated = :last_updated";
            $query = $this->pdo->prepare($sql);
            $query->bindValue(':name', $fighter[0], PDO::PARAM_STR);
            $query->bindValue(':win', $fighter[1], PDO::PARAM_INT);
            $query->bindValue(':lose', $fighter[2], PDO::PARAM_INT);
            $query->bindValue(':draw', $fighter[3], PDO::PARAM_INT);
            $query->bindValue(':nc', $fighter[4], PDO::PARAM_INT);
            $query->bindValue(':height', $fighter[5], PDO::PARAM_INT);
            $query->bindValue(':weight', $fighter[6], PDO::PARAM_INT);
            $query->bindValue(':reach', $fighter[7], PDO::PARAM_INT);
            $query->bindValue(':stance', $fighter[8], PDO::PARAM_STR);
            $query->bindValue(':dob', $fighter[9], PDO::PARAM_STR);
            $query->bindValue(':SLpM', $fighter[10], PDO::PARAM_INT);
            $query->bindValue(':Str_Acc', $fighter[11], PDO::PARAM_INT);
            $query->bindValue(':SApM', $fighter[12], PDO::PARAM_INT);
            $query->bindValue(':Str_Def', $fighter[13], PDO::PARAM_INT);
            $query->bindValue(':TD_Avg', $fighter[14], PDO::PARAM_INT);
            $query->bindValue(':TD_Acc', $fighter[15], PDO::PARAM_INT);
            $query->bindValue(':TD_Def', $fighter[16], PDO::PARAM_INT);
            $query->bindValue(':Sub_Avg', $fighter[17], PDO::PARAM_INT);
            $query->bindValue(':last_updated', $fighter[18], PDO::PARAM_STR);
            $query->execute(); 
        }*/
    }

}