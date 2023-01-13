<?php
if(isset($_REQUEST["n1"]) && isset($_REQUEST["n2"]) && is_numeric($_REQUEST["n1"]) && is_numeric($_REQUEST["n2"]) ){
	
	// if inputs are all valid then ...
	$n1 = intval($_REQUEST["n1"]);
	$n2 = intval($_REQUEST["n2"]);
	$result = $n1 + $n2 ;

}else{
	$n1 = "";
	$n2 = "";
	$result = "not numeric inputs";	
}

?><!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<title>forms: 2 numbers summed up</title>
<h1>forms: 2 numbers summed up</h1>

result: <?= $result ?> <br>

<form>
<input name="n1" placeholder="first number" type="number" value="<?= $n1 ?>" >
<input name="n2" placeholder="second number" type="number" value="<?= $n2 ?>" >
<input type="submit" >
</form>
