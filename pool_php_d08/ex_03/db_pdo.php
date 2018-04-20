<?php

function connect_db($host, $username, $passwd, $port, $db)
{
    /*$host = 'localhost';
    $port = '3306';
    $db = 'my_db';
    $username = 'olivier.routier@coding-academy.fr';
    $passwd = ;*/

    try
        {    
            $connection = new PDO('mysql:host='.$host.';port='.$port.';db='.$db, $username, $passwd);
            return $connection;
        }
    //$connection = null;
    
    catch(Exception $e)
        {          
            echo "PDO ERROR:<$e>storage in<error_log_file>\n";
            error_log("PDO ERROR:<$e->getMessage()>storage in<error_log_file>\n", 3, ERROR_LOG_FILE);
            die();
        }
}

connect_db('localhost', 'root', 'dbpasswd', '3306', 'coding');
?>