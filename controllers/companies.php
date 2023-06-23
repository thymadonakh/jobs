<?php
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$employers = $db->query('SELECT * FROM employers')->get();


view("companies.view.php");

?>