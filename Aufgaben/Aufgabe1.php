<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aufgabe1</title>
</head>
<body>
<?php
$tankmenge = 50;
$preis = 1.34;
?>

<p> <h3>Zu bezahlen: <?= $tankmenge * $preis?> € </h3></p>
<p>
    <?php
    if ($preis<=1.30){
        echo "Günstig getankt!";
    }
    elseif ($preis<=1.40){
        echo "Fair getankt!";
    }
    elseif ($preis<=1.50){
        echo "Teuer getankt!";
    }
    ?>
</p>


</body>
</html>