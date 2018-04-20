<html>
<head>
</head>
<body>

<?php
include_once("user.php");
session_start();

$pdo = tools::connect_db();

if (user::verify_info() == 0)
    {
        user::inscription($pdo);
        header('Location: http://coding_academy.com/pool_php_rush/index.php');      
    }
else
    {
?>
        <form action="inscription.php" method="post">
        <p>nom : <input type="text" name="name"/></p>
        <p>email : <input type="text" name="email" /></p>
        <p>password : <input type="password" name="password" /></p>
        <p>password_confirmation : <input type="password" name="password_conf" /></p>
        <p><input type="submit" value="OK" ></p>
        </form>
        
<?php
    }

?>

</body>
</html>