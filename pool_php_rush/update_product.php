<?php
include_once("product.php");
session_start();
if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 0)
    {
        header("Location: http://coding_academy.com/pool_php_rush/index.php");
        exit();
    }

$pdo = tools::connect_db();

echo "upadte product's detail.<br>";

if (isset($_POST["name"]))
    {
        product::update_product($pdo);
        header('Location: http://coding_academy.com/pool_php_rush/admin.php');
    }

?>
 <form action="update_product.php" method="post">
        <p>nom : <input type="text" name="name"/></p>
        <p>prix : <input type="number" name="price" /></p>
        <p>description : <input type="text" name="description"/></p>
        <p><input type="hidden" name="id" value=<?php echo $_GET["id"];?>/></p>
        <p><input type="submit" value="OK" ></p>
        </form>
     <a href="http://coding_academy.com/pool_php_rush/admin.php"> Back  </a><br>