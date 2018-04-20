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
}

/*$dylan = new Gecko("Dylan");
$dylan->hello("Teddy");
$dylan->hello(2);
$dylan->hello();

$ano = new Gecko();
$ano->hello("Teddy");
$ano->hello(2);
$ano->hello();*/

?>