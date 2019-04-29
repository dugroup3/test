<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Here are 5 Question, you would like to answer..</h2>
<br>
<form action="quiz.php" method="get" name="Question" onSubmit="return check();">
    1. Where is Durham University? :
    <br><input type="text" name="location"><br>

    <br>2. Which city is near by Durham : <br>
    <input type="radio" name="radio1" id="newcastle" value="Newcastle">Newcastle
    <input type="radio" name="radio1" id="leeds" value="Leeds">Leeds
    <input type="radio" name="radio1" id="london" value="London">London<br>

    <br>3. How many colleges are there in Durham University? <br>
    <input type="text" name="num"><br>

    <br>4. Which college is the oldest college in Durham University? : <br>
    <input type="radio" name="radio2" id="University" value="University">University
    <input type="radio" name="radio2" id="Chad" value="Chad">Chad
    <input type="radio" name="radio2" id="Grey" value="Grey">Grey<br>

    <br>5. Which year was Durham University founded : <br>
    <input type="text" name="year"><br>
    <input type="hidden" name="time" value="<?php $start_time = time(); echo $start_time?>">
    <input type="submit" value="Submit">
</form>

</body>
<script>
    function check() {
        if (document.Question.location.value == "") {
            alert("Please answer Q1");
            return false;
        }
        if (document.Question.radio1.value == "") {
            alert("Please answer Q2");
            return false;
        }
        if (document.Question.num.value == "") {
            alert("Please answer Q3");
            return false;
        }
        if (document.Question.radio2.value == "") {
            alert("Please answer Q4");
            return false;
        }
        if (document.Question.year.value == "") {
            alert("Please answer Q5");
            return false;
        } else {
            return true;
        }
    }
</script>
</html>
