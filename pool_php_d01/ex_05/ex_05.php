<?php
function my_swap(&$a, &$b){
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

/*$var1=1;
$var2=3;
my_swap($var1, $var2);
echo $var1 . " " . $var2;*/
?>