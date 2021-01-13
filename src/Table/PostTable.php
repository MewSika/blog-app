<?php
namespace App\Table;

use App\Model\Post;
use App\Model\Category;
use App\PaginatedQuery;

final class PostTable extends Table {

    protected $table = "post";
    protected $class = Post::class;

    public function updatePost(Post $post): void
    {
        $this->update([
            'name' => $post->getName(),
            'slug' => $post->getSlug(),
            'author' => $post->getAuthor(),
            'created_at' => $post->getCreatedAt()->format('Y-m-d h:i:s'),
            'content' => $post->getContent(),
            'image' => $post->getImage()
        ], $post->getID());
    }

    public function createPost(Post $post): void
    {
        $id = $this->create([
            'name' => $post->getName(),
            'author' => $post->getAuthor(),
            'slug' => $post->getSlug(),
            'created_at' => $post->getCreatedAt()->format('Y-m-d h:i:s'),
            'content' => $post->getContent(),
            'image' => $post->getImage()
        ]);
        $post->setID($id);
    }

    public function attachCategories(int $id, array $categories)
    {
        $this->pdo->exec('DELETE FROM post_category WHERE post_id = ' . $id);
        $query = $this->pdo
                ->prepare('INSERT INTO post_category SET post_id = :post_id, category_id = :category_id');
        foreach($categories as $category) {
            $query->execute(['post_id' => $id, 'category_id' => $category]);
        }
    }

    public function findPaginated()
    {
        $paginatedQuery = new PaginatedQuery(
            "SELECT * FROM {$this->table} 
            ORDER BY created_at DESC",
            "SELECT COUNT(id) FROM post",
            $this->pdo
        );
        $posts = $paginatedQuery->getItems(Post::class);
        (new CategoryTable($this->pdo))->hydratePost($posts);
        return [$posts, $paginatedQuery];
    }

    public function findPaginatedForCategory(int $categoryID)
    {
        $paginatedQuery = new PaginatedQuery(
            " SELECT p.* 
            FROM {$this->table} p
            JOIN post_category pc ON pc.post_id = p.id
            WHERE pc.category_id = {$categoryID}
            ORDER BY created_at DESC",
            "SELECT COUNT(category_id) FROM post_category WHERE category_id = {$categoryID}",
        );
        $posts = $paginatedQuery->getItems(Post::class);
        (new CategoryTable($this->pdo))->hydratePost($posts);
        return [$posts, $paginatedQuery];
    }
}