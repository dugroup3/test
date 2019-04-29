<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-03
 * Time: 22:03
 */
require_once 'functions.php';
$id = $_GET['id'];
if (!empty($id)) {
    $conn = connectDB();
    if ($conn) {
        $sql="DELETE FROM `users` WHERE id=$id";
        $result=$conn->query($sql);
        if(mysqli_errno()){
            echo mysqli_error();
        }else{
            header("Location:test.php");
        }
    }

} else {
    die("id not define");
}

?>