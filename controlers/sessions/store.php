<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


spl_autoload_register(function ($class) {
    require 'core/' . $class . ".php";
});

require 'Http/Forms/LoginForm.php';

$config = require ('config.php');
$db = new Database($config['database']);

$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();
$form->validate($email, $password);

if (!$form->validate($email, $password)) {
    return require ('views/sessions/create.view.php');
}

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->fetch();

if ($user) {

    if (password_verify($password, $user['password'])) {
        function login($user)
        {

            $_SESSION['user'] = $user['email'];
        }
        login([
            'email' => $email
        ]);
        header('location: /dynamic_webpages/');
        exit();
    }
}


$errors['email'] = 'No matching Account found for that email address and password';
return require ('views/sessions/create.view.php');



