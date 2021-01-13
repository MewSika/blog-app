<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
        Menu
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="text-dark nav-link small" href="<?= $router->url('admin_post_new');?>">Créer un article</a>
        </li>
        <li class="nav-item">
            <a class="text-dark nav-link small" href="<?= $router->url('posts_manage');?>">Gestion des articles</a>
        </li>
        <li class="nav-item">
            <a class="text-dark nav-link small" href="<?= $router->url('admin_category_new');?>">Créer une catégorie</a>
        </li>
        <li class="nav-item">
            <a class="text-dark nav-link small" href="<?= $router->url('categories_manage');?>">Gestion des catégories</a>
        </li>
        <li class="nav-item">
            <a class="text-dark nav-link small" href="<?= $router->url('user');?>">Gestion utilisateurs</a>
        </li>
    </ul>
</nav>