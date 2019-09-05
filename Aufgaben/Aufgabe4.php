<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Pizzabestellung:</h2>
<form action="Aufgabe4_Ausgabe.php" method="post">
    <p>Name:<input type="text" name="Name"></p>
    <p>Adresse:<input type="text" name="Adresse"></p>
    <p>Geschlecht:<input type="text" name="Geschlecht"></p>
    <br>

    <h4>Pizza auswählen:</h4>
    <p><select multiple="Pizzen" name="Pizza[]">
            <option value="Pizza Salami 5">Pizza Salami 5€</option>
            <option value="Pizza Schinken 5">Pizza Schinken 5€</option>
            <option value="Pizza Hawaii 6">Pizza Hawaii 6€</option>
            <option value="Pizza SchinkenPilze 6">Pizza Schinken und Pilze 6€</option>
            <option value="Pizza Margherita 4">Pizza Margeherita 4€</option>
        </select>
    </p>

    <h4>Zusatzwunsch auswählen:</h4>
    <p><input type="checkbox" name="Oliven 1" value="Oliven">Oliven 1€</p>
    <p><input type="checkbox" name="Mozerella 1" value="Mozerella">Mozerella 1€</p>
    <p><input type="checkbox" name="Parma-Schinken 1" value="Parma-Schinken">Parma-Schinken 2€</p>

</form>
<p><input type="submit"> <input type="reset"></p>
</form>
</body>
</html>