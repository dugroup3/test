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
if (isset($_GET['location']) && ($_GET['location'])) {
    echo 'Q1 : Your answer is ' . $_GET['location'] . "<br>";
    if ($_GET['location'] == "Durham") {
        echo "Your answer for Q1 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is Durham" . "<br>";
    }
} else {
    echo 'Please answer the Question 1!!' . "<br>";
}
//Q2
if (isset($_GET['radio1']) && ($_GET['location'])) {
    echo 'Q2 : Your answer is ' . $_GET['radio1'] . "<br>";
    if ($_GET['radio1'] == "Newcastle") {
        echo "Your answer for Q2 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is Newcastle" . "<br>";
    }
} else {
    echo 'Please answer the Question 2!!' . "<br>";
}

//Q3
if (isset($_GET['num']) && ($_GET['num'])) {
    echo 'Q3 : Your answer is ' . $_GET['num'] . "<br>";
    if ($_GET['num'] == 16) {
        echo "Your answer for Q3 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is 16" . "<br>";
    }
} else {
    echo 'Please answer the Question 3!!' . "<br>";
}

//Q4
if (isset($_GET['radio2']) && ($_GET['radio2'])) {
    echo 'Q4 : Your answer is ' . $_GET['radio2'] . " College." . "<br>";
    if ($_GET['radio2'] == "University") {
        echo "Your answer for Q4 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is University" . "<br>";
    }
} else {
    echo 'Please answer the Question 4!!' . "<br>";
}

//Q5
if (isset($_GET['year']) && ($_GET['year'])) {
    echo 'Q5 : Your answer is ' . $_GET['year'] . " year." . "<br>";
    if ($_GET['year'] == 1832) {
        echo "Your answer for Q5 is correct!" . "<br>";
        $mark = $mark + 5;
    } else {
        echo "Wrong Answer.. The correct answer is 1832" . "<br>";
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