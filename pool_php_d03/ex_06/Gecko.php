<?php
class Gecko
{
    private $name;
    private $age;
    private $energy = 100;
    
    public function __construct($name = "")
    {
        $this->name = $name;
        if ($name == "")
            echo "Hello !\n";
        else
            echo "Hello " . $this->name . " !\n";        
    }
    public function __destruct()
    {
        if ($this->name == "")
            echo "Bye !\n";
        else
            echo "Bye ", $this->name , " !\n";
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($arg)
    {
        if (is_int($arg) && $arg >= 0)
            $this->age = $arg;
    }
    public function status()
    {
        switch($this->age){
        case ($this->age < 0):
            echo "Impossible Gecko\n";
            break;
        case ($this->age == 0):
            echo "Unborn Gecko\n";
            break;
        case ($this->age <= 2):
            echo "Baby Gecko\n";
            break;
        case ($this->age <= 10):
            echo "Adult Gecko\n";
            break;
        case ($this->age <= 13):
            echo "Old Gecko\n";
            break;
        default:
            echo "Impossible Gecko\n";
            break;
        }
    }
    public function hello($str = "")
    {
        if (is_int($str))
            {
                if ($this->name == "")
                    {
                        for ($i=0; $i<$str; $i++)
                            echo "Hello !\n";
                    }
                else
                    {
                        for ($i=0; $i<$str; $i++)
                            echo "Hello, I'm " . $this->name . "!\n";
                    }
            }
        else if ((is_string($str)) && ($str == ""))
            if ($this->name == "")
                echo "Hello !\n";
            else
                echo "Hello, I'm " . $this->name . "!\n";
        
        else
            {
                if ($this->name == "")
                    echo "Hello " . $str . "!\n";
                else
                    echo "Hello " . $str . ", I'm " . $this->name . "!\n";
            }              
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function setEnergy($arg)
    {
        if ((is_int($arg)) && ($arg >= 0) && ($arg <= 100))
            $this->energy = $arg;
    }
    public function eat($food = "")
    {
        if ((strcasecmp($food, "Meat") == 0)  && ($this->energy <= 90))
            {
                echo "Yummy !\n";
                $this->energy += 10;
            }
        else if ((strcasecmp($food, "Vegetable") == 0) && ($this->energy >= 10))
            {
                echo "Erk !\n";
                $this->energy -= 10;
            }
        else
            echo "I can't eat this.\n";
    }
}

/*$dylan = new Gecko("Dylan");
$dylan->eat("VEGetable");
$dylan->eat("Vegetable");
$dylan->eat("meat");
$dylan->eat("Meat");
//echo $dylan->getEnergy();*/
?>