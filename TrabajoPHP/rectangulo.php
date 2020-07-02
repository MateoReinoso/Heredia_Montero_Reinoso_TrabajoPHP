<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Rectangulo</title>
</head>

<body>

    <head>
        <h1>Rectangulo</h1>
    </head>
    <hr>
    <div class="rm">
        <form action="calcfiguras.php" method="POST">
            <label class="nume" for="numero"></label>
            <input class="nume" type="text" name="lador1" placeholder="Ingresa el lado 1" required="" pattern="[0-9]+"><br>
            <label class="nume" for="numero"></label>
            <input class="nume" type="text" name="lador2" placeholder="Ingresa el lado 2" required="" pattern="[0-9]+"><br>
            <input class="button button1" type="submit" value="Calcular">
        </form>
    </div>

</body>

</html>