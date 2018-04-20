<?php
require('appController.php');
include('../Models/User.php');

class usersController extends appController
{
  public $_session;
  function  __construct()
  {
    $this->_session = new Session();
  }

  function  secure_getUsers()
  {
    $this->loadModel("userModel");
    foreach ($tasks as $key => $task)
    {
      $tasks[$key]['username'] = htmlspecialchars($task['username']);
      $tasks[$key]['email'] = htmlspecialchars($task['email']);
      $tasks[$key]['group'] = htmlspecialchars($task['group']);
      return ($tasks);
    }
  }

  function  secure_getUser()
  {
    $this->loadModel("userModel");
    $get = $this->_model->getUser($_SESSION['log']);
    $get[0]['username'] = htmlspecialchars($get[0]['username']);
    $get[0]['email'] = htmlspecialchars($get[0]['email']);
    $get[0]['group'] = htmlspecialchars($get[0]['group']);
    return ($get);
  }

  function  secure_postUser()
  {
    if ($_SESSION['group'] == 'ADMINISTRATOR')
      $this->render("Forms/Admin/addUser.php");
    else if ($_SERVER['REQUEST_METHOD'] == 'POST' )
      $this->render("Forms/register.php");
    if(isset($_POST['username']))
    {
      if(isset($_POST["username"]) && (strlen($_POST["username"]) >= 3)
      && isset($_POST["email"]) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
      && isset($_POST["password"]) && (strlen($_POST["password"]) >= 8) && ($_POST["password"] == $_POST["password_confirmation"]))
      {
        $username = $this->secure_input($_POST["username"]);
        $email = $this->secure_input($_POST["email"]);
        $password = $this->secure_input($_POST["password"]);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $array = array(
          'username' => $username,
          'email' => $email,
          'password' => $password_hash
        );
        if ($_POST['group'])
          $array['group'] = $_POST['group'];
        else
          $array['group'] = 'USER';
        if ($_POST['status'])
          $array['status'] = $_POST['status'];
        $this->loadModel("userModel");
        if ($this->_model->getUserbyEmail($_POST['email'], 'users'))
          echo "Error: user already exist.";
        else
        {
          $get = $this->_model->postUser($array);
            sleep(1);
            echo "User Created !";
            header('locationlocalhost/MVC/PHP_Rush_MVC/');
        }
      }
      else
        echo "Error: missing or invalid parameters.";
    }
  }

  function adminList()
  {
    $this->loadModel("userModel");
    $fetch = $this->_model->getUsers();
    $n = 0;
    $this->render("Forms/Admin/usersList.php");
    foreach ($fetch as $key)
    {
     echo "<tr>";

     echo '<td>' . $fetch[$n]['id'] . '</td>';

     echo '<td>' . $fetch[$n]['username'] . '</td>';

     echo '<td>' . $fetch[$n]['email'] . '</td>';

     echo '<td>' . $fetch[$n]['group'] . '</td>';

     echo '<td>' . $fetch[$n]['created_at'] . '</td>';

     echo '<td>' . $fetch[$n]['modif_at'] . '</td>';

//     echo '<td><a href="/MVC/PHP_Rush_MVC/Admin/editUser">Edit</a></td>';

     echo '<td><a href="/MVC/PHP_Rush_MVC/Admin/deleteUser">Delete</a></td>';

     echo "</tr>";
     $n++;
   }
   echo "</table>";
   echo "<form action='/MVC/PHP_Rush_MVC/Controllers/putUser' method='post'>
          id Selected: <input type='text' name='id'><br><br>
          <input type='submit' name='idSelected'>
          </form>";
   echo "<a href='/MVC/PHP_Rush_MVC/Controllers/accountProfile'>Back</a>";
  }

  function accountProfile()
  {
    $get = $this->secure_getUser();
    if ($get[0]['group'] == 'ADMINISTRATOR')
      $this->render('../Views/Forms/Admin/adminButton.php');
    echo "username:  " . $get[0]['username'] . '<br>';
    echo "email:  " . $get[0]['email'] . '<br>';
    echo "group:  " . $get[0]['group'] . '<br>';
    echo "status:  " . $get[0]['status'] . '<br>';
    echo "created at:  " . $get[0]['created_at'] . '<br>';
    echo "last modification::  " . $get[0]['modif_at'] . '<br>';


    $this->render('../Views/Forms/accountProfile.php');
  }

  function secure_putUser()
  {
    if (isset($_POST['id']))
      {
        $id_selected = $_POST['id'];
        $this->render('Forms/Admin/editUser');
      }
    $this->loadModel("userModel");
    if (isset($_POST["username"]) || isset($_POST["email"])
    || isset($_POST["password"]))
    {
      $array = array();
      if ($_POST["username"])
      {
        $username = $this->secure_input($_POST["username"]);
        $array['username'] = $username;
      }
      if ($_POST["email"])
      {
        $email = $this->secure_input($_POST["email"]);
        $array['email'] = $email;
      }
      else if ($_POST["email"]  && !filter_var($POST['email'], FILTER_VALIDATE_EMAIL))
      {
        echo "Error: invalid email.";
        return (false);
      }
      if ($_POST["password"])
      {
        $password = $this->secure_input($_POST["password"]);
        $array['password'] = password_hash($password, PASSWORD_DEFAULT);
      }
      else if (isset($_POST["password"])  && $_POST["password"] != $_POST["password_confirmation"])
      {
        echo $password;
        echo "invalid password";
        return (false);
      }
      $this->_model->putUser($_SESSION['log'], $array);
      header("location: /MVC/PHP_Rush_MVC/Controllers/accountProfile");
      echo "changes updated!";
    }
    else
    {
      echo "Error: enter at least one parameter.";
      return (false);
    }
  }

  function  secure_deleteUser()
  {
    $this->loadModel("userModel");
    $this->_model->deleteUser($_SESSION['log']);
    $this->logout();
    header('Location: /MVC/PHP_Rush_MVC/');
    echo "The account has been deleted.";
  }

  public function secure_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return ($data);
  }

  function logout()
  {
    $this->_session->logout();
    header('Location: /MVC/PHP_Rush_MVC/');
  }

  public function login()
  {
    if(!isset($_SESSION['log']))
    {
      if ($_SERVER['REQUEST_METHOD'] == 'GET')
      $this->render("Forms/login.php");
      else if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $this->loadModel("userModel");
        $get = $this->_model->getUserbyEmail($_POST['email'], "users");
        if (password_verify($_POST['password'], $get[0]['password']))
        {
          $_SESSION['log'] = $get[0]['id'];
          $_SESSION['group'] = $get[0]['group'];
          header("Location: /MVC/PHP_Rush_MVC/Controllers/menu");
          return (true);
        }
        else
        {
          echo "Error: Invalid Email or password.";
          return (false);
        }
      }
    }
  }
}
?>
