<?php
function my_very_secure_hash($str)
{
    echo $str;
    echo md5($str);
    return md5($str);
}

//my_very_secure_hash("olivier");

?>