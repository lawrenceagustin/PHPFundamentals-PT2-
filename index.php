<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System</title>
</head>
<body>
    <h1>Welcome to the Tavern! Here is the menu:</h1>
    <form action="testGet.php" method="GET">
        <li>
            <ul>Sisig - ₱80</ul>
            <ul>Siomai (5pc) - ₱25</ul>
            <ul>Kare-kare - ₱150</ul>
            <ul>Pesto Pasta - ₱120</ul>
        </li>
        <p>Choose your order:
        <select name="foods">
            <option value="sisig" name="Sisig">Sisig</option>
            <option value="siomai" name="Siomai">Siomai</option>
            <option value="kare_kare" name="Kare-kare">Kare-kare</option>
            <option value="pesto_pasta" name="PestoPasta">Pesto Pasta</option>
        </select>
        </p>
        <p>Quantity:
            <input type="text" name="quantity" size="15" maxlength="3"/>
        </p>
        <p>Cash:
            <input type="text" name="cash" size="15" maxlength="4"/>
        </p>
        <p><input type="submit" value="Submit" name="getFinal"></p>
    </form>
</body>
</html>