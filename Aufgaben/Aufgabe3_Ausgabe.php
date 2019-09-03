<?php
$kapital = $_POST["Kapital"];
$laufzeit = $_POST["Laufzeit"];

if ($laufzeit <= 3) {
    $zinsen = 0.03;
} elseif ($laufzeit <= 5) {
    $zinsen = 0.04;
} elseif ($laufzeit <= 10) {
    $zinsen = 5;
} elseif ($laufzeit > 10) {
    $zinsen = 0.06;
}


?>
