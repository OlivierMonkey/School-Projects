<?php
include('Src/router.php');
include('Src/session.php');

class dispatcher
{
  function __construct()
  {
    $this->dispatch();
  }

  function counter($array)
  {
    $n = 0;
    foreach ($array as $value)
    {
      $n++;
    }
    $n--;
    return ($n);
  }

  function dispatch()
  {
    $params = explode("/", $_SERVER["REQUEST_URI"]);
    $max = $this->counter($params);
    if ($params[$max])
      $url = $params[$max - 1]."/".$params[$max];
    else
      $url = "";
    $router = new router();
    $paths = $router->getRouter();
    if (isset($paths[$url]))
    {
      include(__DIR__ . '/Controllers/' . $paths[$url][0] . '.php');
      $class = new $paths[$url][0](); //instance de classe
      $method = $paths[$url][1];
      $class->$method(); //execute la méthode
    }
    else
    {
      echo "ERROR 404 -- Not found";
      echo $url;
    }
  }
}
$dispatcher = new dispatcher();
?>
