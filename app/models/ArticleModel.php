<?php
// app/models/ArticleModel.php

namespace App\Models;

class ArticleModel {
    public function getAllArticles() {
        // Ici, tu devras normalement te connecter à la base de données pour récupérer les articles
        // Par exemple avec PDO :
        
        // $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        // $query = $pdo->query('SELECT * FROM articles');
        // return $query->fetchAll(PDO::FETCH_ASSOC);

        // Pour cet exemple, on retourne un tableau simulé
        return [
            ['id' => 1, 'title' => 'Premier article', 'content' => 'Contenu du premier article'],
            ['id' => 2, 'title' => 'Deuxième article', 'content' => 'Contenu du deuxième article'],
        ];
    }
}
