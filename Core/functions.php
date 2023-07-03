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

    // extract($attribute);

   return require base_path("views/". $path);
}

?>