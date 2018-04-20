<?php
function print_array($my_array)
{
    foreach   ($my_array as $value)
        {
            echo "$value\n";
        }
}
print_array(array("blue","red","green"));
?>