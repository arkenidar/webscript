<?php
if(is_numeric($_REQUEST["n1"]) && is_numeric($_REQUEST["n2"]) )
$result = intval($_REQUEST["n1"]) + intval($_REQUEST["n2"]);
else
$result = "not numeric inputs";
?><!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<title>forms: 2 numbers summed up</title>
<div>forms: 2 numbers summed up</div>

result: <?= $result ?> <br>

<form>
<input name="n1" placeholder="first number" type="number" value="<?= $_REQUEST["n1"] ?>" >
<input name="n2" placeholder="second number" type="number" value="<?= $_REQUEST["n2"] ?>" >
<input type="submit" >
</form>
