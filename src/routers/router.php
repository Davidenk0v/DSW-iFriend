<?php

$router->map('GET', '/', 'DefaultController#index', 'index');
$router->map('GET', '/user', 'UserController#index', 'user');

