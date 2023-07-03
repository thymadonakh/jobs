<?php require('../views/partials/head.php') ?>
<?php require('../views/partials/nav.php') ?>
<?php require('../views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($companies as $company) { ?>
        <div class="company-card">
            <h2><?php echo $company['company_name']; ?></h2>
            <?php if (!empty($company['logo'])) { ?>
                <img src="<?= '../public/uploads/' . $company['logo'] ?>" alt="Company Logo" class="company-logo">
            <?php } ?>
            <p><strong>Industry:</strong> <?php echo $company['industry']; ?></p>
            <p><strong>Website:</strong> <a href="<?php echo $company['website']; ?>"><?php echo $company['website']; ?></a></p>
            <p><strong>Company Email:</strong> <?php echo $company['company_email']; ?></p>
            <p><strong>Contact Name:</strong> <?php echo $company['contact_name']; ?></p>
            <p><strong>Contact Phone:</strong> <?php echo $company['contact_phone']; ?></p>
            <p><strong>Contact Email:</strong> <?php echo $company['contact_email']; ?></p>
            <p><strong>Info:</strong> <?php echo $company['info']; ?></p>
        </div>
    <?php } ?>
    </div>
</main>

<?php require('../views/partials/footer.php') ?>
