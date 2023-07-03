<?php
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$companies = $db->query('SELECT * FROM employers')->get();

// dd($companies);

require '../views/companies/companies.view.php';

?>