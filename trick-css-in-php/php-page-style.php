<?php

if( isset($_REQUEST["show-source"]) ) {
    header('Content-Type: text/plain');
    die( file_get_contents( $_SERVER['SCRIPT_FILENAME'] ) );
}

?>

<?php

$var1 = '50px';

?>

<!-- this is HTML with PHP -->
<style>

.box-style {
width: <?= $var1 ?>;
height: <?= $var1 ?>;
background-color: greenyellow;
}

</style>