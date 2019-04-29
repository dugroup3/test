<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditUser</title>
</head>
<body>
<a href="staff.php">Back to Home Page</a>
<h1>Edit Staff Information</h1>
<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-06
 * Time: 17:35
 */
require_once '../functions.php';
if(!empty($_GET['employeeNumber'])){

    $employeeNumber=intval($_GET['employeeNumber']);
    $dbh = connectDBPDO();
    $sql = "SELECT * FROM `Staff` WHERE employeeNumber=$employeeNumber";
    $statement = $dbh->query($sql);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($result);
}else{
    die('ID not define!');
}

?>
<form action="EditStaff_Server.php" method="post">
    <div>
        Employee Number:
        <input type="" name="employeeNumber" value="<?php echo $result['employeeNumber']; ?>" readonly>
    </div>
    <div>
        First Name:
        <input type="text" name="firstName" value="<?php echo $result['firstName']; ?>">
    </div>
    <div>
        Last Name:
        <input type="text" name="lastName" value="<?php echo $result['lastName']; ?>">
    </div>
    <div>
        Salary:
        <input type="text" name="Salary" value="<?php echo $result['Salary']; ?>">
    </div>
    <input type="submit" value="Submit">

</form>
</body>
</html>
