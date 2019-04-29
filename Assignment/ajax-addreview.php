<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-08
 * Time: 16:12
 */


if (empty($_POST['eNumber'])) {
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
$employeeNumber=filter_input(INPUT_POST, 'eNumber', FILTER_SANITIZE_NUMBER_INT);
$dataOR = $_POST['dateOR'];
$comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
$roomUsed = intval($_POST['roomUsed']);

require_once '../functions.php';
$dbh = connectDBPDO();
$sql ="INSERT INTO `Review`(`employeeNumber`, `dateOfReview`, `comment`, `roomUsed`) VALUES ($employeeNumber,'$dataOR','$comment',$roomUsed)";
$statement = $dbh->query($sql);
if($statement){
    echo "The New Review Has been saved!!";
}else{
    echo "Add review fail";
}
?>