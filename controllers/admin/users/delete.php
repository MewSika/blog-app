<?php

$auth->delete($params['id']);
header('Location:' . $router->url('users_manage') . '?delete=1');
