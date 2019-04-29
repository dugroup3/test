<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-03
 * Time: 21:21
 */
require_once 'functions.php';

//Check the form value
if (empty($_POST['ID'])) {
    die('id is empty');
}
if (empty($_POST['name'])) {
    die('name is empty');
}
if (empty($_POST['age'])) {
    die('age is empty');
}

$ID = intval($_POST['ID']);
$name = $_POST['name'];
$age = intval($_POST['age']);


$conn = connectDB();
if ($conn) {

    $sql="UPDATE users SET name='$name', age='$age' WHERE id=$ID";
    $result = $conn->query($sql);
    if(mysqli_errno()){
        echo mysqli_error();
    }else{
        header("Location:test.php");
    }
}
?>