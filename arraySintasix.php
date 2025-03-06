<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $dia = array("Lunes","Martes","Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
    $numeros = array(10,20,30,40);
    $nombres = array(10); // esto no genera un array con el elemento 10 sin que genera el array con 10 elementos
    $valores = [10,20,30,40,50]; // asi seria como declararlo rapido 
    
    // con la funcion var_dump Puedes sacar todo el contenido  del array
    // ademas este nos devolvera el tipo de dato almacenado

    echo $dia[1];
    echo "<br>";
    echo var_dump($dia);
    echo "<br>";
    ?>

</body>
</html>