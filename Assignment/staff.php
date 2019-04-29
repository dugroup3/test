<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../js/script.js"></script>
    <title>Staff Information</title>
</head>
<body>
<?php
session_start();
if (!empty($_SESSION['User'])) {
    echo "<h1>" . 'Welcome:   ' . $_SESSION['User']['Username'] . "</h1>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "<a style='margin-right: 20px' href='signup.html'>Sign up</a>
              <a href='Login.html'>Login</a>";
}
?>
<!--<a href="adduser.html">Add user</a><br>-->
<h2>Check list of people who got the salary:</h2>
<form action="checkSalary.php" method="post">
    <input type="text" name="salary" value="">
    <input type="submit" value="Sumbit">
</form>

<table style='text-align: left;border: solid;' border='1px'>
    <tr>
        <th>employeeNumber:</th>
        <th>firstName:</th>
        <th>lastName:</th>
        <th>startYear</th>
        <th>Salary</th>
        <?php
        if (!empty($_SESSION['User']) && $_SESSION['User']['role'] == 1) {
            echo "<th>Modify</th>";
            echo "<th>Add Review</th>>";
        }
        ?>
    </tr>
    <?php
    /**
     * Created by PhpStorm.
     * User: jiangchiying
     * Date: 2019-03-06
     * Time: 09:20
     */

    require_once '../functions.php';


    try {
        $dbh = connectDBPDO();
        echo "connect success!<br/>";
        $statement = $dbh->query('SELECT * from Staff');
        $sql2 = "SELECT * FROM `MeetingRooms`";
        $statement2 = $dbh->query($sql2);
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
                    <td>$Salary</td>";


            if (!empty($_SESSION['User']) && $_SESSION['User']['role'] == 1) {
                echo "<td><a href='staff_edit.php?employeeNumber=$employeeNumber'>Edit</a> <a href='staff_review.php?employeeNumber=$employeeNumber'>Add Review</a>
                <button type='button' id='$employeeNumber' class='staff-review'>Staff Review</button>
                <div class='reviewInfo' id='review$employeeNumber'>
                </div>
                     </td>";
                echo "<td>";
                echo  "<button type='button' id='btn$employeeNumber' class='addReview-btn'>Add Review</button>";
                echo "<form class='add-review' id='add$employeeNumber' >
                  <div>
                      Employee Number:
                      <input type='' name='eNumber' value='$employeeNumber' readonly>
                  </div>
                  <div>
                      Date of Review:
                      <input type='datetime-local' name='dateOR' value='2019-01-01'>
                  </div>
                  <div>
                      Comment:
                      <input type='text' name='comment' value=''>
                  </div>
                  <div>
                  RoomUsed:
                   <select name='roomUsed'>
                    <option value='1'>Meeting Room1</option>
                   <option value='2'>Meeting Room2</option>
                   </select>
                   </div>
                  <input type='submit' class='Add-view' value='Add Review'>
                    </form>";
               echo  "</td>";
            }
            echo "</tr>";
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