<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/bootstrap_head.php" ?>

<h3 class="text-body-secondary mt-3 text-center fw-bold">Here is the Note you selected:</h3>
<div class="row">
    <div class="card mt-3 bg-body-secondary shadow">
        <div class="card-body p-4 fs-4 ">
            <?= htmlspecialchars($body) ?>
        </div>
    </div>
    <div class="d-flex justify-content-center gap-4">

        <a class="btn btn-primary mt-3 px-3" href="./edit?id=<?= htmlspecialchars($id) ?>">Edit</a>


    </div>
</div>


<?php require "partials/bootstrap_footer.php" ?>
<?php require "partials/footer.php" ?>