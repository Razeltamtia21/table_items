<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Items</title>
</head>
<body>
    <h2>Input Items</h2>
    <form action="./asset/proces_items.php" method="post">
        <label for="id_items">ID Items:</label>
        <br>
        <input type="text" id="id_items" name="id_items" maxlength="6" placeholder="B12345" required><br><br>

        <label for="name_items">Name Items:</label>
        <br>
        <input type="text" id="name_items" name="name_items" required><br><br>

        <label for="value_items">Value Items:</label>
        <br>
        <input type="number" id="value_items" name="value_items" placeholder="100.000" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
