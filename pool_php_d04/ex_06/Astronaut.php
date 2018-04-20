<?php
include_once("Mars.php");

class Astronaut
{
    private $name;
    private $snacks = 0;
    private $destination = null;
    private $id;
    private static $count = -1;
    
    public function __construct($name = "")
    {
        self::$count++;
        $this->id = self::$count;
        
        $this->name = $name;
        if ($name == "")
            return;
        else
            echo $this->name . " ready for launch !\n";    
    }
    public function getDestination()
    {
        if ($this->destination != null)
            {                 
                return "on mission";
            }
        else
            {
                return "on standby";
            }
    }
    public function getName()
    {
        return $this->name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getSnacks()
    {
        return $this->snacks;
    }
    public function doActions($param = "")
    {
        if ($param == "")
            echo $this->name . ": Nothing to do.\n";
        else if (get_class($param) == "planet\Mars")
            {
                echo $this->name . ": started a mission !\n";
                $this->destination = $param;
            }
        else if (get_class($param) == "chocolate\Mars")
            {
                echo $this->name . " is eating mars number " . $this->id . "\n";
                $this->snacks += 1;
            }
    }
    public function __destruct()
    {
        if ($this->destination == null)
            echo $this->name . ": I may have done nothing, but I have " . $this->snacks . " Mars to eat at least !\n";
        else
            echo $this->name . ": Mission aborted !\n";
    }
}
?>