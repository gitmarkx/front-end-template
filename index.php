<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo SITE_NAME; ?></title>
    <!-- Header meta -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header_meta.php') ?>

    <!-- CSS LINK -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header_links.php') ?>   

    <!-- Google Analytics -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/g-a.php') ?>

</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/layout/content-tag.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/layout/header.php') ?>

    <main>
        <section><p class="header01">12</p></section>
    </main>
    
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/layout/footer.php') ?>

    <!-- SCRIPTS LINK -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/include/footer_links.php') ?>   
</body>
</html>