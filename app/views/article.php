<!-- app/views/article.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $article['title']; ?></title>
</head>
<body>
    <h1><?= $article['title']; ?></h1>
    <p><?= $article['content']; ?></p>
    <a href="/">Retour à la liste des articles</a>
</body>
</html>
