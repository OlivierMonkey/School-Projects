<?php
$func = function($str){
    $i = 0;
    $length = strlen($str);
    
    while($i < $length)
        {
            $var = chr(ord($str[$i]) - 32);
            $str[$i] = $var;
            $i++;
        }
    echo $str;
}
?>