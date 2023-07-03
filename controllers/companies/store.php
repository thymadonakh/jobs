<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $validators = [
        'company_name' => [$_POST['company_name'], 1, 200],
        'logo' => [$_FILES['logo']['name'], 1, 1000], // Assign file name to 'logo' key
        'industry' => [$_POST['industry'], 1, 100],
        'website' => [$_POST['website'], 1, 100],
        'company_email' => [$_POST['company_email'], 1, 200],
        'password' => [$_POST['password'], 1, 100],
        'contact_name' => [$_POST['contact_name'], 1, 100],
        'contact_phone' => [$_POST['contact_phone'], 1, 100],
        'contact_email' => [$_POST['contact_email'], 1, 100],
        'info' => [$_POST['info'], 1, 100]
    ];

    foreach ($validators as $field => $rules) {
        $fieldValue = $rules[0];
        $minLength = $rules[1];
        $maxLength = $rules[2];

        if ($field === 'info') {
            // Skip validation for the 'info' field if it exists
            continue;
        }

        if (!Validator::string($fieldValue, $minLength, $maxLength)) {
            $errors[$field] = "Error: Invalid input for $field";
        }
    }

    if (! empty($errors)) {

        return require '../views/companies/create.view.php';
        
    }

    if (empty($errors)) {
        // File upload handling
        $uploadDir = base_path('public/uploads/');
        $uploadedFileName = $_FILES['logo']['name'];
        $uploadedFileTmp = $_FILES['logo']['tmp_name'];
        $upload_file = move_uploaded_file($uploadedFileTmp, $uploadDir . $uploadedFileName);
        // Move the uploaded file to the desired directory
        if ($upload_file) {
            // File upload successful

            // Database insertion
            $jobs = $db->query('INSERT INTO employers(company_name, logo, industry, website, company_email, password, contact_name, contact_phone, contact_email, info) VALUES (:company_name, :logo, :industry, :website, :company_email, :password, :contact_name, :contact_phone, :contact_email, :info)', [
                'company_name' => $_POST['company_name'],
                'logo' => $uploadedFileName,
                'industry' => $_POST['industry'],
                'website' => $_POST['website'],
                'company_email' => $_POST['company_email'],
                'password' => $_POST['password'],
                'contact_name' => $_POST['contact_name'],
                'contact_phone' => $_POST['contact_phone'],
                'contact_email' => $_POST['contact_email'],
                'info' => $_POST['info']
            ]);

            // Redirect to the desired location
            header('location: /companies');
            exit();
        } else {
            // Failed to move the uploaded file
            $errors['logo'] = "Error: Failed to move the uploaded file.";
        }
    }
}


?>
