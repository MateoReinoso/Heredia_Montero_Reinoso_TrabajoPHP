<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Multiplicacion</title>
</head>

<body>

    <head>
        <h1>Multiplicación</h1>
    </head>
    <hr>
    <div class="rm">
        <form action="rm.php" method="POST">
            <label class="nume" for="numero"></label>
            <input class="nume" type="text" name="numero" placeholder="Ingresa el numero" required="" pattern="[0-9]+">
            <input class="button button1" type="submit" value="Calcular">
        </form>
    </div>

</body>

</html>