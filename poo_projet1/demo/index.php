<?php

require 'car.php';
require 'car_4x4.php';
require 'car_citadine.php';
require 'carFactory.php';


$citadine = CarFactory::getCar('Citadine');
$quatre = CarFactory::getCar('4x4');


var_dump($citadine);

var_dump($quatre);