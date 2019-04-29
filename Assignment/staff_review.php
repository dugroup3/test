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
<h1>Add Staff Review</h1>
<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-06
 * Time: 17:35
 */
require_once '../functions.php';
if (!empty($_GET['employeeNumber'])) {

    $employeeNumber = intval($_GET['employeeNumber']);
    $dbh = connectDBPDO();
    $sql = "SELECT * FROM `Staff` WHERE employeeNumber=$employeeNumber";
    $statement = $dbh->query($sql);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
} else {
    die('ID not define!');
}

?>
<form action="AddReview_Server.php" method="post">
    <div>
        Employee Number:
        <input type="" name="employeeNumber" value="<?php echo $result['employeeNumber']; ?>" readonly>
    </div>
    <div>
        Date of Review:
        <input type="datetime-local" name="dateOR" value="2019-01-01">
    </div>
    <div>
        Comment:
        <input type="text" style="height: 100px; width: 400px" name="comment" value="">
    </div>
    <div>
        RoomUsed:
        <select name="roomUsed">
            <?php
            $sql2 = "SELECT * FROM `MeetingRooms`";
            $statement2 = $dbh->query($sql2);
            while ($row = $statement2->fetch(PDO::FETCH_ASSOC)) {
                 $roomID=$row['roomID'];
                 $roomName=$row['roomName'];
                echo "<option value='$roomID'>$roomName</option>";
            }
            ?>
        </select>
    </div>
    <input type="submit" value="Submit">

</form>
</body>
</html>