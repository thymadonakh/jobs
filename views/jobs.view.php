<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="" method="POST">
            <label for="title">What</label>
            <input type="text" name="title" id="title" placeholder="position, title, company">
            <label for="location">Where</label>
            <input type="text" name="location" id="location" placeholder="Phnom Penh, Siemreap">
            <input type="submit" class="text-red-500">
        </form>
    </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php
        // Check if the $jobs variable is set and not empty before iterating over it
        if (isset($jobs) && !empty($jobs)) {
            foreach ($jobs as $job) {
                // Display job information
                echo $job['title'];
                // ...other job details
            }
        } else {
            // Handle the case when $jobs is not defined or empty
            echo "No jobs found.";
        }
    ?>


    </div>
</main>

<?php require('partials/footer.php') ?>
