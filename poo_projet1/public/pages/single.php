<?php

// Connection à la BDD
$pdo = $db->getPDO();

// Si l'ID est présent
if (isset($_GET['id'])){
$id = $_GET['id'];

$post = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
$post->bindParam(":id", $id, PDO::PARAM_STR);
$post->execute();

// var_dump($post); Affiche la requete SQL

$datas = $post->fetchAll(PDO::FETCH_OBJ);

$titre = $datas[0]->titre;
$contenu = $datas[0]->contenu;
$date = $datas[0]->date;

}

?>

<h2><?= $titre ?></h2>

<em><?= $date ?></em>

<p><?= $contenu ?></p>