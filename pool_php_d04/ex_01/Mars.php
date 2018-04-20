<?php
class Mars
{
    private $id;
    private static $count = -1;
    
    public function __construct()
    {
        self::$count++;
        $this->id = self::$count;
    }
    
    public function getId()
    {
        return $this->id;
    }
}
?>