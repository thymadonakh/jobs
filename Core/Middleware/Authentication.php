<?php

namespace Core\Middleware;

class Authentication {

    public function handle() {

        if (! $_SESSION['user'] ?? false) 
        
        {

            header('location: /');

            exit();

        }
    }
}



?>