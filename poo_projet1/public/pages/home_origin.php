<?php

$pdo = new PDO('mysql:dbname=courspoo;host=localhost', 'root', '');

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// PDO EXEC
$count = $pdo->exec('INSERT INTO articles SET titre="Mon Titre", date="' . date('Y-m-d H:i;s').  '"');
// var_dump($count); // Verification, si 1 = requette executé

$res = $pdo->query("SELECT * FROM articles");

// var_dump($res->fetchAll(PDO::FETCH_OBJ));

$datas = $res->fetchAll(PDO::FETCH_OBJ);

var_dump($datas[0]->titre);

//var_dump($datas[0]->titre);


?>
je suis la home

<a href="index.php?p=single">Single PHP</a>