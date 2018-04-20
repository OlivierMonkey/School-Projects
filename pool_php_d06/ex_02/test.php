<?php

function error($param)
{
    if ($param == 0)
        throw new Exception("MyError\n");
    return 0;
}



try
{
    error(1);
    echo "Je suis ici\n";
    error(0);
    echo "Je suis encore la\n";
}
catch (Exception $e)
    {
        echo $e->getMessage();
    }

?>