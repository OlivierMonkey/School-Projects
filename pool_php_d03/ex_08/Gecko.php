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
        else if ((is_int($arg)) && ($arg >= 100))
            $this->energy = 100;
        else if ((is_int($arg)) && ($arg <= 0))
            $this_energy = 0;
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
    public function work()
    {
        if ($this->energy>=25)
            {
                echo "I'm working T.T\n";
                    $this->energy -= 9;
            }
        else if ($this->energy<=50)
            {
                echo "Heyyy... I'm too sleepy, better take a nap!\n";
                    $this->energy += 50;
            }
    }
    public function fraternize($param)
    {

        if (($this->energy >= 30) && ($param->energy >= 30)){
            $this->dice();
            echo "I'm going to drink with " . $this->name . " !\n";
            echo "I'm going to drink with " . $param->name . " !\n";
        }
        else if (($this->energy >= 30) && ($param->energy <= 30)){
            $this->dice();
            echo "Sorry " . $this->name . " I'm too tired for going out tonight...\n";
            echo "Oh! That's too bad, another time then!.\n";
        }
        else if (($this->energy <= 30) && ($param->energy >= 30)){
            $this->dice();
            echo "Sorry " . $param->name . " I'm too tired for going out tonight...\n";
            echo "Oh! That's too bad, another time then!.\n";
        }
        else if (($this->energy <= 30) && ($param->energy <= 30)){
            $this->dice();
            echo "Not today!\n";
            echo "Not today!\n";
        }
        else if (((is_a($param, "Gecko")) == FALSE) && ((is_a($param, "Snake")) == FALSE)){
            echo "No way.\n";
        }
        else if (((is_a($param, "Gecko")) == FALSE) && ((is_a($param, "Snake")) == FALSE)){
            if ($this->energy >= 10)
                {
                    echo "LET'S RUN AWAY !!!\n";
                    $this->setEnergy = 0;
                }
            else
                echo "...\n";
        }
    }

    public function dice()
    {
        rand(1, 6);
        if (rand(1, 6) == 1)
            {
                echo "I'm too drunk for that... hic!\n";
                return;
            }
    }
}

$tom = new Gecko("Tom");
$jack = new Gecko("Jack");
$tom->setEnergy(25);
$tom->fraternize($jack);


?>