<?php



spl_autoload_register(function ($class) {
    require 'core/' . $class . ".php";
});

$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];
if (!Validater::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}
if (!Validater::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of 7 characters';
}

if (!empty($errors)) {
    return require ('views/registration/create.view.php');
}

$config = require ('config.php');
$db = new Database($config['database']);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->fetch();


if ($user) {
    echo "User already exists... <a href='login'>Login</a>";
} else {
    $user = $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    header('location: /dynamic_webpages');
    exit();
}