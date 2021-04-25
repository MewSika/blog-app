<?php
namespace App\Table;

use App\Model\Post;
use App\Model\Category;
use App\PaginatedQuery;

final class PostTable extends Table {

    protected $table = "post";
    protected $class = Post::class;
    
    /**
     * @param App\Model\Post $post
     * @return void
     */
    public function updatePost(Post $post): void
    {
        $this->update([
            'name' => $post->getName(),
            'slug' => $post->getSlug(),
            'author' => $post->getAuthor(),
            'created_at' => $post->getCreatedAt()->format('Y-m-d H:i:s'),
            'content' => $post->getContent(),
            'image' => $post->getImage()
        ], $post->getID());
    }
    
    /**
     * @param App\Model\Post $post
     * @return void
     */
    public function createPost(Post $post): void
    {
        $id = $this->create([
            'name' => $post->getName(),
            'author' => $post->getAuthor(),
            'slug' => $post->getSlug(),
            'created_at' => $post->getCreatedAt()->format('Y-m-d H:i:s'),
            'content' => $post->getContent(),
            'image' => $post->getImage()
        ]);
        $post->setID($id);
    }

        
    /**
     * @param  int $id id de l'article
     * @param App\Model\Category[] $categories
     * @return void
     */
    public function attachCategories(int $id, array $categories)
    {
        $this->pdo->exec('DELETE FROM post_category WHERE post_id = ' . $id);
        $query = $this->pdo
                ->prepare('INSERT INTO post_category SET post_id = :post_id, category_id = :category_id');
        foreach($categories as $category) {
            $query->execute(['post_id' => $id, 'category_id' => $category]);
        }
    }

    /**
     * Affiche les articles avec la pagination
     *
     * @param  array $params tableau de paramètres dans le cas d'une recherche
     * @param  string $key clef du tableau de la recherche 
     * @return void
     */
    public function findPaginated(?array $params = [], ?string $key = null)
    {
        $paginatedQuery = new PaginatedQuery(
            "SELECT * FROM {$this->table} ".
            (!is_null($key) ? ' WHERE '.$key.' LIKE :'.$key : '').
            " ORDER BY created_at DESC ",
            "SELECT COUNT(id) FROM {$this->table} " .
            (!is_null($key) ? ' WHERE '.$key.' LIKE :'.$key : ''),
            $this->pdo,
        );
        $posts = $paginatedQuery->getItems(Post::class, $params, $key);
        (new CategoryTable($this->pdo))->hydratePost($posts);
        return [$posts, $paginatedQuery];
    }
        
    /**
     * @param  int $categoryID
     * @return void
     */
    public function findPaginatedForCategory(int $categoryID)
    {
        $paginatedQuery = new PaginatedQuery(
            " SELECT p.* 
            FROM {$this->table} p
            JOIN post_category pc ON pc.post_id = p.id
            WHERE pc.category_id = {$categoryID}
            ORDER BY created_at DESC",
            "SELECT COUNT(post_id) FROM post_category WHERE category_id = {$categoryID}",
        );
        $posts = $paginatedQuery->getItems(Post::class);
        (new CategoryTable($this->pdo))->hydratePost($posts);
        return [$posts, $paginatedQuery];
    }
        
    /**
     * Récupère les derniers articles rédigés
     * @return array
     */
    public function getLastPosts(int $limit): array
    {
        return $this->queryAndFetchAll("SELECT * FROM {$this->table} ORDER BY created_at DESC LIMIT {$limit}");
    }
    
    /**
     * @param  int $id
     * @return Post
     */
    public function getNextPost(int $id): ?Post
    {
        return $this->queryAndFetch("SELECT * FROM {$this->table} WHERE id > $id ORDER BY created_at ASC LIMIT 1");
    }
    
    /**
     * @param  int $id
     * @return Post
     */
    public function getPrevioustPost(int $id): ?Post
    {
        return $this->queryAndFetch("SELECT * FROM {$this->table} WHERE id < $id ORDER BY created_at DESC LIMIT 1");
    }
}