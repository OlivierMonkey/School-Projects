<?php
include_once("Animal.php");

class Cat extends Animal
{
    private $color;

    public function __construct($C_name, $C_color = "grey")
    {
        parent::__construct($C_name, 4, self::MAMMAL);
        $this->color = $C_color;
        echo $this->name . ": MEEEOOWWWW\n";
    }
    public function meow()
    {
        echo $this->name . " the " . $this->getColor() . " kitty is meowing.\n";
    }
    
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($C_color)
    {
        $this->color = $C_color;
    }
}
?>