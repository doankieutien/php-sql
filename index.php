<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
     include_once(__DIR__ .'/../layouts/styles.php');
    
    ?>
    <?php
     include_once(__DIR__ .'/../layouts/partials/header.php');
    
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-2">
        <?php
    include_once(__DIR__ .'/../layouts/partials/sidebar.php');
    ?>
        </div>
        <div class="col-md-8">
        <button name="create" value="Tao moi"></button>
        <h1>Bang hinh thuc thanh toan</h1>
        <?php
        include_once(__DIR__ . '/../../example/bang_xoa.php');
        ?>
        </div>
    </div>
    
    </div>
    
    <?php
    include_once(__DIR__ .'/../layouts/partials/sidebar.php');
    ?>
    <?php
    include_once(__DIR__ .'/../layouts/partials/footer.php');
    ?>
    <?php
    include_once(__DIR__ .'/../layouts/scripts.php');
    ?>

</body>
</html>