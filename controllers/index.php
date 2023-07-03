<?php
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$jobs = $db->query('SELECT * FROM jobs')->get();

view("index.view.php");

?>