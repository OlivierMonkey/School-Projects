<?php
function get_angry_dog($nbr)
{
    $string = NULL;
    for ($i=0; $i<$nbr; $i++)
        {
            $string = $string . "woof";
        }
    $string = $string ."\n";
    echo $string;
    return $string;
}

get_angry_dog(3);
?>