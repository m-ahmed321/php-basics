<?php 
spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});

$config = require('config.php');
$db = new Database($config['database']);

$heading='Create New Note';


require 'views/notes/create.view.php';