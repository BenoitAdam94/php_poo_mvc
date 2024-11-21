<?php

require 'form.php';


$form = new Form(array(
    'username' => 'Roger'
));

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

