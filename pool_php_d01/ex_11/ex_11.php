<?php
function my_print_args($tableau){
    foreach($tableau as $key => $value){
        if ($key != 0)
            echo "$value\n";
    }
}

my_print_args($argv);
?>