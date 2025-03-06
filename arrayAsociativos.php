<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // las posiciones por string tambien puede ser numerica pero eso no es muy común

    $Navegadores = array("navegador1" => "chrome", "navegador2" => "firefox", "navegador3" => "safire");
    $datos = array("nombre" => "luisa", "edad" => 39, "profesor" => true);
    
    echo "navegador 3 es " . $Navegadores["navegador3"];
    echo "<br>";
    echo ("nombre es ") . $datos["nombre"];
    echo "<br>";
    
    ?>
</body>
</html>