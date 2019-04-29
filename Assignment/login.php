<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-06
 * Time: 14:55
 */

if (!isset($_POST['username'])) {
    die("User name not define.");
}

if (!isset($_POST['password'])) {
    die("Password not define.");
}

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
//echo $username;
//echo $password;

require_once '../functions.php';

$salt = "shuaige";
$password = $password . $salt;
try {
    $dbh = connectDBPDO();
    $sql = "SELECT * FROM `User` WHERE Username='$username'";
    $statement = $dbh->query($sql);
    $User=$statement->fetch(PDO::FETCH_ASSOC);
    $hash = $User['Password'];
    if (password_verify($password, $hash)) {
        header("refresh:1;url=staff.php");
        session_start();
        $_SESSION['User']=$User;
    } else {
        header("refresh:3;url=Login.html");
        echo "Wrong Username or Password, This page will refresh by 3 seconds.";
    }
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}

?>
