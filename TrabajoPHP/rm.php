<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <?php
        if(isset($_REQUEST['numero'])){
            $num = $_REQUEST['numero'];

            for($contador=1;$contador<=20;$contador++){
                $total = $num * $contador;
                print $num. "*".$contador."=".$total."<br>"; 
            }
        }else{
            print "<h2>Ingrese un numero</h2>";
        }
    ?>
</body>

</html>