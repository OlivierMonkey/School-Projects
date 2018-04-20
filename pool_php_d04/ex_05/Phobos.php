<?php
namespace planet\moon
{
    include_once("Phobos.php");
    
    class Phobos
    {
        private $mars;
        
        public function __construct($param = "")
        {
            if (get_class($param) == "planet\Mars")
                {
                    $this->mars = $param;
                    echo "Phobos placed in orbit.\n";
                }
            else
                echo "No planet given.\n";
        }
        public function getMars()
        {
            return $this->mars;
        }
    }
    
}
?>