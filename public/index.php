<?php
// public/index.php

require_once '../config/config.php';
require_once '../app/controllers/ArticleController.php';

use App\Controllers\ArticleController;

$requestUri = $_SERVER['REQUEST_URI'];

// var_dump($requestUri);
$controller = new ArticleController();

if ($requestUri == "/mini-site-mvc/") {
    $controller->index();
} elseif ($requestUri == "/mini-site-mvc/articles") {
    $controller->listArticles();
} else {
    echo "Page not found!";
}


