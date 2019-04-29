<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="adduser.html">Add user</a><br>
<table style='text-align: left;border: solid;' border='1px'>
    <tr>
        <th>id:</th>
        <th>name:</th>
        <th>age:</th>
        <th>Modify</th>
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
    $conn = connectDB();
    if ($conn) {
        echo 'connect suss' . "<br>";
        $conn->query('set names utf8;');
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        echo 'data number is ' . mysqli_num_rows($result) . "<br>";
        $data_count = mysqli_num_rows($result);
        for ($i = 0; $i < $data_count; $i++) {
            $result_arr = mysqli_fetch_assoc($result);
            //print_r($result_arr);
            $id = $result_arr['ID'];
            $name = $result_arr['name'];
            $age = $result_arr['age'];
            echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$age</td>
                    <td><a href='EditUser.php?id=$id'>Edit</a> <a href='DeleUser.php?id=$id' onclick='del();'>Delete</a></td>
               
                  </tr>";
        }
    }
    ?>
</table>
</body>
<script>
    function del() {
        var msg = "ARE YOU SURE DELETE THIS USER？\n\nPLEASE CONFIRM！";
        if (confirm(msg)==true){
            return true;
        }else{
            return false;
        }
    }
</script>
</html>




