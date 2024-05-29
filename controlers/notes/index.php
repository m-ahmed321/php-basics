<?php

include_once ('core/Middleware.php');
guestMiddleware();


spl_autoload_register(function ($class) {
    require 'core/' . $class . ".php";
});
$config = require ('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('Select * from notes where user_id = 1')->fetchAll(PDO::FETCH_ASSOC);


include 'views/notes/index.view.php';