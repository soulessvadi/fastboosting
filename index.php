<?php 
	include('boot.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="/fastboosting/">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0"/>
    <meta name="format-detection" content="telephone=no">
    <title>Fastboosting</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="vadya sdelal" />
    <meta name="keywords" content="vadya sdelal" />
    <meta name="author" content="vadya sdelal" />
    <link rel="stylesheet" href="public/css/fontello.css">
    <link rel="stylesheet" href="public/css/foundation-flex.css">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/hamburger.css">
    <link rel="stylesheet" href="public/css/_.css?v=<?= microtime() ?>">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> -->
</head>
<body>
	<?php element('header') ?>
	<?php yields($view) ?>
	<?php element('footer') ?>
    <script src="public/js/_.js"></script>
</body>
</html>