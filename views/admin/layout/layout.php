<?php

use App\Auth\App;
use App\Auth\Auth;
use App\Exception\ForbiddenException;

Auth::adminOnly($router);

?>
<!doctype html>
<html lang="fr" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $pageDescribe ?? ''?>">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>
        <?= isset($title) ? e($title) : "Mon site"; ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Favicons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap py- shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="<?= $router->url('dashboard')?>">Administration</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <form action="<?= $router->url('logout')?>" method="post">
        <button type="submit" class="btn btn-dark">Se déconnecter</button> 
      </form>
    </li>
  </ul>
</header>

<body class="d-flex flex-column h-100">
  <div class="container-fluid h-100">
    <div class="row h-100">
        <?php require dirname(__DIR__).'/_menu.php'; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
          <?= $pageContent ?>
        </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
