<?php

require 'form.php';

$form = new Form($_POST);

?>


<form action="#" method="post"></form>

    <?php
    echo $form->input('username');

    echo $form->input('password');

    $form->input()

    echo $form->submit();

    ?>

</form>