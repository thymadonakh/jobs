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
    <?php foreach($jobs as $job): ?>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-3">
            <div>
                <h2><?= $job['title']?></h2>
                <p><?= "$ " . $job['salary_range']?></p>
            </div>
            <div>
                <p>..</p>
                <img src="" alt="logo">
            </div>
            <div class="flex">
                <div>
                    <p>Logo</p>
                </div>
                <div>
                     <p>Company</p>
                    <p>last active</p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach ;?>
</main>

<?php require('partials/footer.php') ?>
