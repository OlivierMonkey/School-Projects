<?php
  class Session
  {
    function __construct()
    {
      session_start();
    }

    function logout()
    {
      session_unset($_SESSION);
      session_destroy($_SESSION);
    }
  }

 ?>
