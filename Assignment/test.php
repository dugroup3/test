<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
print_r($arr);
$json=json_encode($arr);
var_dump(json_decode($json, true));
?>