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

echo "<table border='1'>";
echo "<tr>";
echo "<td>Jahre:</td>";
for ($i = 1; $i <= $laufzeit; $i++) {
    if ($i == 1) {
        echo "<td> $i Jahr</td>";
    } else {
        echo "<td> $i Jahre</td>";
    }
}
echo "</tr>";

echo "<tr>";
echo "<td>Kapital:</td>";
for ($i = 1; $i <= $laufzeit; $i++) {
    $kapital = $kapital * (1 + $zinsen);
    echo "<td>" . number_format($kapital, 2, ",", ".") . "</td>";
}
echo "</tr>";


?>
