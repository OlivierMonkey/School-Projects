<?php
  class     Singleton
  {
    private $_dns = "mysql:host=localhost;dbname=todo_php;port=3306";
    private $_user = "root";
    private $_admin_pwd = "7SE(>yLu";
    private static  $_instance = NULL;
    private $_pdo = NULL;

    private function  __construct()
    {
      $this->connect_db($this->_dns, $this->_user, $this->_admin_pwd);
    }

    function connect_db($dns, $user, $password)
    {
      try
      {
        $this->_pdo = new PDO($dns, $user, $password);
        return $this->_pdo;
      }
      catch (PDOException $e)
      {
        echo $e->getMessage() . "\n";
        exit();
      }
    }

      function getPDO()
      {
        return($this->_pdo);
      }

      static function getInstance()
      {
        if (self::$_instance == NULL)
          self::$_instance = new Singleton();
        return (self::$_instance);
      }
  }

  Singleton::getInstance()->getPDO();
 ?>
