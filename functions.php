<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-02-28
 * Time: 21:57
 */
require_once 'config.php';
function connectDB()
{

    $conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PW, 'Iccnn23_TEST');
    return $conn;
}

function connectDBPDO()
{
    $dbms = 'mysql';     //数据库类型
    $dbName = 'Iccnn23_TEST';
//    $host = 'mysql.dur.ac.uk';
//    $user = 'ccnn23';
//    $pass = 'r35udder';
      $host = 'localhost';
      $user = 'root';
      $pass = 'root';

    $dsn = "$dbms:host=$host;dbname=$dbName";
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    return $dbh;
}

?>