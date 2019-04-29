<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table style='text-align: left;border: solid;' border='1px'>
    <tr>
        <th>employeeNumber:</th>
        <th>firstName:</th>
        <th>lastName:</th>
        <th>startYear</th>
        <th>salary</th>
        <th>Modify</th>
    </tr>
<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-06
 * Time: 11:22
 */

if (!isset($_POST['salary'])) {
    die("salary not define.");
}

$salary = $_POST['salary'];

if(empty($salary)){
    die("salary not define.");
}

require_once '../functions.php';

try {
    $dbh = connectDBPDO();
    echo "connect success!<br/>";
    $statement = $dbh->query("SELECT * from Staff WHERE Salary/12 > $salary");
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $employeeNumber = $row['employeeNumber'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $startYear = $row['startYear'];
        $Salary = $row['Salary'];
        echo "<tr>
                    <td>$employeeNumber</td>
                    <td>$firstName</td>
                    <td>$lastName</td>
                    <td>$startYear</td>
                    <td>$Salary</td>
                    <td><a href='EditUser.php?id=$id'>Edit</a> <a href='DeleUser.php?id=$id' onclick='del();'>Delete</a></td>
                  </tr>";
    }
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}

?>
</body>
</html>
