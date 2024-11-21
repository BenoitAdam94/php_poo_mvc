<?php
// app/controllers/ArticleController.php

namespace App\Controllers;

class ArticleController {
    public function index() {
        echo "Bienvenue sur la page d'accueil!";
    }

    public function listArticles() {
        // Appeler le modèle pour récupérer les articles
        require_once '../app/models/ArticleModel.php';
        $articleModel = new \App\Models\ArticleModel();
        $articles = $articleModel->getAllArticles();
        
        // Passer les données à la vue
        require_once '../app/views/article/list.php';
    }
}
