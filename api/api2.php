<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$calc = ($a**3)+($b*$c)-($a/$b);

if (b==0){
    $calc="b is equal to 0"
}
$result=[
    "calc" => $calc,
]
echo json_encode($result)

?>