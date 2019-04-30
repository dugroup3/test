<?php
header("content-type:text/html;charset=utf8");

$servername = "dbtest.ce12oaotat2e.eu-west-2.rds.amazonaws.com";
$username = "root";
$password = "12341234";

// 创建连接
$conn = mysqli_connect($servername, $username, $password,'dbtest');

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "chenggong ";
$sql="SELECT * FROM staff";

$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "</tr>";
}