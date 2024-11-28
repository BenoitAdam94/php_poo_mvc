<?php

require '../app/Autoloader.php';

\App\Autoloader::register();

// Initialisation des objets
// connection a la bdd

use App\Database;
$db = new Database('courspoo');

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

if($p === 'home') {
    require 'pages/home.php';
} elseif ($p === 'single') {
    require 'pages/single.php';
}



$content = ob_get_clean();

require 'pages/templates/default.php';