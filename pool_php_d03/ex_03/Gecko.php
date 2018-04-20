<?php
class Gecko
{
    private $name;
    
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
}

/*$thomas = new Gecko("Thomas");
$anonymous = new Gecko();
$serguei = new Gecko("Serguei");

unset($serguei);
//echo $thomas->name();
echo $thomas->getName() . "\n";
echo $anonymous->getName() . "\n";*/
?>