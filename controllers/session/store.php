<?php

use Core\App;
use Core\Database;
use Core\Validator;


$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (! empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

// query user from database if it has or not
$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [

    'email' => $email

])->find();

// if it true, check the password

if ($user) {

    if (password_verify($password, $user['password'])) {

        // login function to create a session with that email

        login([

            'email' => $email

        ]);

        header('location: /');

        exit();
    }
}

return view('session/create.view.php', [

    'errors' => [

        'invalid' => 'No matching account found for that email address and password.'
        
    ]
]);


?>