<?php

use Core\Container;

use Core\Database;

use Core\App;

require 'Core/Container.php';

require 'Core/App.php';

$container = new Container();

$container->bind('Core\Database', function(){

    $config = require base_path('config.php');

    return new Database($config['database']);
});

App::setContainer($container);

?>
