<?php
require 'form.php';
require 'personnage.php';
require "text.php";

$merlin = new Personnage('Merlin');

$merlin->regenerer();


var_dump($merlin);

$form = new Form($_POST);

var_dump(Text::withZero(4));

var_dump(Text::publicwithZero(4));

echo $form->input('username');

echo $form->input('password');

echo $form->submit();


$form = new Form();

echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->submit();

