<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MeetingRoom</title>
</head>
<body>
<h1>Who have used Meeting Room 1</h1>
<table style='text-align: left;border: solid;' border='1px'>
    <tr>
        <th>EmployeeNumber:</th>
        <th>First Name:</th>
        <th>Last Name:</th>
    </tr>
    <?php
    //    $servername = "localhost";
    //    $username = "root";
    //    $password = "root";
    //        $servername="mysql.dur.ac.uk";
    //        $username = "ccnn23";
    //        $password = "r35udder";
    //$conn = new mysqli($servername, $username, $password, 'Iccnn23_TEST');


    require_once 'functions.php';
    $Array = array();
    $conn = connectDB();
    if ($conn) {
        echo 'connect suss' . "<br>";
        $conn->query('set names utf8;');
        $sql = "SELECT s.employeeNumber, firstName, lastName FROM Staff s LEFT JOIN Review r ON s.employeeNumber=r.employeeNumber 
                LEFT JOIN MeetingRooms m on r.roomUsed=m.roomID WHERE m.roomName ='MeetingRoom1'";
        $result = $conn->query($sql);
        echo 'data number is ' . mysqli_num_rows($result) . "<br>";
        $data_count = mysqli_num_rows($result);
        for ($i = 0; $i < $data_count; $i++) {
            $result_arr = mysqli_fetch_assoc($result);
            //print_r($result_arr);
            $id = $result_arr['employeeNumber'];
            array_push($Array,$id);
            $firstName = $result_arr['firstName'];
            $lastName = $result_arr['lastName'];
            echo "<tr>
                    <td>$id</td>
                    <td>$firstName</td>
                    <td>$lastName</td>
                  </tr>";
        }
        print_r($Array);
    }
    ?>
</table>
<h2>Who have never used Meeting Room 1</h2>
<table style='text-align: left;border: solid;' border='1px'>
    <tr>
        <th>EmployeeNumber:</th>
        <th>First Name:</th>
        <th>Last Name:</th>
    </tr>
    <?php
    //    $servername = "localhost";
    //    $username = "root";
    //    $password = "root";
    //        $servername="mysql.dur.ac.uk";
    //        $username = "ccnn23";
    //        $password = "r35udder";
    //$conn = new mysqli($servername, $username, $password, 'Iccnn23_TEST');


    require_once 'functions.php';
    $Array=implode(",",$Array);
    echo $Array;
    $conn = connectDB();
    if ($conn) {
        echo 'connect suss' . "<br>";
        $conn->query('set names utf8;');
        $sql = "SELECT s.employeeNumber, firstName, lastName FROM Staff s WHERE s.employeeNumber NOT IN ($Array)";
        $result = $conn->query($sql);
        echo 'data number is ' . mysqli_num_rows($result) . "<br>";
        $data_count = mysqli_num_rows($result);
        for ($i = 0; $i < $data_count; $i++) {
            $result_arr = mysqli_fetch_assoc($result);
            //print_r($result_arr);
            $id = $result_arr['employeeNumber'];
            $firstName = $result_arr['firstName'];
            $lastName = $result_arr['lastName'];
            echo "<tr>
                    <td>$id</td>
                    <td>$firstName</td>
                    <td>$lastName</td>
                  </tr>";
        }
    }
    ?>
</table>
</body>
</html>
<?php
//$servername = "mysql.dur.ac.uk";
//$username = "ccnn23";
//$password = "r35udder";
//
//// 创建连接
//$conn = new mysqli($servername, $username, $password);
//
//// 检测连接
//if ($conn->connect_error) {
//    die("connect fail: " . $conn->connect_error);
//}
//
//echo "<br>" . "connect suc!!" . "<br>";
//
//?>



