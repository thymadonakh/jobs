<?php
use Core\App;
use Core\Database;
use Core\Validator;

// view('jobs.view.php');


$db = App::resolve(Database::class);

// dd($_POST);

$employer_id = 6;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $validators = [
        'title' => [$_POST['title'], 1, 200],
        'description' => [$_POST['description'], 1, 1000],
        'location' => [$_POST['location'], 1, 100],
        'job_type' => [$_POST['job_type'], 1, 100],
        'salary_range' => [$_POST['salary_range'], 1, 200],
        'deadline' => [$_POST['deadline'], 1, 100]
    ];

    foreach ($validators as $field => $rules) {
        $fieldValue = $rules[0];
        $minLength = $rules[1];
        $maxLength = $rules[2];

        if ($fieldValue === 'employer_id' || $fieldValue === 'info') {
            // Skip validation for the 'info' field if it exists
            continue;
        }

        if (!Validator::string($fieldValue, $minLength, $maxLength)) {
            $errors[$field] = "Error: Invalid input for $field";
        }
    }

    if (! empty($errors)) {

        return require '../views/jobs/create.view.php';
        
    }

    if (empty($errors)) {
        $jobs = $db->query('INSERT INTO jobs(employer_id, title, description, location, job_type, salary_range, deadline, info) VALUES (:employer_id, :title, :description, :location, :job_type, :salary_range, :deadline, :info)', [
            'employer_id' => $employer_id,
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'location' => $_POST['location'],
            'job_type' => $_POST['job_type'],
            'salary_range' => $_POST['salary_range'],
            'deadline' => $_POST['deadline'],
            'info' => $_POST['info']
        ]);
        
        header('location: /jobs');      
        die();
    }
}


?>