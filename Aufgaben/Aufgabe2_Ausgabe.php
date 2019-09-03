<?php
$bruttopreis = $_POST["Bruttopreis"];
$mwst = 0.19;
$nettopreis = $bruttopreis * 1.19;

echo "Der Nettopreis beträgt: " . number_format($nettopreis,2,",",".");

?>