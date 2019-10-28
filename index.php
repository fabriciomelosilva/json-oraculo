<?php

$json = file_get_contents("db.json");


$teste = json_decode($json);
$teste2 = json_encode($teste);

echo $teste2;
