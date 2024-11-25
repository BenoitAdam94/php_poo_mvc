<?php

/* autoloading */

function __autload($class_name) {
    require 'class/' . $class_name . '.php';
}

spl_autoload_register('mon_autoloader');
