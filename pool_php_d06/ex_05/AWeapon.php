<?php
abstract class AWeapon
{
    protected $name;
    protected $apcost;
    protected $damage;
    protected $melee;

    public function __construct($W_name, $W_apcost, $W_damage)
    {        
        if ((gettype($W_name) != "string") || (gettype($W_apcost) != "integer") || (gettype($W_damage) != "integer"))
            {
                throw new Exception("Error in AWeapon constructor. Bad Parameters.");
            }
        $this->name = $W_name;
        $this->apcost = $W_apcost;
        $this->damage = $W_damage;
        $this->melee = false;
    } 

    abstract public function attack();

    public function getName()
    {
        return $this->name;
    }
    public function getApcost()
    {
        return $this->apcost;
    }
    public function getDamage()
    {
        return $this->damage;
    }
    public function isMelee()
    {
        return $this->melee;
    }
}
?>