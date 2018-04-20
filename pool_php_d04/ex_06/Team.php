<?php

include_once("Phobos.php");
include_once("Mars.php");
include_once("Astronaut.php");

class Team
{
    private $team_name = [];
    private $name;
    private static $count = 0;
    
    public function __construct($T_name)
    {
        $this->name = $T_name;
    }
    public function getAstronauts()
    {
        return $this->team_name;
    }
    public function getName()
    {
        return $this->name;
    }
    
    public function add($astro)
    {
        if (gettype($astro) == "object" && get_class($astro) == "Astronaut")
            {
                array_push($this->team_name, $astro);
                self::$count++;
            }
        else
            echo $this->name . ": Sorry, you are not part of the team.\n";
    }
    public function remove($astro)
    {
        if (($key = array_search($astro, $this->team_name))!== false)
            {
                unset($this->team_name[$key]);
                self::$count--;
            }
    }
    public function countMembers()
    {
        return self::$count;
    }
    public function showMembers()
    {
        echo $this->name . ": ";
        foreach($this->team_name as $key => $value){
            echo  $value->getName() . " " . $value->getDestination();
            if ($key < self::$count-1)
                echo ", ";
            else
                echo".\n";
        }
    }
        
}


?>