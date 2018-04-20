<?php
  include_once('./Models/Task.php');

  class taskController
  {
    private $_crud;
    function  __construct()
    {
      $this->_crud = new CRUD(Singleton::getInstance()->getPDO());
    }

    function  secure_getTasks()
    {
      $tasks = $this->_crud->get_tasks();
      foreach ($tasks as $key => $task)
      {
        $tasks[$key]['title'] = htmlspecialchars($task['title']);
        $tasks[$key]['description'] = nl2br(htmlspecialchars($task['description']));
//        echo $tasks[$key]['title'] . "\n";
//        echo $tasks[$key]['description'] . "\n";
        return ($tasks);
      }
    }

    function  secure_getTask($id)
    {
      $task = $this->_crud->get_task($id);
//      var_dump($task);
      $task[0]['title'] = htmlspecialchars($task[0]['title']);
      $task[0]['description'] = nl2br(htmlspecialchars($task[0]['description']));
//      echo $task[0]['title'];
//      echo $task[0]['description'];
      return ($task);
    }

    function  secure_postTask()
    {
      if(isset($_POST[""]))
    }

    private function secure_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return ($data);
    }

  }
  $taskControl = new taskController();
//  $taskControl->secure_getTasks();
//  $taskControl->secure_getTask(1);
 ?>
