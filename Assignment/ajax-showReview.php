<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-08
 * Time: 11:28
 */
$employeeNumber=$_REQUEST['id'];
//if (empty($employeeNumber)) {
//    die('employeeNumber is empty');
//}
require_once '../functions.php';
try {
    $dbh = connectDBPDO();
    $sql = "SELECT * FROM `Review` WHERE employeeNumber=$employeeNumber";
    $statement = $dbh->query($sql);

    $review=$statement->fetchAll(PDO::FETCH_ASSOC);

    if(empty($review)){
        $review ="";
        echo json_encode($review);
    } else {
        echo json_encode($review);
    }

} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
?>