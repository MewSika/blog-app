<?php

use PHPUnit\Framework\TestCase;

final class QueryBuilderTest extends TestCase
{

    public function getBuilder(): \App\QueryBuilder
    {
        $pdo = new PDO("sqlite::memory:");
        $pdo->query('CREATE TABLE products (
        id INTEGER CONSTRAINT products_pk primary key autoincrement,
        name TEXT,
        address TEXT,
        city TEXT)');
        for ($i = 1; $i <= 10; $i++) {
            $pdo->exec("INSERT INTO products (name, address, city) VALUES ('Product $i', 'Addresse $i', 'Ville $i');");
        }
        return new \App\QueryBuilder($pdo);
    }

    public function testSimpleQuery()
    {
        $q = $this->getBuilder()->from("users_b", "u")->toSQL();
        $this->assertEquals("SELECT * FROM users_b u", $q);
    }

    public function testOrderBy()
    {
        $q = $this->getBuilder()->from("users_b", "u")->orderBy("id", "DESC")->toSQL();
        $this->assertEquals("SELECT * FROM users_b u ORDER BY id DESC", $q);
    }

    public function testMultipleOrderBy()
    {
        $q = $this->getBuilder()
            ->from("users_b")
            ->orderBy("id", "ezaearz")
            ->orderBy("name", "DESC")
            ->toSQL();
        $this->assertEquals("SELECT * FROM users_b ORDER BY id, name DESC", $q);
    }

    public function testLimit()
    {
        $q = $this->getBuilder()
            ->from("users_b")
            ->limit(10)
            ->orderBy("id", "DESC")
            ->toSQL();
        $this->assertEquals("SELECT * FROM users_b ORDER BY id DESC LIMIT 10", $q);
    }

    public function testOffset()
    {
        $q = $this->getBuilder()
            ->from("users_b")
            ->limit(10)
            ->offset(3)
            ->orderBy("id", "DESC")
            ->toSQL();
        $this->assertEquals("SELECT * FROM users_b ORDER BY id DESC LIMIT 10 OFFSET 3", $q);
    }

    public function testOffsetWithoutLimit()
    {
        $this->expectException(\Exception::class);
        $this->getBuilder()
            ->from("users_b")
            ->limit(10)
            ->offset(3)
            ->orderBy("id", "DESC")
            ->toSQL();
    }

    public function testPage()
    {
        $q = $this->getBuilder()
            ->from("users_b")
            ->limit(10)
            ->page(3)
            ->orderBy("id", "DESC")
            ->toSQL();
        $this->assertEquals("SELECT * FROM users_b ORDER BY id DESC LIMIT 10 OFFSET 20", $q);
        $q = $this->getBuilder()
            ->from("users_b")
            ->limit(10)
            ->page(1)
            ->orderBy("id", "DESC")
            ->toSQL();
        $this->assertEquals("SELECT * FROM users_b ORDER BY id DESC LIMIT 10 OFFSET 0", $q);
    }

    public function testCondition()
    {
        $q = $this->getBuilder()
            ->from("users_b")
            ->where("id > :id")
            ->setParam("id", 3)
            ->limit(10)
            ->orderBy("id", "DESC")
            ->toSQL();
        $this->assertEquals("SELECT * FROM users_b WHERE id > :id ORDER BY id DESC LIMIT 10", $q);
    }

    public function testSelect()
    {
        $q = $this->getBuilder()
            ->select("id", "name", "product")
            ->from("users_b");
        $this->assertEquals("SELECT id, name, product FROM users_b", $q->toSQL());
    }

    public function testSelectMultiple()
    {
        $q = $this->getBuilder()
            ->select("id", "name")
            ->from("users_b")
            ->select('product');
        $this->assertEquals("SELECT id, name, product FROM users_b", $q->toSQL());
    }

    public function testSelectAsArray()
    {
        $q = $this->getBuilder()
            ->select(["id", "name", "product"])
            ->from("users_b");
        $this->assertEquals("SELECT id, name, product FROM users_b", $q->toSQL());
    }

    public function testFetch()
    {
        $city = $this->getBuilder()
            ->from("products")
            ->where("name = :name")
            ->setParam("name", "Product 1")
            ->fetch("city");
        $this->assertEquals("Ville 1", $city);
    }

    public function testFetchAll()
    {
        $products = $this->getBuilder()
            ->from("products")
            ->where("name = :name")
            ->setParam("name", "Product 1")
            ->fetchAll();
        $this->assertEquals("Ville 1", $products[0]['city']);
    }

    public function testFetchAllWithNoData()
    {
        $products = $this->getBuilder()
            ->from("products")
            ->where("name = :name")
            ->setParam("name", "azeaze")
            ->fetchAll();
        $this->assertEmpty($products);
    }

    public function testFetchWithInvalidRow()
    {
        $city = $this->getBuilder()
            ->from("products")
            ->where("name = :name")
            ->setParam("name", "zerzerzerzer")
            ->fetch("city");
        $this->assertNull($city);
    }
    public function testCount()
    {
        $query = $this->getBuilder()
            ->from("products")
            ->where("name IN (:name1, :name2)")
            ->setParam("name1", "Product 1")
            ->setParam("name2", "Product 2");
        $this->assertEquals(2, $query->count());
    }

    /**
     * L'appel a count ne doit pas modifier les champs de la première requête
     */
    public function testBugCount()
    {
        $q = $this->getBuilder()->from("products");
        $this->assertEquals(10, $q->count());
        $this->assertEquals("SELECT * FROM products", $q->toSQL());
    }
}