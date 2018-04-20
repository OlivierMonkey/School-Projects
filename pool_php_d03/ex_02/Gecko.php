<?php
class Gecko
{
    public $name;
    
    public function __construct($name = "")
    {
        $this->name = $name;
        if ($name == "")
            echo "Hello !\n";
        else
            {
                echo "Hello " . $this->name . " !\n";
            }     
    }
}