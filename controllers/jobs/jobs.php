<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$jobs = $db->query('SELECT * FROM jobs')->get();


view("jobs.view.php");

?>