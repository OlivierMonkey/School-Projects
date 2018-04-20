<?php

function my_create_map(...$array){
    $newarray = NULL;
        foreach($array as $key1 => $value1)
            {
                 if (count($value1) >= 2)
                    $newarray[$value1[0]] = $value1[1];
                 else
                     {
                     echo "The given arguments aren't valid.\n";
                     return NULL;
                         }
            }
    return $newarray;
}
?>