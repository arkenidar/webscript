<?php if( isset($_REQUEST["show-source"]) ) {
    header('Content-Type: text/plain');
    die( file_get_contents( $_SERVER['SCRIPT_FILENAME'] ) );
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSS variables: ways, in CSS3 and PHP (optional ".htaccess" use). </title>
</head>
<body>

<div>CSS variables: ways, in CSS3 and PHP (optional ".htaccess" use). </div>

<hr>

<link rel="stylesheet" href="page.css.php">
<div><a href="page.css.php?show-source">page.css.php</a> </div>
<div class="box"></div>

<hr>

<link rel="stylesheet" href="php-page.css">
<div><a href="php-page.css?show-source">php-page.css</a> </div>
<div class="box-css"></div>

<hr>

<?php require("php-page-style.php"); ?>
<div><a href="php-page-style.php?show-source">php-page-style.php</a> </div>
<div class="box-style"></div>

<hr>

<link rel="stylesheet" href="css-variables.css">
<div><a href="css-variables.css?show-source">css-variables.css</a> </div>
<div class="box-var"></div>

<hr>

<script src="/web/show-source.js" data-href=""></script>
<script src="/web/show-source.js" data-href="?show-source"></script>
<div><a href=".">go to main page</a></div>

<link rel="stylesheet" href="/sitewide.css">

</body>
</html>
