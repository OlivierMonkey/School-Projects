<?php
interface IUnit
{
    public function equip($arg1);

    public function attack($arg2);

    public function receiveDamage($arg3);

    public function moveCloseTo($arg4);

    public function recoverAP();
}
?>