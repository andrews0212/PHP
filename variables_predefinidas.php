<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = 22;
    echo "Mi nombre del servidor es " . $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo "Mi puerto es " . $_SERVER['SERVER_PORT'];
    echo "<br>";
    echo "Mi software es " . $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";
    echo "Mi numero " . $GLOBALS['numero'];
    ?>
    
</body>
</html>