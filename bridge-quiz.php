<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Here are 5 Question, you would like to answer..</h2>
<br>
<form action="DurhamBridge.php" method="get" name="Question" onSubmit="return check();">
    1. When did the Kingsgate Bridege built? :
    <br><input type="text" name="builtyear"><br>

    <br>2. Which bridge is near by Old Durham : <br>
    <input type="radio" name="radio1" id="Kingsgate" value="Kingsgate">Kingsgate Bridge
    <input type="radio" name="radio1" id="Kingfisher" value="Kingfisher">Kingfisher Bridge
    <input type="radio" name="radio1" id="Viaduct" value="Viaduct">Durham Viaduct
    <input type="radio" name="radio1" id="Framwellgate" value="Framwellgate">Framwellgate Bridge<br>

    <br>3. How long is the Durham Viaduct? <br>
    <input type="text" name="long"><br>

    <br>4. Which bridge is the oldest bridge in Durham? : <br>
    <input type="radio" name="radio2" id="Kingsgate" value="Kingsgate">Kingsgate Bridge
    <input type="radio" name="radio2" id="Kingfisher" value="Kingfisher">Kingfisher Bridge
    <input type="radio" name="radio2" id="Framwellgate" value="Framwellgate">Framwellgate Bridge<br>

    <br>5. Which bridge was located in East of Cathedral : <br>
    <input type="text" name="bridge"><br>
    <input type="hidden" name="time" value="<?php $start_time = time(); echo $start_time?>">
    <input type="submit" value="Submit">
</form>

</body>
<script>
    function check() {
        if (document.Question.builtyear.value == "") {
            alert("Please answer Q1");
            return false;
        }
        if (document.Question.radio1.value == "") {
            alert("Please answer Q2");
            return false;
        }
        if (document.Question.long.value == "") {
            alert("Please answer Q3");
            return false;
        }
        if (document.Question.radio2.value == "") {
            alert("Please answer Q4");
            return false;
        }
        if (document.Question.bridge.value == "") {
            alert("Please answer Q5");
            return false;
        } else {
            return true;
        }
    }
</script>
</html>