<?php

function dd($value) {
    echo "<pre>";   
    var_dump($value);
    echo "</pre>";

    die();
}

function abort($status = 404) {
    http_response_code($status);

    require base_path("views/{$status}.php");
}

function urlIs($value) {
    
    return $_SERVER['REQUEST_URI'] === $value;

}

function base_path($path){

    return BASE_PATH . $path;
    
}

function view($path, $attribute = []) {

    extract($attribute);

   return require ('../views/' . $path);
}


function login($user){


    $_SESSION['user'] = [

        'email' => $user['email']
        
    ];

}

function logout()
{
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}


?>