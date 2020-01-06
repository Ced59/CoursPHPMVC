<!DOCTYPE html>
<html>
<?php require "head.html.php" ?>

<body>


    <div class="container mt-3 pb-5 overflow-auto">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $title; ?></h5>
                <p class="card-text"><?= $content; ?></p>
            </div>
        </div>
    </div>
    <?php require "footer.html.php" ?>
    <?php require "scripts.html.php" ?>
</body>

</html>