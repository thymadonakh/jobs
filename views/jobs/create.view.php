<?php require('../views/partials/head.php') ?>
<?php require('../views/partials/nav.php') ?>
<?php require('../views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST" action="/jobs">
            
            <div>
                <label for="title">Job Title</label>
                <input type="text" id="title" name="title" placeholder="title" value="<?php echo $_POST['title'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['title'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="description">description</label>
                <textarea name="description" id="description" cols="30" rows="10"><?php echo $_POST['description'] ?? ""?></textarea>
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['description'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="location">location</label>
                <input type="text" id="location" name="location" placeholder="location" value="<?php echo $_POST['location'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['location'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="job_type">Job Type</label>
                <input type="text" id="job_type" name="job_type" placeholder="Full Time / Part Time" value="<?php echo $_POST['job_type'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['job_type'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="salary_range">salary_range</label>
                <input type="text" id="salary_range" name="salary_range" placeholder="salary_range" value="<?php echo $_POST['salary_range'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['salary_range'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="deadline">deadline</label>
                <input type="text" id="deadline" name="deadline" placeholder="deadline" value="<?php echo $_POST['deadline'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['deadline'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="info">info</label>
                <input type="text" id="info" name="info" placeholder="info" value="<?php echo $_POST['info'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['info'] ?? ""?>
                    </p>
                </div>
            </div>
            
            <div>
                <input type="submit" value="Submit" class="bg-red-200 py-4 px-2 hover:bg-blue-200">
            </div>
        </form>

    </div>
</main>
<?php require('../views/partials/footer.php') ?>
