<!-- app/views/articles.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des articles</title>
</head>
<body>
    <h1>Articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <a href="/article?id=<?= $article['id']; ?>"><?= $article['title']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
