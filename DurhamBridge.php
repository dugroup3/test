
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    /**
     * Created by PhpStorm.
     * User: jiangchiying
     * Date: 2019-02-27
     * Time: 11:19
     */
    require_once 'Bridge.php';
    $b1 = new Bridge('Kingsgate Bridge', '107 metres', 1963, 'East of Cathedral');
    $b2 = new Bridge('Kingfisher Bridge', '58 metres', 2007, 'Old Durham');
    $b3 = new Bridge('Durham Viaduct', '230 metres', 1857, 'Durham City');
    $b4 = new Bridge('Framwellgate Bridge', '64 metres', 1450, 'Durham City');
    $Array = array($b1, $b2, $b3, $b4);
    //print_r($Array);

    //print_r($Array[0]->getbname());
    ?>
    <?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-02-25
 * Time: 12:52
 */
//require_once 'durham.php';

$mark = 0;
//Q1
if (isset($_GET['builtyear']) && ($_GET['builtyear'])) {
    echo 'Q1 : Your answer is ' . $_GET['builtyear'] . "<br>";
    if ($_GET['builtyear'] == "1963") {
        echo "Your answer for Q1 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is 1963" . "<br>";
    }
} else {
    echo 'Please answer the Question 1!!' . "<br>";
}
//Q2
if (isset($_GET['radio1']) && ($_GET['radio1'])) {
    echo 'Q2 : Your answer is ' . $_GET['radio1'] . "<br>";
    if ($_GET['radio1'] == "Kingfisher") {
        echo "Your answer for Q2 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is Kingfisher Bridge" . "<br>";
    }
} else {
    echo 'Please answer the Question 2!!' . "<br>";
}

//Q3
if (isset($_GET['long']) && ($_GET['long'])) {
    echo 'Q3 : Your answer is ' . $_GET['long'] . "<br>";
    if ($_GET['long'] == 230) {
        echo "Your answer for Q3 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is 230" . "<br>";
    }
} else {
    echo 'Please answer the Question 3!!' . "<br>";
}

//Q4
if (isset($_GET['radio2']) && ($_GET['radio2'])) {
    echo 'Q4 : Your answer is ' . $_GET['radio2'] . " Bridge." . "<br>";
    if ($_GET['radio2'] == "Framwellgate") {
        echo "Your answer for Q4 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is Framwellgate Bridge" . "<br>";
    }
} else {
    echo 'Please answer the Question 4!!' . "<br>";
}

//Q5
if (isset($_GET['bridge']) && ($_GET['bridge'])) {
    echo 'Q5 : Your answer is ' . $_GET['bridge'] . "<br>";
    if ($_GET['bridge'] == "Kingsgate Bridge") {
        echo "Your answer for Q5 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is Kingsgate Bridge" . "<br>";
    }
} else {
    echo 'Please answer the Question 5!!' . "<br>";
}
echo "Your total mark is " . $mark."<br>";

date_default_timezone_set("Etc/GMT");
//Calculate the compete time.
$start_time = $_GET['time'];

$time_taken = time();
//$time_taken2 =date('H:i:s',$time_taken2);
//echo $time_taken2;
$time = $time_taken - $start_time;
$time =date('H:i:s',$time);
echo "The time you spent is: " . $time;
    ?>
</head>
<body>
<?php
echo "<h1>asdfsadf</h1>"
?>
<table>
    <tr>
        <th>Bridge name</th>
        <th>Length</th>
        <th>Year Built</th>
        <th>Location</th>
    </tr>

    <?php
    $length = count($Array);
    echo $name;
    for ($i = 0; $i < count($Array); $i++) {
        $qname = $Array[$i]->getbname();
        $length = $Array[$i]->getlength();
        $year = $Array[$i]->getyear();
        $location = $Array[$i]->getlocation();
        echo "<tr><td>$qname</td><td>$length</td></td><td>$year</td><td>$location</td></tr>";
    }
    ?>
</table>

</body>
</html>
