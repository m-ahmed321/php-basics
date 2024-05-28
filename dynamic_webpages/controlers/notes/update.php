<?php

spl_autoload_register(function ($class) {
    require 'core/' . $class . ".php";
});

$config = require ('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

function abort($code = 404)
{
    http_response_code($code);

    include "views/$code.php";
}


$note = $db->query('Select * from notes where id = :id', [
    'id' => $_POST['id']
])->fetch(PDO::FETCH_ASSOC);

if (!$note) {
    abort();
}

if ($note['user_id'] != $currentUserId) {
    abort(Response::FORBIDDEN);
}

$errors = [];

if (!Validater::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "A description of no more than 1000 characters is requied";
    $_POST['body'] = '';
}

if (count($errors)) {
    return require ('notes/edit.view.php');


    // $heading = 'Edit Note';
    // $errors = 'errors';
    // $note = 'note';
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

header('location: notes');
die();