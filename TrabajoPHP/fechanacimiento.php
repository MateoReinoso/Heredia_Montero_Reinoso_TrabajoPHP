<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Fecha Nacimiento</title>
</head>

<body>

    <head>
        <h1>Fecha Nacimiento</h1>
    </head>
    <hr>
    <h2>
    Crear un programa que ingresada un fecha de nacimiento calcule la edad de la persona a la fecha actual.
    </h2>
    <div class="edad">
        <form action="edad.php" method="POST">
            <label class="fec" for="fecha"></label>
            <input class="fec" type="date" name="fecha" placeholder="Ingresa tu fecha de nacimiento" required="">
            <input class="button button1" type="submit" value="Calcular edad">
        </form>
    </div>

</body>

</html>