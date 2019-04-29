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


<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-03-03
 * Time: 20:55
 */
require_once 'functions.php';
if(!empty($_GET['id'])){

    $id=intval($_GET['id']);
    $conn=connectDB();
    if($conn){
        $sql="SELECT *FROM users WHERE id=$id";
        $result=$conn->query($sql);
        $result_arr = mysqli_fetch_assoc($result);
        print_r($result_arr);
    }

}else{
    die('ID not define!');
}
?>
<form action="EditUser_Server.php" method="post">
    <div>
        User ID:
        <input type="" name="ID" value="<?php echo $result_arr['ID']; ?>" readonly>
    </div>
    <div>
        User Name:
        <input type="text" name="name" value="<?php echo $result_arr['name']; ?>">
    </div>
    <div>
        User Age:
        <input type="text" name="age" value="<?php echo $result_arr['age']; ?>">
    </div>
    <input type="submit" value="Submit">

</form>
</body>
</html>
