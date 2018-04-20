<?php
  class appController
  {
    protected $_model;

    function __construct()
    {}

    function loadModel($model)
    {
      $this->_model = new $model();
    }

    function render($file = null)
    {
      include('../Views/' . $file);
    }

    function beforeRender()
    {}

    protected function redirect($param)
    {

    }

    function menu()
    {
      $this->render('../Views/menu.php');
    }
  }

 ?>
