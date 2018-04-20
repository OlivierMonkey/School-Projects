<?php

const ERROR_LOG_FILE = "errors.log";

function connect_db($host, $username, $passwd, $port, $db)
{    
    try
        {    
            $connection = new PDO('mysql:host='.$host.';port='.$port.';db='.$db, $username, $passwd);
            echo "Connection to DB successfull\n";  
            return $connection;
        }
    catch(Exception $e)
        {
            echo "<$e>Error connection to DB\n";
            error_log("PDO ERROR:<$e>storage in<error_log_file>\n", 3, ERROR_LOG_FILE);
            return null;
        }
    
}
$count = 0;
foreach ($argv as $arg){
    $count++;
    echo $arg. "\n";
}
if ($count < 6)
    {
        echo "Bad params! Usage:php connect_db.php host username password port db\n";
        error_log("PDO ERROR:<Bad params! Usage:php connect_db.php host username password port db>storage in<error_log_file>\n", 3, ERROR_LOG_FILE);
        return null;
    }
connect_db($argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
       
?>