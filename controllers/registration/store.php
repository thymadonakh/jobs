<?php

use Core\App;
use Core\Database;
use Core\Validator;


$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if(! Validator::email($email)) {

    $errors['email'] = 'Please provide a valid email';

}

if (! Validator::string($password, 7, 255)) {

    $errors['password'] = 'Please provide a passwords of at least 7 characters';

}

if (! empty($errors)) {

    return require view('registration/create.view.php', [
        'errors' => $errors,
    ]);
} 

$db = App::resolve(Database::class);

// check if the user already existed

$user = $db->query('SELECT * FROM users where email = :email', [
    'email' => $email,
])->find();

if ($user) {
    
    // then someone with the email already exist with the email for the account

    header('location: /');

} else {

    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    // mark that user logined

    login($user);

    header('location: /');
    
    exit();
}

?>