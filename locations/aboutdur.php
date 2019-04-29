<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"/>
    <title>Chiying Jiang's Website</title>
    <?php
    /**
     * Created by PhpStorm.
     * User: jiangchiying
     * Date: 2019-02-27
     * Time: 11:19
     */
    require_once '../Bridge.php';
    $b1 = new Bridge('Kingsgate Bridge', '107 metres', 1963, 'East of Cathedral');
    $b2 = new Bridge('Kingfisher Bridge', '58 metres', 2007, 'Old Durham');
    $b3 = new Bridge('Durham Viaduct', '230 metres', 1857, 'Durham City');
    $b4 = new Bridge('Framwellgate Bridge', '64 metres', 1450, 'Durham City');
    $Array = array($b1, $b2, $b3, $b4);
    //print_r($Array);

    //print_r($Array[0]->getbname());
    ?>
</head>
<body>
<div class="headerPage"></div>
<div class="Mycontainer">
    <h1 class="Myh1">About Durham</h1>
</div>
<div class="imgdiv">
    <div id="myCarousel" class="carousel slide ">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="../img/Durham.png" alt="First slide" style="width:100%">
            </div>
            <div class="item">
                <img src="../img/Durham2.png" alt="Second slide" style="width:100%">
            </div>
            <div class="item">
                <img src="../img/Durham3.png" alt="Third slide" style="width:100%">
            </div>
            <div class="imgcard">
                <p>These photos were taken by the Web author</p>
            </div>
        </div>
    </div>
</div>
<div class="Mycontainer">
    <h1 class="important">All resources are come from WIKI!!!</h1>
    <p>Durham is a historic city and the county town of County Durham in North East England. The city lies on the River
        Wear, to the west of Sunderland, south of Newcastle upon Tyne and to the north of Darlington. Founded over the
        final resting place of St Cuthbert, its Norman cathedral became a centre of pilgrimage in medieval England. The
        cathedral and adjacent 11th-century castle were designated a World Heritage Site by UNESCO in 1986. The castle
        has
        been the home of Durham University since 1832. HM Prison Durham is also located close to the city centre. City
        of
        Durham is the name of the civil parish.</p>
    <h1 class="Myh1">Economy</h1>
    <table>
        <thead>
        <tr>
            <th scope="col">Year</th>
            <th scope="col">Regional Gross Value Added</th>
            <th scope="col">Agriculture</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-label="Year">1995</td>
            <td data-label="Regional Gross Value Added">4,063</td>
            <td data-label="Agriculture">47</td>
        </tr>
        <?php
        $length = count($Array);
        echo $name;
        for ($i = 0; $i < count($Array); $i++) {
            $qname = $Array[$i]->getbname();
            $length = $Array[$i]->getlength();
            $year = $Array[$i]->getyear();
            $location = $Array[$i]->getlocation();
            echo "<tr><td>$qname</td><td>$length</td></td><td>$year</td></tr>";
        }
        ?>
        </tbody>
    </table>
    </br>
    <h1 class="Myh1">LandMarks</h1>
    <ul class="listStyle">
        <li>Chorister School</li>
        <li>Crook Hall</li>
        <li>Durham Castle</li>
    </ul>

</div>
</body>
<div class="footerpage"></div>
<script>
    $(function () {
        $(".headerPage").load("header.html");
        $(".footerpage").load("footer.html");
    });
</script>

<script>
    $(function () {
        $('#myCarousel').carousel({
            interval: 5000
        });
    });
</script>
</html>