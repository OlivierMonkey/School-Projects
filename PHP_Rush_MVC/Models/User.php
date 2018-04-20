<?php
require(__DIR__ . '/../Config/db.php');

  class userModel
  {
    function __construct()
    {
      $this->_crud = new CRUD(Singleton::getInstance()->getPDO());
    }

    function getUsers()
    {
      $users = $this->_crud->get_tasks("users");
      return ($users);
    }

    function getUserbyEmail($email, $table)
    {
      $pdo = $this->_crud->_pdo;
      $query = "SELECT * FROM $table WHERE email = :email";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->bindParam(":email", $email);
      $pdoStatement->execute();
      $fetch = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
      return ($fetch);
    }

    function getUser($id)
    {
      $user = $this->_crud->get_task($id, "users");
      return ($user);
    }
    function putUser($id, $array)
    {
      $array['modif_at'] = date('Y-m-d H:i:s');
      $this->_crud->put_task($id, "users", $array);
    }
    function postUser($array)
    {
      $array['created_at'] = date('Y-m-d H:i:s');
      $array['modif_at'] = date('Y-m-d H:i:s');
      $this->_crud->post_task("users", $array);
    }
    function deleteUser($id)
    {
      $this->_crud->delete_task($id, "users");
    }
  }

  class user extends userModel
  {
    public $_username;
    public $_password;
    public $_email;
    public $_group;
    public $_status;
    public $_created_at;
    public $_modif_at;

    function __construct($id)
    {
      $this->_crud = new CRUD(Singleton::getInstance()->getPDO());
      $user = $this->_crud->get_task($id, "users");
      if (!isset($user[0]['username']))
        return (false);
      $this->_username = $user[0]['username'];
      $this->_password = $user[0]['password'];
      $this->_email = $user[0]['email'];
      $this->_group = $user[0]['group'];
      $this->_status = $user[0]['status'];
      $this->_created_at = $user[0]['created_at'];
      $this->_modif_at = $user[0]['modif_at'];
    }
  }

  class writer extends user
  {
    function __construct($id)
    {
      $this->_crud = new CRUD(Singleton::getInstance()->getPDO());
      $user = $this->_crud->get_task($id, "users");
      $this->_username = $user[0]['username'];
      $this->_username = $user[0]['password'];
      $this->_username = $user[0]['email'];
      $this->_username = $user[0]['group'];
      $this->_username = $user[0]['status'];
      $this->_username = $user[0]['created_at'];
      $this->_username = $user[0]['modif_at'];
    }
  }

  class admin extends writer
  {
    function __construct($id)
    {
      $this->_crud = new CRUD(Singleton::getInstance()->getPDO());
      $user = $this->_crud->get_task($id, "users");
      $this->_username = $user[0]['username'];
      $this->_username = $user[0]['password'];
      $this->_username = $user[0]['email'];
      $this->_username = $user[0]['group'];
      $this->_username = $user[0]['status'];
      $this->_username = $user[0]['created_at'];
      $this->_username = $user[0]['modif_at'];
    }
  }


 ?>
