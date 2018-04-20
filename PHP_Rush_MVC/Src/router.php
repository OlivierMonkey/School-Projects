<?php
  class router
  {
    private $_array;

    function __construct()
    {
      $this->_array = array(
        '' => array('usersController', 'login'),
        'Controllers/logout' => array('usersController', 'logout'),
        'Controllers/menu' => array('appController', 'menu'),
        'Controllers/accountProfile' => array('usersController', 'accountProfile'),
        'Controllers/getUsers' => array('usersController', 'secure_getUsers'),
        'Controllers/getUser' => array('usersController', 'secure_getUser'),
        'Controllers/postUser' => array('usersController', 'secure_postUser'),
        'Controllers/putUser' => array('usersController', 'secure_putUser'),
        'Controllers/deleteUser' => array('usersController', 'secure_deleteUser'),
        'Controllers/getArticles' => array('articlesController', 'secure_getArticles'),
        'Controllers/getArticle' => array('articlesController', 'secure_getArticle'),
        'Controllers/postArticle' => array('articlesController', 'secure_postArticle'),
        'Controllers/putArticle' => array('articlesController', 'secure_putArticle'),
        'Controllers/deleteArticle' => array('articlesController', 'secure_deleteArticle'),
        'Admin/userList' => array('usersController', 'adminList'),
        'Admin/addUser' => array('usersController', 'secure_postUser'),
        'Admin/editUser' => array('usersController', 'secure_putUser')

      );
    }

    function getRouter()
    {
      return ($this->_array);
    }
  }
 ?>
