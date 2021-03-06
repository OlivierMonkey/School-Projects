<?php
class Gecko
{
    private $name;
    private $age;
    
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
        else
            echo "wrong argument, give a positive number.";
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
}
/*$thomas = new Gecko("Thomas");
$thomas->setAge(5);
$thomas->status();*/
?>