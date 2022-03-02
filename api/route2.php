<?php
header('Content-Type: application/json');
$array = array("Always", "Be", "Coding");
$json = json_encode($array);
echo $json;