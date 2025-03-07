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
  ```
# Arrays Asociativos

* Arrays cuyos keys son String personalizados
* los Strings son CaseSensitive
* Aconsejable el uso de comillas

## Operadores arittméticos de asignacion y comparación

|  nombres    |   operador  |   operacion  |
|-------------|-------------|--------------|
|    Suma     |      +      |   \$a + \$b    |
|    Resta    |      -      |   \$a - \$b    |
|   Divicion  |      /      |   \$a / \$b    |
| Multiplicacion|    *      |   \$a * \$b    |
|    Modulo   |      %      |   \$a % \$b    |
|  exponente  |      **     |   \$a ** \$b   |


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
* \>
* <
* \>=
* <=

Ejemplo
  ```php
  <?php
    $numero1 = 5;
    $numero2 = 10;
    $numero3 = 5;
    $valor = "5";
    if ($numero1 === $valor) {
      echo "los valores numero1 y valor son identicos";
    }
    if ($numero1 !== $valor) {
      echo "los valores numero1 y valor no son identicos";
    }
  ?>
  ```
  
## Operadores de incremento y descremento, logicos y String

En estos operadores tenemos de dos tipos 

* Pre-incremento
  * Incrementa y devuelve el valor
* post-incremento
  * Devuelve el valor e incrementa
  
  ++\$a Esto seria Pres
  \$a++ Esto seria Post
  --\$a
  \$a--

## Operadores logicos

* Comprueba una o varias condiciones
* Devuelve True/False
  
  \$a and \$b
  \$a or \$b
  \$a xor \$b esto solo se cumple cuando uno solo es true
  !\$a

## Concatenar String

* Se concatena con el .
  
  ejemplo

  echo "hola " . "juan";

## Flujo de documento php

* orden de ejecucion
* Por defecto secuencial
  
El flujo seria secuencial

### Tipo de estructura PHP
  * Selección
    * Decidir acciones según la condicion
    * if,else,elseif,switch
  * Iteración
    * repetir accion y generar bucles
    * for,while,do while,foreach
  
  Ejemplos
  ```php
  <?php
  // ESTRUCTURA DE CONTROL DE FLUJO IF
  $nota1 = 2;
  $nota2 = 8;
  $nota3 =  5;
  if ($nota1 >= 5){
      echo "NOTA 1 APROBADA";
  }
  if ($nota2 != 0):
      echo "NOTA 2 DISTINTA DE 0";
  endif;
  if ($nota3 == 5){
      echo "Dentro del primer if";
      if ($nota2 > 9){
        echo "DENTRO DEL SEGUNDO IF";
      }
  if ($nota1 >= 5 && $nota2 >= 5){
        echo "Curso Aprobado";
  }
  }
  ?>
  ```
## Estructura de control de flujo ELSE

* Si no se cumple la condicion del if hace lo otro

  Ejemplo

  ```php
  $edad = 12;
  if ($edad >= 18){
    echo "Mayor de edad";
  } else{
    echo "Menor de edad";
  }

  ```  
  * Operador ternario
  
  ```php
    <?php
    $nota1 = 7;
    // operador ternario
    $final = $nota1 >= 5 ? "aprobado" : "suspenso";
    echo $final
    ?>

  ```
## Estructura de control de flujo ELSEIF / ELSE IF

* Se ejecuta si se cumple una condición

```php

<?php

$valor1 = 2;
$valor2 = 6;
$dia = 4;

// Estructura de control de flujo elif

