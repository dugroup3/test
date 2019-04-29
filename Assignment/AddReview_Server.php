<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-07
 * Time: 10:29
 */
//Check the form value
if (empty($_POST['employeeNumber'])) {
    die('employeeNumber is empty');
}
if (empty($_POST['dateOR'])) {
    die('dateOR is empty');
}
if (empty($_POST['comment'])) {
    die('comment is empty');
}

if (empty($_POST['roomUsed'])) {
    die('roomUsed is empty');
}

$employeeNumber = intval($_POST['employeeNumber']);
$dataOR = $_POST['dateOR'];
$comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
$roomUsed = intval($_POST['roomUsed']);

require_once '../functions.php';
$dbh = connectDBPDO();
$sql ="INSERT INTO `Review`(`employeeNumber`, `dateOfReview`, `comment`, `roomUsed`) VALUES ($employeeNumber,'$dataOR','$comment',$roomUsed)";
$statement = $dbh->query($sql);
if($statement){
    header("Location:staff.php");
}else{
    echo "Add review fail";
}
?>