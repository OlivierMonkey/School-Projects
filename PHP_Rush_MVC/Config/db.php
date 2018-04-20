<?php
  class     Singleton
  {
    private $_dns = "mysql:host=localhost;dbname=NRVblog;port=3306";
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

  class CRUD
  {
    public $_pdo = NULL;

    function __construct($pdo)
    {
      $this->_pdo = $pdo;
    }

    function get_tasks($table)
    {
      $pdo = $this->_pdo;
      $query = "SELECT * FROM $table";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->execute();
      $fetch = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//      var_dump($fetch);
      return ($fetch);
    }

    function get_task($id, $table)
    {
      $pdo = $this->_pdo;
      $query = "SELECT * FROM $table WHERE id = :id";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->bindParam(":id", $id);
      $pdoStatement->execute();
      $fetch = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
      return ($fetch);
    }

    function post_task($table, $array)
    {
      $columns = "";
      $values = "";
      $n = false;
      foreach ($array as $key => $value) {
        if ($n == false)
        {
            $columns = "`$key`";
            $values = "'$value'";
        }
        else
        {
            $columns = $columns . ", " . "`$key`";
            $values = $values . ", " . "'$value'";
        }
        $n = true;
      }
//      var_dump($array);
      $pdo = $this->_pdo;
      $query = "INSERT INTO $table ($columns) VALUES ($values)";
      echo $query;
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->execute();
    }

    function put_task($id, $table, $array)
    {
      $settings = "";
      $n = 0;
      foreach ($array as $key => $value) {
        if ($n == 0)
            $settings = "`$key` = '$value'";
        else
            $settings = $settings . ", " . "`$key` = '$value'";
        $n++;
      }
//      var_dump($array);
      $pdo = $this->_pdo;
      $query = "UPDATE $table SET $settings WHERE id = :id";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->bindParam(':id', $id);
      $pdoStatement->execute();
    }

    function delete_task($id, $table)
    {
      $pdo = $this->_pdo;
      $query = "DELETE FROM $table WHERE id = :id";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->bindParam(":id", $id);
      $pdoStatement->execute();
    }
  }
