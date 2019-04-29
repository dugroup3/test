<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-06
 * Time: 21:21
 */
//Check the form value
if (empty($_POST['employeeNumber'])) {
    die('employeeNumber is empty');
}
if (empty($_POST['firstName'])) {
    die('firstName is empty');
}
if (empty($_POST['lastName'])) {
    die('lastName is empty');
}

if (empty($_POST['Salary'])) {
    die('Salary is empty');
}

$employeeNumber = intval($_POST['employeeNumber']);
$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$Salary = intval($_POST['Salary']);

require_once '../functions.php';
$dbh=connectDBPDO();
//$sql = "UPDATE `Staff` SET firstName='$firstName', lastName='$lastName' Salary=$Salary WHERE employeeNumber=$employeeNumber";
$sql = "UPDATE `Staff` SET `firstName`='$firstName',`lastName`='$lastName',`Salary`=$Salary WHERE employeeNumber=$employeeNumber";
$statement = $dbh->query($sql);
if($statement){
    header("Location:staff.php");
}else{
    echo "Edit fail";
}

?>