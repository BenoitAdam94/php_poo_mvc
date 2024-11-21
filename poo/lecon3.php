<?php

require 'personnage.php';

$merlin = new Personnage("Merlin");
$merlin->nom = "Merlin";

var_dump($merlin);
var_dump($merlin->vie);
var_dump($merlin->atk);
var_dump($merlin->crier());

// $merlin->vie = 100;

var_dump($merlin->vie);

$merlin->regen();

var_dump($merlin->vie);


$harry = new Personnage("Harry");
$harry->nom = "Harry";

var_dump($harry);


var_dump($harry->mort()); // false

$merlin->attaque($harry);