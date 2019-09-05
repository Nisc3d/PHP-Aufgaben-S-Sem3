<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Pizzabestellung:</h2>
<form action="Aufgabe4_Ausgabe.php" method="post">
    <p>Name:<input type="text" name="Name:"></p>
    <p>Adresse:<input type="text" name="Adresse:"></p>
    <p>Geschlecht:<input type="text" name="Geschlecht:"></p>
    <br>

    <h4>Pizza auswählen:</h4>
    <p><select multiple="multiple" name="Pizza[]">
            <option value="PizzaSalami5">Pizza Salami 5€</option>
            <option value="PizzaSchinken5">Pizza Schinken 5€</option>
            <option value="PizzaHawaii6">Pizza Hawaii 6€</option>
            <option value="PizzaSchinkenPilze6">Pizza Schinken und Pilze 6€</option>
            <option value="PizzaMargherita4">Pizza Margeherita 4€</option>
        </select>
    </p>
    <br>

    <h4>Zusatzwunsch auswählen:</h4>
    <p><input type="checkbox" name="Oliven1" value="Oliven">Oliven 1€</p>
    <p><input type="checkbox" name="Mozzarella1" value="Mozerella">Mozerella 1€</p>
    <p><input type="checkbox" name="Parma-Schinken2" value="Parma-Schinken">Parma-Schinken 2€</p>

    <p><input type="reset" value="Reset">
        <input type="submit" value="Submit"></p>
</form>

</body>
</html>