<?php

$router->get('/', 'controllers/index.php');
$router->get('/jobs', 'controllers/jobs/jobs.php');
$router->get('/companies', 'controllers/companies.php');

?>