if ($valor1 > $valor2){
    echo "valor1 es mayor que valor2";
    echo "<br>";
}elseif ($valor1 == $valor2){
    echo "valor1 es igual al valor2";
    echo "<br>";
} else{
    echo "valor1 es menor que valor2"
}
?>
```
## Switch

* Compara la misma variable con muchos valores
*  Como mucho if
  
  ```php
  <?php

  // la variable dia puede contene string con integer
  $dia = 3;
  switch($dia){
    case 1:
    echo "Lunes";
    break;
    case 2:
    echo "Martes";
    break;
    case 3;
    echo "Miercoles";
    break;
    case 4;
    echo "Jueves";
    break;
    case 5;
    echo "Viernes";
    break;
  
  }
  ?>
  ```

## For y forech

* Repite  un conjunto de intrucciones
* Un numero conocido de veces
* Elementos
  * Valor inicial
  * valor final
  * incremento/Descremento
  ```php

  // estructura de control de flujo for y foreach

  $num = 5;
  for($i = 1; $i <= 10; $i++){
    echo $i;
    echo "<br>"
  }
  for ($j = 1; $j >= 1; $j--){
    echo $h;
    echo "<br>";
  }
  // Muestra numeros pares
  for($p = 0; $p <= 10; $p += 2){
    echo $p;
    echo "<br>";
  }
  // tabla de multiplicar del 5
  for($i= 1; $i <= 10; $i++){
    echo $num . "X" . $i . "= " . ($num * $i)
  }
  ```
## FOREACH

* iteracion sobre arrays/objetos
  
Ejemplos

  ```php
  <?php
  $array1 = array(1,2,3,4);
  $valores = array("uno" => 1, "dos" => 2, "tres" => 3);
  foreach($array1 as $valor){
    echo $valor;
    echo "<br>";
  }
  foreach( $valores as $k => $v){
    echo "valores[$k] => $v";
    echo "<br>"
  }
  ?>
  ```
## While 

* Repite un conjunto de instrucciones
* Un numero indeterminado de veces
* Comprueba y luego ejecuta
* Cuidado con los bucles infinitos

Ejemplos

  ```php
  <?php

  // Estructura de control de flujo while

  $num =10;
  $respuesta = "Oporto";
  $intentos = 1;

  while ($num <= 10){
      echo $num;
      echo "<br>";
      $num++;
  }

  while($respuesta !=  "Lisboa"){
      echo "Intento " . $intentos;
      if($intentos == 3){
          $respuesta = "Lisboa";
      }
  }

  ?>
  ```
## DO WHILE

* Repite un conjunto de instrucciones
* Un número ideterminado de veces
* Ejecuta y luego comprueba

Ejemplos
  ```php
  <?php
  $valor = 10;

  while($valor != 10){
    echo "Dentro del while";
  }
  do{
    echo "dentro del do while";
  }while($valor != 10);


  ?>

  ```

## BREAK AND CONTINUE

### Estructura de control de flujo break

* Finaliza la ejecución de la estructura de control
  *  for /forech
  *  while / do while
  *  swich
*  Acepta un algumento
   *  indica  de cuantas estructuras salir

  ```php
    <?php

    // BREAk

    for($i=1;$i <= 10; $i++){
      echo "valor de i: " . $i;
      if ($i == 3){
        break;
      }
    }
    for($j=1;$j <= 10; $j++){
      echo "valor de j: " . $j;
      for($k=1;$k <= 10; $k++){
        echo "valor de j: " . $k;
        if($k == 3){
          // break 2; // si colocars break 2 saldria de los dos bucles 
          break; 
        }
      }
    }
    ?>
   ```

## Estructura de c. de flujo continue
* Finaliza la iteración actual de la estructura de control e inicia uan nueva iteración
*  Acepta un argumento
   *  Indica cuántos niveles de bucles se ha de saltar
  
  ```php
  <?php
  //continue
  for($i=1;$i<=10;$i++){
    if($i == 3){ 
      // con el continue el tres se lo saltaria y no lo imprimiria
      continue;
    }
    echo "Valor de i : " . $i;
  }
  ?>
  ```
## Sentencias Include

* incluye y evalúa el archivo especificado
  * embebe el codigo de un fichero php en otro fichero php
  * si no se encuentra muestra un warning
  * include_once
    * Si el codigo del fichero ya ha sido incluido no se vuelve a incluir
  
Ejemplo 

  ```php
  <?php
  
  echo "soy el primer fichero";
  echo "<br>";
  // esto incluiria en tu codigo lo que posee el include2.php
  // el include lo puedes repetir las veces que quieras en tu codigo
  // si utilizamos en vez de include, utilizamos include_once solo lo incluye una vez
  include "include2.php";
  ?>
  ```
include2.php
  ```php
  <?php
   echo "soy el segundo fichero";
  ?>
  ```
## REQUIERE

* Incluye y evalúa el archivo especificado
  * Embebe el código de un fichero PHP en otro fichero PHP
  * si no se encuentra produce un error fatal
  * require_once
    * Si el codigo del fichero ya ha sido incluido no se vuelve a incluir
  
Ejemplo
  ```php
  <?php
  echo "Soy el primer fichero";
  echo "<br>"
  require "include2.php";
  ?>
  ```
## GOTO
* para saltar a otra sección del código
  * No recomendable
  
## FUNCIONES CONCEPTOS

* Secuencia de ordenes que hacen una tarea especifica de una aplicacion mas grande.
* Puede recibir parámetros y puede devolver un resultado.

* Reutilizacion
* Facil localizar errores
* No duplicar codigo

## FUNCIONES SINTAXIS

* Definicion de una función 

  function nombre_funcion(parametros){
    intrucciones;
    return valor;
  }

* Llamada a una funcion

  nombre_funcion(parametros);
  $resultado = nombre_funcion(parametros);

## Funciones return

* valor de devolver
* cunado consigue el return sale de la funcion

  ```php
  $numero1 = 5;
  $numero2 = 10;

  function sumar(){
      echo "Soy un funcion para sumar";
  }
  sumar();
  function sumarNumeros($num1,$num2){
    echo $num1 + $num2;
  }
  sumarNumeros($numero1, 1);
  
  function sumarNumeroRetorno($num1,$num2){
      return $num1 + $num2;
  }
  $resultado = sumarNumeroRetorno($numero1,$numero2)
  echo $resultado
  ```
## Paso por valor y paso por referencia

* Por valor
  * Si el valor cambia no afecta a la variable original.
  * Se pasa una "copia".
* Por referencia
  * Si el valor cambia afecta a la variable original
  * No aceptado en la llamada de la funcion

Ejemplo

  ```php
  <?php
  
  function miFuncion($num1){
    $num1 = $num1 + 2;
  }

  // esto significa que se va a pasar el valor por referencia
  function otraFuncion(&$num1){
    $num1 = $num1 + 2;
  }
  $num1 = 4;

  miFuncion($num1);
  echo $num1; // Esto mostraria 4 

  otraFuncion($num1);
  echo $num1; // esto mostraria 6
  ?>
  ```

## Funcioens Recursividad

* Funciones que se llaman a si misma durante su propia ejecucion
  
Ejemplo

  ```php
  <?php
    function factorial($n){
      if($n==1){
          return 1;
      }else{
        echo $n . "x";
        return $n * factoria($n-1);
      }
    }
  ?>
  ```
## Funciones de arrays comparar - ARRAY_DIFF()

* Compara un array con uno o mas array
* Develve los valores del  primer array que no esten en ninguno de los otros arrays
  
  ```php
  <?php
    //Funciones para comparar arrays

    $numeros1 = array(11,22,33);
    $numeros2 = array(11,33,55);

    $colores = array("color1" => "rojo", "color2" => "verde", "color3" => "amarillo" );
    $colores2 = array("color1" => "verde", "color2" => "azul", "color3" => "rojo");

    $diferencias1 = array_diff($numero1,$numero2);
    $diferencias2 = array_diff($colores1,$colores2);

    var_dump($diferencias1);
    var_dump($diferencias2);

    var_dump($)
  
  ?>
  ```
## ARRAY_MERGE 

* Permite unir dos arrays

  ```php
  
  <?php
  
      $a1 = array("rojo","verde");
      $a2 = array("azul","amarillo");

      $unido = array_merge($a1,$a2)
  
  
  ?>
  ```

## Ordenar Arrays

### Funciones de arrays ordeenar - sort

* Actua sobre el propio array, no crea uno nuevo
* Ordena por valor de menor a mayor
* Si dos miembrosson iguales su oder sera indefinido
* en orden inverso
  * rsort();

Ejemplos

  ```php
  <?php
  $dias = array("Lunes","Martes","Miercoles","Jueves", "Viernes", "Sabado", "Domingo");

  var_dump($dias);
  echo "<br>"
  // Esto lo ordena por orden alfabetico
  sort($dias);
  var_dump($dias);
  echo "<br>";
  ?>
  ```

### Funcion de arrays ordenar - ASORT 

* Ordena pero mantiene las key

Ejemplos

  ```php
  <?php
  $dias = array("Lunes","Martes","Miercoles","Jueves", "Viernes", "Sabado", "Domingo");

  var_dump($dias);
  echo "<br>"
  // Esto lo ordena por orden alfabetico
  asort($dias);
  var_dump($dias);
  echo "<br>";
  ?>
  ```
  ### Funcion de arrays ordenar - KSORT

   * Ordena por las key
  
  ```php
  <?php
  $numeros = array(10,11,8,103,99,54);
  var_dump($dias);
  echo "<br>";

  ksort($numeros); // esto no cambia si son numeros
  var_dump($dias);
  echo "<br>";
  ?>
  $arrayNombres = array("Javier" => 29, "Patricia" => 28, "Andrews" => 22);
  ksort($arrayNombres);
  var_dump($arrayNombres);
  echo "<br>"
  ```
### Funciones de arrays ordenar - Shuffle()

* Crea un orden aleatorio de los elementos
* Asigna nuevos keys a los elementos

Ejemplo

  ```php
  $numeros = array(10,11,8,103,99,54);
  shuffle($numeros); // te cambia a un orden aleatorio
  var_dump($numeros);
  ```

## Modificar array

### Funcion arrays modificar - Array_Shisft()

* Quita el primer elemento del array y lo devuelve

### Funcion arrays modificar - Array_unshift()

* Añade los elementos pasados al inicio de array
* Devuelve el numero de elementos del array

Ejemplos

  ```php
  <?php
  
  // Funciones para modificar ele array
  $frutas = array("naranja","platano","manzana","frambuesa");
  var_dump($frutas);
  echo "<br>";
  // esto borra el primer elemento y lo devuelve
  $eliminado = array_shift($frutas);
  var_dump($frutas)
  echo "<br>";
  // añadir un elemento al principio del array
  array_unshift($frutas,"pera");

  ?>
  ```

### Funcion arrays modificar - Array_Pop()

  * Quita  el ultimo elemento del array y lo devuelve

## Funcion arrays modificar - Array_Push()

  * Insertar uno o mas elementos al final de array
  * Devuelve el numero de elementos del array

Ejemplos

  ```php
  <?php
  $frutas = array("naranja","platano","manzana","frambuesa");
  var_dump($frutas);
  echo "<br>";
  // esto borra el ultimo elemento y lo devuelve
  $eliminado = array_pop($frutas);
  var_dump($frutas)
  echo "<br>";
  // esto meteria el elemento pera en el array
  array_push($frutas, "pera");
  var_dump($frutas);
  echo "<br>";
  ?>;
  ```
## Funciones interesantes para arrray

### Funcion count()

* Te devuelve la longitud del array

### funcion Reset()

* Rebobina el punter interno de un array al primer elemento
  * Un puntero es como una flecha que apunta a un elemento del array
* las funciones de modificacion como el array_shift y array_pop ejecuntan un reset() despues de su utilizacion

### Funcion current()   
* Devuelve el elemento actual del array

### funcion Array_Search() 
* Busca el elemento del array y te devuelvve su key

### Funcion end()
* Coloca el puntero al ultimo elemento del array

## Fecha y hora

### Funciones fecha y hora conceptos

* Permiten obtener la fecha y la hora del servidor
* Se pueden emplear para dar formato a fechas y horas
* forman parte del nucleo de php
* Su comportamiento depende de php.init
  * latitud y longitud definidos
  * zona horaria

### Funcion date()

* Devuelve una fecha con un formato concreto

Ejemplo
  ```php
  <?php
  echo date("Y");
  echo "<br>"
  echo date("d M y");
  echo "<br>"
  echo date("d/m/Y");
  ?>
  ```
### Funcion getDate()
* Te devuelve un array asociativo con informacion de la fecha y de la hora

Ejemplos
 ```php
  <?php
  //Funcion getDate()
  $hoy = getdate();
  var_dump($hoy);
  if ($hoy["month"] == "May"){
    echo "Mayo";
  }
  ?>
  ```
### Funcion Date_Default_Timezone_get()

* Obtine la zona horaria preterminada
  
### Funcion Date_Default_Timezone_set();

* Puedes definir una zona horaria

## Framework

* Entorno o marco de trabajo
* Provee una metodologia(normas) de trabajo
* Un esquema(patron) para el desarrollo y implementacion de una aplicacion
* No necesario plantearse una estructura de la app, el framework proporciona un equeleto que "rellenar"

### Funciones
* Propocionan bibliotecas de codigo pra funciones de uso comun
* Reduce la cantidad de  codigo original a escribir
* Ayuda al trabajo en equipo

## Ejemplos de framewor

* Laravel
  * Crear complejos sitios y apps web haciendo uso de una estructura ya definida
* Symphony
  * Desarrollar sitios y apps Web con el MVC
* Codeigniter
  * Crear complejos sitios y apps web haciendo uso de una estructura ya definida