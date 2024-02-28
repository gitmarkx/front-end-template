<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />

    <title><? echo SITE_NAME ?></title>
    <meta name="description" content="<? echo DESCRIPTION ?>" />
	<meta name="keywords" content="<?php echo KEY_WORD ?>">

    <!-- OGP META TAGS -->
    <meta property="og:title" content="<? echo OGP_TITLE; ?>">
    <meta property="og:description" content="<? echo OGP_DESCRIPTION; ?>">
    <meta property="og:url" content="<? echo OGP_URL; ?>">
    <meta property="og:type" content="<? echo OGP_TYPE; ?>">
    <meta property="og:image" content="/path/to/ogp/image">

    <!-- CSS LINK -->
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <header></header>
    <main>
        <section><p class="header01">12</p></section>
    </main>
    <footer></footer>
</body>
</html>