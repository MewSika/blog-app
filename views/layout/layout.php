<?php
use App\HTML\Nav;
?>

<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $pageDescribe ?? ''?>">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>
      <?= isset($title) ? e($title) : "Mon site"; ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?= CSS_PATH ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Favicons -->
    <meta name="theme-color" content="#563d7c">

    <style>
      .caption {
        position: absolute;
        color: white;
        opacity: 0.63;
        text-shadow: black 2px 2px;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 px-3">
  <a class="navbar-brand" href="/"><i class='fas fa-home'></i></a>
  <ul class="navbar-nav mr-auto">
    <?= Nav::nav_menu('nav-link', $router) ?>
  </ul>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<body class="d-flex flex-column h-100 bg-light">
    <div class="container">
        <?= $pageContent ?>
    </div>
    <footer class="bg-dark py-4 footer mt-auto">
      <div class="container text-light">
          <?php if(DEBUG_TIME) :?>
            Générée en <?= round(1000* (microtime(true) - DEBUG_TIME)) ?>ms
          <?php endif; ?>
      </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
