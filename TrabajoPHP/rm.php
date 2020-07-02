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
        <h1>Multiplicación</h1>
    </head>
    <hr>
    <div class="respuesta">
        <div class="flex-container">
            <div>
            <?php
        if(isset($_REQUEST['numero'])){
            $num = $_REQUEST['numero'];

            for($contador=1;$contador<=10;$contador++){
                $total = $num * $contador;
                print $num.  "  *  "  .$contador. "  =  " .$total."<br>"; 
            }
        }else{
            print "<h2>Ingrese un numero</h2>";
        }
    ?>
            </div>
            <div>
            <?php
        if(isset($_REQUEST['numero'])){
            $num = $_REQUEST['numero'];

            for($contador=11;$contador<=20;$contador++){
                $total = $num * $contador;
                print $num.  "  *  "  .$contador. "  =  " .$total."<br>"; 
            }
        }else{
            print "<h2>Ingrese un numero</h2>";
        }
    ?>
            </div>

        </div>
    </div>
    <hr>
    <div class="flex-container">
        <div>
            <form action="multiplicacion.php" method="post">
            <input class="button button1" type="submit" value="Calcular otro número">
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