<?php
$router->get('/', 'controllers/index.php');

$router->get('/jobs', 'controllers/jobs/jobs.php');
$router->get('/jobs/create', 'controllers/jobs/create.php');
$router->post('/jobs', 'controllers/jobs/store.php');

$router->get('/companies', 'controllers/companies/companies.php');
$router->get('/companies/create', 'controllers/companies/create.php');
$router->post('/companies', 'controllers/companies/store.php');


$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');



?>