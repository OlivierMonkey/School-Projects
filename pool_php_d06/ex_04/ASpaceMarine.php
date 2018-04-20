<?php
abstract class ASpaceMarine implements IUnit
{
    protected $name;
    protected $hp;
    protected $ap;
    protected $damage = 0;
    protected $apcost = 0;
    protected $myTarget;

    public function __construct($M_name, $M_hp, $M_ap)
    {
        $this->name = $M_name;
        $this->hp = 0;
        $this->ap = 0;
        $this->damage = 0;
        $this->apcost = 0;
        $this->myTarget = null;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getHp()
    {
        return $this->hp;
    }
    public function getAp()
    {
        return $this->ap;
    }
    public function getDamage()
    {
        return $this->damage;
    }
    public function equip($M_weapon)
    {
        if ($this->hp <= 0)
            return false;
    }
    public function attack($M_attack)
    {
        if ($this->hp <= 0)
            return false;
    }
    public function moveCloseTo($M_target)
    {
        if ($this->hp <= 0)
            return false;
    public function receiveDamage($M_damage)
    {
        if ($this->hp <= 0)
            return false;
    }
    public function recoverAP($M_reco)
    {
        if ($this->hp <= 0)
            return false;
    }
}
?>