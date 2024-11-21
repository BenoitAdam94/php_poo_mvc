<?php
// app/views/article/list.php

echo "<h1>Liste des Articles</h1>";
foreach ($articles as $article) {
    echo "<h2>" . $article['title'] . "</h2>";
    echo "<p>" . $article['content'] . "</p>";
}
