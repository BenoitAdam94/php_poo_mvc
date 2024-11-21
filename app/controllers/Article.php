<?php
// app/models/Article.php

namespace App\Models;

class Article {
    private $articles;

    public function __construct() {
        // Données statiques simulant une base de données
        $this->articles = [
            ['id' => 1, 'title' => 'Premier article', 'content' => 'Contenu du premier article'],
            ['id' => 2, 'title' => 'Deuxième article', 'content' => 'Contenu du deuxième article'],
            ['id' => 3, 'title' => 'Troisième article', 'content' => 'Contenu du troisième article'],
        ];
    }

    // Méthode pour récupérer tous les articles
    public function getAll() {
        return $this->articles;
    }

    // Méthode pour récupérer un article par son ID
    public function getById($id) {
        foreach ($this->articles as $article) {
            if ($article['id'] == $id) {
                return $article;
            }
        }
        return null;
    }
}
