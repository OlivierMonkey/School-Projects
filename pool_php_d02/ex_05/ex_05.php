<?php
function my_add_elem_map($key, $value, $map)
{
    if (array_key_exists($key, $map))
        {
            echo "You have to give good parameters\n";
            return false;
        }
    else
        {
            $map[$key] = $value;
            //print_r($map);
            return ($map);
        }
}

function my_modify_elem_map($key, $value, $map)
{
    if (array_key_exists($key, $map) && $map[$key] != $value)
        {
            $map[$key] = $value;
            //print_r($map);
            return ($map);
        }
    else
        {
            echo "You have to give good parameters\n";
            return false;
        }
}

function my_delete_elem_map($key, $map){
    if (array_key_exists($key, $map))
        {
            echo "You have to give good parameters\n";
            return false;
        }
    else
        {
            unset($map[$key]);
            //print_r($map);
            return ($map);
        }
}

function my_is_elem_valid($key, $value, $map){
    if (array_key_exists($key, $map) && $map[$key] == $value)
        {
            return true;
        }
    else
        {
            echo "You have to give good parameters\n";
            return false;
        }
    
}

?>