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

    // Ejemplo:

    if ($a > $b) {
        echo "a es mayor que b";
    }

    // else if 
    /*Permite extiender una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como false.*/

    // Ejemplo:

    if ($a > $b) {
        echo "a es mayor que b";
    } elseif ($a == $b) {
        echo "a es igual que b"
    }


    // while

    /*El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas, tanto como la expresión while se evalúe como true. El valor de la expresión es verificado cada vez al inicio del bucle, por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, la ejecución no se detendrá hasta el final de la iteración.*/

    // Ejemplo:

    $i = 1;
    while ($i <= 10) {
        echo $i++;  /* el valor presentado sería
                    $i antes del incremento
                    (post-incremento) */}



    // do-while

    /*Los bucles do-while son muy similares a los bucles while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar que al principio. La diferencia principal con los bucles while es que está garantizado que corra la primera iteración de un bucle do-while (la expresión verdadera sólo es verificada al final de la iteración)*/

    // Ejemplo: 

    $i = 0;
    do {
        echo $i;
    } while ($i > 0);


    // for

    /* Permite repetir una instrucción o una instrucción compuesta un número especificado de veces. El cuerpo de una instrucción for se ejecuta cero o más veces hasta que una condición opcional sea false*/
    
    //Ejemplo:

    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    
    // require

    /* require es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.*/

    // Ejemplo


    // Fichero saludar.php
    function saludar($nombre, $mensaje) { 
        return "{$nombre}, {$mensaje}!";
        } 

    // Incluimos el fichero saludar.php
        require'saludar.php';

    // Impriminos el saludo a travez de una función que esta dentro del fichero saludar
        echo saludar('Ricardo Gareca', 'Buenas Dias');



    // include 

    /*Permite incluir el contenido de un archivo externo dentro de otro archivo*/

    // Ejemplo

    // FIchero saludar.php
    function saludar($nombre, $mensaje) {
        return "{$nombre}, {$mensaje}!";
    }

    // Incluimos el fichero saludar.php
    include 'saludar.php';

    // Impriminos el saludo a travez de una función que esta dentro del fichero saludar
    echo saludar('Ricardo Gareca', 'Buenas Dias');


    // switch 

    /*La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch. */

    // Ejemplo:

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

    ?>
    
</body>
</html>