<?php
namespace chocolate
{
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
}

namespace planet
{
    class Mars
    {
        private $size;

        public function __construct($arg = 0)
        {
            //if (is_int($arg) && $arg >= 0)
                $this->size = $arg;
        }

        public function getSize()
        {
            return $this->size;
        }

        public function setSize($arg = 0)
        {
            //if (is_int($arg) && $arg >= 0)
                $this->size = $arg;
        }
    }
}
?>