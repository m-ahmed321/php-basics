<?php

$router->get('/', 'controlers/index.php');
$router->get('about', 'controlers/about.php');
$router->get('contact', './controlers/contact.php');


$router->get('notes', 'controlers/notes/index.php');
$router->get('create', 'controlers/notes/create.php');
$router->post('create', 'controlers/notes/store.php');
$router->delete('note', 'controlers/notes/destroy.php');
$router->get('note/edit', 'controlers/notes/edit.php');
$router->patch('note', 'controlers/notes/update.php');
$router->get('note', 'controlers/notes/show.php');
$router->get('register', 'controlers/registration/create.php');
$router->post('register', 'controlers/registration/store.php');
