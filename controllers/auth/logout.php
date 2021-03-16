<?php
session_destroy();
header('Location:' . $router->url('f_login'));