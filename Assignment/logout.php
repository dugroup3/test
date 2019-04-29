<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-06
 * Time: 17:07
 */
session_start();
session_destroy();
header("refresh:1;url=staff.php");
?>