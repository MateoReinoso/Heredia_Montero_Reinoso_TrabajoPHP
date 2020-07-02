<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cuadrado</title>
</head>

<body>

    <head>
        <h1>Cuadrado</h1>
    </head>
    <hr>
    <div class="rm">
        <form action="calcfiguras.php" method="POST">
            <label class="nume" for="numero"></label>
            <input class="nume" type="text" name="ladoc" placeholder="Ingresa el lado" required="" pattern="[0-9]+">
            <input class="button button1" type="submit" value="Calcular">
        </form>
    </div>

</body>

</html>