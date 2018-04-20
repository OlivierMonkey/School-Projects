<?php
class Animal
{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    private $name;
    private $legs;
    private $type;
    private static $count_Animal = 0;
    private static $count_Mammal = 0;
    private static $count_Fish = 0;
    private static $count_Bird = 0;
    

    public function __construct($A_name, $A_legs, $A_type)
    {
        self::$count_Animal++;
        if ($A_type == 0)
            self::$count_Mammal++;
        else if ($A_type == 1)
            self::$count_Fish++;
        else if ($A_type == 2)
            self::$count_Bird++;
        else
            return;
        $this->name = $A_name;
        $this->legs = $A_legs;
        $this->type = $A_type;
        
        echo "My name is " . $this->name . " and I am a " . $this->getType() . " !\n";
    }
        public static destruct()
    {
        self::$count_Animal--;
        if ($this->getType == "mammal")
            self::$count_Mammal--;
        else if ($this->getType == "fish")
            self::$count_Fish--;
        else if ($getType == "bird")
            self::$count_Bird--;
        else
            return;
    }
    public static function getNumberOfAnimalsAlive()
    {
        if (self::$count_Animal == 0 || self::$count_Animal == 1)
            echo "There is currently " . self::$count_Animal . " animal alive in our world.\n";
        else
            echo "There is currently " . self::$count_Animal . " animals alive in our world.\n";
        return self::$count_Animal;
    }
    public static function getNumberOfMammals()
    {
        if (self::$count_Mammal == 0 || self::$count_Mammal == 1)
            echo "There is currently " . self::$count_Mammal . " mammal alive in our world.\n";
        else
            echo "There is currently " . self::$count_Mammal . " mammals alive in our world.\n";
        return self::$count_Mammal;
    }
    public static function getNumberOfFishes()
    {
        if (self::$count_Fish == 0 || self::$count_Fish == 1)
            echo "There is currently " . self::$count_Fish . " fish alive in our world.\n";
        else
            echo "There is currently " . self::$count_Fish . " fishes alive in our world.\n";
        return self::$count_Fish;
    }
    public static function getNumberOfBirds()
    {
        if (self::$count_Bird == 0 || self::$count_Bird == 1)
            echo "There is currently " . self::$count_Bird . " bird alive in our world.\n";
        else
            echo "There is currently " . self::$count_Bird . " birdss alive in our world.\n";
        return self::$count_Fish;
    }
    public function getName()
    {        return $this->name;    }
    public function getLegs()
    {        return $this->legs;    }
    public function getType()        
    {
        if ($this->type == 0)
            {                return "mammal";          }
        else if ($this->type == 1)
            {                return "fish";            }
        else if ($this->type == 2)
            {                return "bird";            }
        else
            return;
    }    
}
?>