
<?php

$str = $_GET["str"];

if (strrev($str) == $str){ 
    echo "Palindrome";
}
else{
    echo "Not a Palindrome";
}


?>