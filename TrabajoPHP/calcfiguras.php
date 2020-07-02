<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>CaluloPA</title>
</head>

<body>

    <head>
        <h1>Resultados</h1>
    </head>
    <hr>
    <div class="respuesta">
        <div class="flex-container">
            <div>
            <?php
            $verdad=isset($_REQUEST['radio'])||isset($_REQUEST['ladoc'])||
            isset($_REQUEST['lador1']) || isset($_REQUEST['lador2'])||
            isset($_REQUEST['ladot1']) || isset($_REQUEST['ladot2'])|| isset($_REQUEST['ladot3']);
        if(isset($_REQUEST['radio'])){
            $radio = $_REQUEST['radio'];
            $per=2*$radio*3.14159;
            $area=$radio*$radio*3.14159;
            print "Perimetro del circulo= " .$per;
            echo "<br>";
            print "Area del circulo= " .$area;
            
        }
        if(isset($_REQUEST['ladoc'])){
            $ladoc = $_REQUEST['ladoc'];
            $per=4*$ladoc;
            $area=$ladoc*$ladoc;
            print "Perimetro del cuadrado= " .$per;
            echo "<br>";
            print "Area del Cuadrado= " .$area;
            
        }
        if(isset($_REQUEST['lador1']) && isset($_REQUEST['lador2'])){
            $lador1 = $_REQUEST['lador1'];
            $lador2 = $_REQUEST['lador2'];
            $per=$lador2*2+$lador1*2;
            $area=$lador1*$lador2;
            print "Perimetro del rectangulo= " .$per;
            echo "<br>";
            print "Area del rectangulo= " .$area;
            
        }
        if(isset($_REQUEST['ladot1']) && isset($_REQUEST['ladot2'])&& isset($_REQUEST['ladot3'])){
            $ladot1 = $_REQUEST['ladot1'];
            $ladot2 = $_REQUEST['ladot2'];
            $ladot3 = $_REQUEST['ladot3'];
            if($ladot1+$ladot2>$ladot3&&$ladot1+$ladot3>$ladot2&&$ladot3+$ladot2>$ladot1)
            {
                $per=$ladot2+$ladot1+$ladot3;
                $s=$per/2;
                $area=sqrt($s*($s-$ladot1)*($s-$ladot2)*($s-$ladot3));
                print "Perimetro del Triangulo= " .$per;
                echo "<br>";
                print "Area del Triangulo= " .$area;
            }
            else
            {
                echo "No forma un triangulo";
            }
            
        }
        if(!$verdad)
        {
            echo "Ingrese valor ";
        }
        
    ?>
            
            </div>

        </div>
    </div>
    <hr>
    <div class="flex-container">
        <div>
            <form action="figuras.php" method="post">
            <input class="button button1" type="submit" value="Regresar">
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