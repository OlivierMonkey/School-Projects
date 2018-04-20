<?php
class Animal
{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    private $name;
    private $legs;
    private $type;

    public function __construct($A_name, $A_legs, $A_type)
    {
        $this->name = $A_name;
        $this->legs = $A_legs;
        $this->type = $A_type;
        
        echo "My name is " . $this->name . " and I am a " . $this->getType() . " !\n";
    }
    public function getName()
    {        return $this->name;    }
    public function getLegs()
    {        return $this->legs;    }
    public function getType()        
    {
        if ($this->type == 0)
            return "mammal";
        elseif ($this->type == 1)
            return "fish";
        elseif ($this->type == 2)
            return "bird";
        else
            return;
    }
    public function setName()
    {
        $this->name = $A_name;
    }
    
    
}
?>