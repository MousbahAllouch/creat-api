<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$result = ($a*$a*$a)+($b*$c)+($a/$b);
echo $result;

?>