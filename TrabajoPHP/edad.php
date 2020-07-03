<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>

    <head>
        <h1>Tu Edad es: </h1>
    </head>
    <hr>
    <div class="respuesta">
        <div class="flex-container">
            <div>
            <?php
        $fechanacimiento = $_REQUEST['fecha'];
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        if (($mes == date("m")) && ($dia > date("d"))) {
            $ano=($ano+1); } 

        if ($mes > date("m")) {
            $ano=($ano+1);}
        
        $edad=(date("Y")-$ano);
        $meses = (date("m")-$mes-1);
        // $dias = (date("m") + date("d"));
        print $edad. " años " .$meses. " meses"; 
    ?>
            </div>
    </div>
    <hr>
    <div class="flex-container">
        <div>
            <form action="fechanacimiento.php" method="post">
            <input class="button button1" type="submit" value="Calcular otra edad">
            </form>
        </div>
        <div>
            <form action="index.php" method="post">
            <input class="button button1" type="submit" value="Menú Principal">
            </form>
        </div>
    </div>

</body>

</html>