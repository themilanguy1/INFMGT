<?php
    include 'connect.php';
    include 'functiondefinitions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INFMGT opdracht</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="SLA.css" />
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center titel">
                <h3><b>Verkeersveiligheid in historish perspectief</b></h3>
            </div>
            <div class="col-xl-12">
                <p>Afwijking van start dodenaantal in 1950.</p>
            </div>
            <div class="col-xl-12">
                <?php
                    lees("jaartal","doden_aantal","statistieken");
                ?>
            </div>
        </div>
    </div>
</body>
</html>