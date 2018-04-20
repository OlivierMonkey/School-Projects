<?php

class AssaultTerminator extends AspaceMarine
{    
    public function __construct($T_name)
    {
        parent::__construct($T_name, 150, 30);
        $this->name = $T_name;
        $this->equip(new PowerFist);
        echo $this->name . " has teleported from space.\n";
    }
    public function __destruct()
    {
        echo "BOUUUMMMM ! " . $this->name . " has exploded.\n";
    }
        public function receiveDamage($M_damage)
    {
        if ($this->hp <= 0)
            return false;
        if ($M_damage >= 4)
            $this->hp -= $M_damage + 3;
        if ($M_damage >= 3)
            $this->hp -= $M_damage + 2;
        if ($M_damage >= 2)
            $this->hp -= $M_damage + 1;
        if ($M_damage >= 1)
            $this->hp -= $M_damage;
        
                
        return $this->hp;
    }

}
?>