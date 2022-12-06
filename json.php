<?php

$structure = [
"id" => 0,
"pos" => [10,0,10],
"active" => true,
];

$json=json_encode($structure);
print("$json\n");

$decoded=json_decode($json);
print_r($decoded);
