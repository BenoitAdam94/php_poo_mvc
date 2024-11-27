<?php

use App\Database;

$db = new Database('courspoo');

$datas = $db->query('SELECT * FROM articles');

var_dump($datas);

//var_dump($datas[0]->titre);


?>
je suis la home

<a href="index.php?p=single">Single PHP</a>