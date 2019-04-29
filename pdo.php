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
    /**
     * Created by PhpStorm.
     * User: jiangchiying
     * Date: 2019-03-06
     * Time: 09:20
     */

    require_once 'functions.php';


    try {
        $dbh = connectDBPDO();
        echo "连接成功<br/>";
        //你还可以进行一次搜索操作
//    foreach ($dbh->query('SELECT * from users') as $row) {
//        print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
//    }
        $statement = $dbh->query('SELECT * from users');
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['ID'];
            $name = $row['name'];
            $age = $row['age'];
            echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$age</td>
                    <td><a href='EditUser.php?id=$id'>Edit</a> <a href='DeleUser.php?id=$id' onclick='del();'>Delete</a></td>
               
                  </tr>";
        }
    } catch (PDOException $e) {
        die ("Error!: " . $e->getMessage() . "<br/>");
    }
    ?>
</table>
</body>
<script>
    function del() {
        var msg = "ARE YOU SURE DELETE THIS USER？\n\nPLEASE CONFIRM！";
        if (confirm(msg) == true) {
            return true;
        } else {
            return false;
        }
    }
</script>
</html>