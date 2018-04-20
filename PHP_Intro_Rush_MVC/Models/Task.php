<?php
  include_once("Db.php");

/*  class task
  {
    private $_id;
    private $_title;
    private $_desc;

    function __construct($id, $title, $desc = null)
    {
      $this->_id = $id;
      $this->_title = $title;
      $this->_desc = $desc;
    }
  } */

  class CRUD
  {
    private $_pdo = NULL;

    function __construct($pdo)
    {
      $this->_pdo = $pdo;
    }

    function get_tasks()
    {
      $pdo = $this->_pdo;
      $query = "SELECT * FROM tasks";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->execute();
      $fetch = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

      $tasks = array();
/*      $n = 0;
      foreach ($fetch as $value)
      {
        $tasks[$n] = new task($value['id'], $value['title'], $value['description']);
        $n++;
      }
      var_dump($tasks);
      return ($tasks); */
//      var_dump($fetch);
      return ($fetch);
    }

    function get_task($id)
    {
      $pdo = $this->_pdo;
      $query = "SELECT * FROM tasks WHERE id = :id";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->bindParam(":id", $id);
      $pdoStatement->execute();
      $fetch = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//      $task = new task($fetch['id'], $fetch['title'], $fetch['description']);
//      var_dump($fetch);
      return ($fetch);
    }

    function post_task($title, $description = null)
    {
      $pdo = $this->_pdo;
      $query = "INSERT INTO tasks (title, description) VALUES (:title, :description)";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->bindParam(":title", $title);
      $pdoStatement->bindParam(":description", $description);
      $pdoStatement->execute();
    }

    function put_task($id, $title = null, $description = null)
    {
      $pdo = $this->_pdo;
      if ($title && $description)
      {
        $query = "UPDATE tasks SET title = :title, description = :description WHERE id = :id";
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->bindParam(":id", $id);
        $pdoStatement->bindParam(":title", $title);
        $pdoStatement->bindParam(":description", $description);
        $pdoStatement->execute();
      }
      else if (!$title && $description)
      {
        $query = "UPDATE tasks SET description = :description WHERE id = :id";
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->bindParam(":id", $id);
        $pdoStatement->bindParam(":description", $description);
        $pdoStatement->execute();
      }
      else if ($title && !$description)
      {
        $query = "UPDATE tasks SET title = :title WHERE id = :id";
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->bindParam(":id", $id);
        $pdoStatement->bindParam(":title", $title);
        $pdoStatement->execute();
      }
      else
        return (false);
    }

    function delete_task($id)
    {
      $pdo = $this->_pdo;
      $query = "DELETE FROM tasks WHERE id = :id";
      $pdoStatement = $pdo->prepare($query);
      $pdoStatement->bindParam(":id", $id);
      $pdoStatement->execute();
    }
  }


  //$crud =  new CRUD(Singleton::getInstance()->getPDO());
  //$test->post_task('');
  //$test->put_task(1, "bidule", "truc");
  //$test->delete_task(3);
  //$test->get_tasks();
  //$test->get_task(2);
 ?>
