<?php if( isset($_REQUEST["show-source"]) ) {
    header('Content-Type: text/plain');
    die( file_get_contents( $_SERVER['SCRIPT_FILENAME'] ) );
} ?>

<?php $var1 = '50px';
// optionally: php page.css.php > page.css
?>
/* this is .css.php (css from PHP) */
.box {
width: <?= $var1 ?>;
height: <?= $var1 ?>;
background-color: orangered;
}
