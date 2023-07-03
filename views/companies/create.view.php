<?php require('../views/partials/head.php') ?>
<?php require('../views/partials/nav.php') ?>
<?php require('../views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST" action="/companies" enctype="multipart/form-data">
            
            <div>
                <label for="company_name">Company Name</label>
                <input type="text" id="company_name" name="company_name" placeholder="company_name" value="<?php echo $_POST['company_name'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['company_name'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="logo">logo</label>
                <input type="file" id="logo" name="logo" accept="image/*">
                    <div>
                        <p class="text-red-800">
                            <?php echo $errors['logo'] ?? ""?>
                        </p>
                    </div>
            </div>
            <div>
                <label for="industry">industry</label>
                <input type="text" id="industry" name="industry" placeholder="industry" value="<?php echo $_POST['industry'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['industry'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="website">Website</label>
                <input type="text" id="website" name="website" placeholder="website" value="<?php echo $_POST['website'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['website'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="company_email">company_email</label>
                <input type="text" id="company_email" name="company_email" placeholder="company_email" value="<?php echo $_POST['company_email'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['company_email'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="password">password</label>
                <input type="text" id="password" name="password" placeholder="password" value="<?php echo $_POST['password'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['password'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="contact_name">contact_name</label>
                <input type="text" id="contact_name" name="contact_name" placeholder="contact_name" value="<?php echo $_POST['contact_name'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['contact_name'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="contact_phone">contact_phone</label>
                <input type="text" id="contact_phone" name="contact_phone" placeholder="contact_phone" value="<?php echo $_POST['contact_phone'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['contact_phone'] ?? ""?>
                    </p>
                </div>
            </div>
            <div>
                <label for="contact_email">contact_email</label>
                <input type="text" id="contact_email" name="contact_email" placeholder="contact_email" value="<?php echo $_POST['contact_email'] ?? ""?>">
                <div>
                    <p class="text-red-800">
                        <?php echo $errors['contact_email'] ?? ""?>
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
