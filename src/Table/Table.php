<?php
namespace App\Table;

use PDO;
use App\Table\Exception\NotFoundException;

abstract class Table {

    protected $pdo;
    protected $table = null;
    protected $class = null;

    public function __construct(\PDO $pdo)
    {
        if($this->table === null) {
            throw new \Exception("La classe ". get_class($this)." n'a pas de propriété \$table ");
        }
        if($this->class === null) {
            throw new \Exception("La classe ". get_class($this)." n'a pas de propriété \$class ");
        }
        $this->pdo = $pdo;
    }

    /**
     * Vérifie si une valeur existe en base de données 
     * 
     * @param string $field champs à rechercher
     * @param string $value valeur à associer au champs
     */
    public function exists(string $field, $value, ?int $except = null): bool
    {
        $sql = "SELECT COUNT(id) FROM {$this->table} WHERE $field = ?";
        $params = [$value];
        if($except !== null) {
            $sql .= " AND id != $except";
            $params[] = $except;
        }
        $query = $this->pdo->prepare($sql);
        $query->execute([$value]);
        return (int)$query->fetch(PDO::FETCH_NUM)[0] > 0;
    }

    public function find(int $id)
    {
        $query = $this->pdo->prepare("SELECT * 
                        FROM $this->table 
                        WHERE id = :id");
        $query->execute(['id' => $id]);
        $query->setfetchMode(\PDO::FETCH_CLASS, $this->class);
        $result = $query->fetch();
        if($result === false) {
            throw new NotFoundException($this->table, $id);
        }
        return $result;
    }

    public function all(): array
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql, PDO::FETCH_CLASS, $this->class)->fetchAll();
    }

    public function create(array $data): int
    {
        $sqlFields = [];
        foreach($data as $key => $value) {
            $sqlFields[] = "$key = :$key";
        } 
        $query = $this->pdo->prepare("INSERT INTO {$this->table} SET " . implode(", ", $sqlFields));
        $create = $query->execute($data);
        if($create === false) {
            throw new \Exception("Impossible de créer l'enregistrement dans la table {$this->table}");
        }
        return $this->pdo->lastInsertId();
    }

    public function update (array $data, int $id) 
    {
        $sqlFields = [];
        foreach ($data as $key => $value) {
            $sqlFields[] = "$key = :$key";
        }
        $query = $this->pdo->prepare("UPDATE {$this->table} SET " . implode(', ', $sqlFields) . " WHERE id = :id");
        $update = $query->execute(array_merge($data, ['id' => $id]));
        if ($update === false) {
            throw new \Exception("Impossible de modifier l'enregistrement dans la table {$this->table}");
        }
    }
     
    public function delete(int $id):void 
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = ? ");
        $deleted = $query->execute([$id]);
        if($deleted === false) {
            throw new \Exception("Impossible de supprimer l'enregistrement $id dans la table {$this->table}");
        }
    }

    public function queryAndFetchAll (string $sql): array
    {
        return $this->pdo->query($sql, PDO::FETCH_CLASS, $this->class)->fetchAll();
    }

       
    /**
     * TODO à corriger
     *
     * @param  string $sql requête envoyée à la méthode
     * @param  array $params 
     * @return array
     */
    public function prepAndFetch(string $sql, array $params): array
    {
        $query = $this->pdo->prepare($sql);

        $params = array_map(function ($v) {
            return is_array($v) ? implode(',', $v) : $v;
        }, $params);

        $query->setfetchMode(\PDO::FETCH_CLASS, $this->class);
        $result = $query->fetch();
        if($result === false) { 
            throw new NotFoundException($this->table, $params);
        }
        return $result;
    }
}