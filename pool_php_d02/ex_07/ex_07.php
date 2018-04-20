<?php
function my_division_modulo($fistNumber, $operChar, $secondNumber)
{
    if (($operChar != "/") || (!is_numeric($fistNumber)) || (!is_numeric($secondNumber)))
        {
            throw new Excpetion("The given arguments aren't good.\n");
        }
    else
        {
            $result = floor($fistNumber / $secondNumber);
            return $result;
        }
}
?>