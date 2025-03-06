## Tipo de datos

### Tipo de datos escalares

Son los que mas se aproximan al uso cotidiano

* Integer
  * Numero Entero
  * Decimal,Octal,Hexadecimal,Binario

* Float
  * Numero real
  * Enteros,racionales,irracionales

OJO los decimales se interpreta con un punt

### Tipo de datos escalares

* String
  * Serie de caracteres
  
* Boolean
  * True o False
  * Con un echo devuelve 0 o 1 y para que me devuelva un TRUE O FALSE se tiene que configurar con un json_encode()
  
## Tipo de datos Compuestos

* Array
  * Vector,matriz
  * Conjunto de valores que se almacenan juntos
  * Accesible por su posicion(clave-valor)
* Object
  * Instancia de una clase
  * Ente con propiedades

## Variables

Espacio de memoria donde se puede almacenar una información

* Contiene informacion
* Puede Cambiar su valor
* No usar palabras reselvadas
  
```php

//Variables

$edad = 39;
$estatura = 1.67;
$nombre = "Andrews Dos Ramos";
$frase = " $nombre tiene $edad años";
// esto no cojeria el contenido de la variable
$frases = ' $nombre tiene $edad años' 
$profesor = TRUE;
echo $edad;
echo "<br>"; // esto seria un salto de linea
echo $estatura;
echo "Tu nombre es" . $nombre; // esto lo que hace es concatenar
echo json_encode($profesor); //si no colocas el json_encode no lo muestra

```
## Ambitos de una variable

Es el alcance que puede tener una variable

* Global
  * Fuera de una funcion
* Local
  * A una funcion

Una variable puede pasar de global a Local y en el sentido contrario 

```php
<?php
// $num = 22;
// function prueba(){
//     echo $num;
// }
// prueba();
// esto deberia dar error porque la variable es de tipo global

  // function prueba(){
  //   $valor = 10
  // }
  // echo $valor
// esto en este caso tambien da error porque pasa el mismo caso que el anterior

  $valor1 = 10;
  $valor2 = 20;

  function prueba(){
    global $valor1, $valor2; // convertimos la variables a globales
    $valor3 = $valor1 + $valor2; // hacemos la operacion
    echo $valor3 // mostramos por pantalla
  }
  prueba();
  // En este caso si seria valido
?>
```
## Variables Predefinidas

* Ya definidas por el lenguaje
* Algunas superglobales disponibles en todos los ambitos
  
  Ejemplo
  
  ```php
  <?php
  //Predefinidas
    $numero = 22;
    echo "Esta es mi servidor" . $_SERVER['SERVER_NAME'];
    echo "Este es mi software" . $_SERVER['SERVER_SOFTWARE'];
    echo "este es mi puerto" . $_SERVER['SERVER_PORT'];

    echo "La variable numero es" $GLOBALS['numero']
  ?>

## CONSTANTE

* no varia su valor
* Por convenio siempre tiene que estar en maysculas 
* se declara con la palabra reselvada cons

  ```php
  <?php
  const PI = 3.141592;
  echo PI;

  // La otra forma para definir constante es

  define("NOMBRE", "LUISA");
  echo NOMBRE;
  ?>

## Paso de variables por url

* Pasar variableas a otra pagina
* Pertenece al protocolo HTTP

[paso de variable](img\image.png)

aqui tenemos un ejemplo

  ```php
    // esto estaria en una de nuestra pagina y en estino php lo recibiriamos
    <a href="destino.php?nombre=Luis&cargo=Profesor">Pasar las variables</a>
  ```
  ```php
    // esto estaria en el body de nuestra pagina html detino.php
    Nombre : <?php echo $_GET['nombre']?>
    <br>
    Cargo : <?php echo $_GET['cargo']?>
  ```
## Arrays conceptos

* Array
  * Vector, matriz
  * conjunto de valores agrupado
  * Accesible por su posicion (clave - valor)

* Creacion
  * Constructor array()
  * sistaxis corta con corchetes[]
  * clave opcional
    * puede ser integer o string

  Ejemplo
  ```php
    <?php

    // Estos serian array Indexados que va por integer.

    // INSTANCIAS
    
    $dia = array("Lunes","Martes","Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
    $numeros = array(10,20,30,40);
    $nombres = array(10); // esto no genera un array con el elemento 10 sin que genera el array con 10 elementos
    $valores = [10,20,30,40,50]; // asi seria como declararlo rapido 
    
    // con la funcion var_dump Puedes sacar todo el contenido  del array

    echo $dia[1]; // sacariamos la posicion Martes
    echo "<br>"; // espacio de linea
    echo var_dump($dia); // var_dump($dia) es una funcion que muestra todo el contenido del array
    echo "<br>";
    ?>

# Arrays Asociativos

* Arrays cuyos keys son String personalizados
* los Strings son CaseSensitive
* Aconsejable el uso de comillas

## Operadores arittméticos de asignacion y comparación

|  nombres    |   operador  |   operacion  |
|-------------|-------------|--------------|
|    Suma     |      +      |   $a + $b    |
|    Resta    |      -      |   $a - $b    |
|   Divicion  |      /      |   $a / $b    |
| Multiplicacion|    *      |   $a * $b    |
|    Modulo   |      %      |   $a % $b    |
|  exponente  |      **     |   $a ** $b   |


## Operadores de asignación

El operando de la izquierda se establece con el valor de la derecha 

* vasico el símbolo =

|  Expresión abreviada |Operador de asignacion|
|----------------------|----------------------|
|         a+=b         |      a = a + b       |
|         a-=b         |      a = a - b       |
|         a*=b         |      a = a * b       |
|         a/=b         |      a = a / b       |
|         a%=b         |      a = a % b       |

## Operadores de comparacion

* compara dos valores 
* devuelve True/False
* identico
  * igual y del mismo tipo

* ==
* ===   compara el contenido y el tipo de variables
* !=
* <>
* !==
* >
* <
* >=
* <=

Ejemplo

  ```php
  <?php
  $numero1 = 5;
  $numero2 = 10;
  $numero3 = 5;
  $valor = "5"
  if ($numero1 === $valor1){
    echo "los valores numero1 y valor1 son identico"
  }
  if ($numero1 !== $valor1){
    echo "los valores numero1 y valor1 no son identicos"
  }
  ?>
  ```

## Operadores de incremento y descremento, logicos y String

En estos operadores tenemos de dos tipos 

* Pre-incremento
  * Incrementa y devuelve el valor
* post-incremento
  * Devuelve el valor e incrementa
  
  ++$a Esto seria Pres
  $a++ Esto seria Post
  --$a
  $a--

## Operadores logicos

* Comprueba una o varias condiciones
* Devuelve True/False
  
  $a and $b
  $a or $b
  $a xor $b esto solo se cumple cuando uno solo es true
  !$a

## Concatenar String

* Se concatena con el .
  
  ejemplo

  echo "hola " . "juan";
