<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-02-28
 * Time: 21:41
 */
if (!isset($_POST['name'])) {
    die("User name not define.");
}

if (!isset($_POST['age'])) {
    die("User age not define.");
}
$name = $_POST['name'];
$age = $_POST['age'];
$age = intval($age);
if (empty($name)) {
    die("User name not define.");
}
if (empty($age)) {
    die("User age not define.");
}

require_once 'functions.php';
$conn = connectDB();
if ($conn) {
    $conn->query('set names utf8;');
    $sqlC = "SELECT *FROM users WHERE name='$name'";
    $result = $conn->query($sqlC);
    $num_rows = mysqli_num_rows($result);

    //whether the user has existed.
    if ($num_rows == 0) {
        //mysqli_query("INSERT INTO users(name,age),VALUES('$name',$age)");
        $sql = "INSERT INTO users(name,age) VALUES ('$name',$age)";
        if ($result = $conn->query($sql)) {
            header("Location:test.php");
        } else {
            echo "Add User Fail";
        }
    } else {
        echo "This user has exist";
    }
} else {
    die("Can not connect database");
}
?>