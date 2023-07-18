<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUCTURAS DE CONTROL</title>
</head>
<body>
    <h1>ESTRUCTURAS DE CONTROL</h1>

    <?php

    // if

    /*Permiten ingresar un mensaje específico en su anuncio de texto cuando se cumple una determinada condición y un texto predeterminado cuando esta condición no se cumple*/



    echo "<b><h1>IF</h1></b>";

    // Ejemplo:

    if ($a > $b) {
        echo "a es mayor que b";
    }

    // Ejemplos profesor

    $color = "rojo";
    if ($color = "rojo"){
        print("Efectivamente, el color es rojo");
    }

    echo "<br>";
    $x = 10;
    $y = 15;
    
    if( $x == $y){
        print("X e Y son iguales");
    }


    elseif($x > $y)
    {
        print("x es mayor que y");
    }

    elseif($x < $y)
    {
        print("x es menor que y");
    }

    // else if 
    /*Permite extiender una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como false.*/

    // Ejemplo:
    echo "<br>";
    if ($a > $b) {
        echo "a es mayor que b";
    } elseif ($a == $b) {
        echo "a es igual que b";
    }
    
    // while

    /*El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas, tanto como la expresión while se evalúe como true. El valor de la expresión es verificado cada vez al inicio del bucle, por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, la ejecución no se detendrá hasta el final de la iteración.*/


    echo "<b><h1>WHILE</h1></b>";


    // Ejemplo:
    echo "<br>";
    $i = 1;
    while ($i <= 10) {
        echo $i++;  /* el valor presentado sería
                    $i antes del incremento
                    (post-incremento) */}

    // Ejemplos profesor



    echo "<br>";
    $x = 10;
    while (--$x){
        print ('Número:'. $x);
        echo "<br>";
        echo "<br>";

    }


    // do-while

    /*Los bucles do-while son muy similares a los bucles while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar que al principio. La diferencia principal con los bucles while es que está garantizado que corra la primera iteración de un bucle do-while (la expresión verdadera sólo es verificada al final de la iteración)*/



    // Ejemplo: 

    $i = 0;
    do {
        echo $i;
    } while ($i > 0);


    // Ejemplo Profeor
    echo "<b><h1>DO-WHILE</h1></b>";


    // for

    /* Permite repetir una instrucción o una instrucción compuesta un número especificado de veces. El cuerpo de una instrucción for se ejecuta cero o más veces hasta que una condición opcional sea false*/
    
    
    //Ejemplo:

    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }

    // Ejemplo Profesor

    echo "<b><h1>FOR</h1></b>";

    for ($x = 5; $x <= 10; $x++) {
        print("Número:". $x . "<br>");
    }


    // require

    /* require es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.*/


    // Ejemplo


    /* Fichero saludar.php
    function saludar($nombre, $mensaje) { 
        return "{$nombre}, {$mensaje}!";
    } 

    // Incluimos el fichero saludar.php
    require 'saludar.php';

    // Impriminos el saludo a travez de una función que esta dentro del fichero saludar
    echo saludar('Ricardo Gareca', 'Buenas Dias');*/


    // include 

    /*Permite incluir el contenido de un archivo externo dentro de otro archivo*/


    // Ejemplo

    /* Fichero saludar.php
    function saludar($nombre, $mensaje) {
        return "{$nombre}, {$mensaje}!";
    }

    // Incluimos el fichero saludar.php
    include 'saludar.php';

    // Impriminos el saludo a travez de una función que esta dentro del fichero saludar
    echo saludar('Ricardo Gareca', 'Buenas Dias');*/

    // Ejemplo profesor de INCLUDE Y REQUIRE

    echo "<b><h1>REQUIRE Y INCLUDE</h1></b>";

    include ("Variables.php");
    echo "<br>";
    print("$x"."$z"."$y");

    // switch 

    /*La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch. */

    // Ejemplo:

    echo "<b><h1>SWITCH</h1></b>";

    switch ($i) {
        case 0:
            echo "i es igual a 0";
            break;
        case 1:
            echo "i es igual a 1";
            break;
        case 2:
            echo "i es igual a 2";
            break;
    }



     // Ejemplo profesor 
     $color = "negro";
     switch ($color){
        case "blanco":
            $sector = "claro";
            break;
        case "naranja":
            $sector = "normal";
            break;
        case "negro":
            $sector =  "oscuro";
            break;
     }

     print($sector)
    

    ?>
    
</body>
</html>