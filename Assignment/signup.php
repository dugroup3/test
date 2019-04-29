<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-06
 * Time: 12:33
 */

if (!isset($_POST['username'])) {
    die("User name not define.");
}

if (!isset($_POST['password'])) {
    die("Password not define.");
}

if (!isset($_POST['employeeNumber'])) {
    die("employeeNumber not define.");
}

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$employeeNumber = $_POST['employeeNumber'];
$role = $_POST['role'];

$salt = "shuaige";
$password_hash = $password . $salt;
$password_hash = password_hash($password_hash, PASSWORD_DEFAULT);
//echo $password_hash;

require_once '../functions.php';

try {
    $dbh = connectDBPDO();
    $sql = "SELECT * FROM Staff WHERE employeeNumber='$employeeNumber'";
    $sql2 = "SELECT * FROM `User` WHERE Username='$username'";
    $sql3 = "SELECT * FROM `User` WHERE employeeNumber='$employeeNumber'";
    $statement = $dbh->query($sql);
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement2 = $dbh->query($sql2);
    $row2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
    $statement3 = $dbh->query($sql3);
    $row3 = $statement3->fetchAll(PDO::FETCH_ASSOC);
    $row = count($row);
    $row2 = count($row2);
    $row3=count($row3);

    if($row==1 &&$row2==0 &&$row3==0){
        $sql4="INSERT INTO `User`(Username,Password,employeeNumber,role) VALUES ('$username','$password_hash',$employeeNumber,$role)";
        $statement4 = $dbh->query($sql4);
        if($statement4){
            header("Location:staff.php");
        }else{
            echo "Register fail";
        }
    }else{
        echo "Sign Up fail. This employeeNumber has been register or Username has been used";
    }

} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
?>