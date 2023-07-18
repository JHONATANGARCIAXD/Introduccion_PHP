<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES</title>
</head>
<body>
    <h1>OPERADORES</h1>

    <?php
    

    //Operadores Aritméticos

    /*
        NOMBRE            |EJEMPLO | Ejemplo con $a = 8 y $b = 4
        Suma              $a + $b    12
        Resta             $a - $b    4
        Multiplicación    $a * $b    32
        Division          $a / $b    2
        Resto o módulo    $a % $b    0
        Incremento         ++ 
        Decremento         **
    */
    $a = 8;
    $b = 4;
    echo "<h1>OPERADORES ARITMETICOS</h1>";
    $Suma = $a + $b;
    echo "La suma de 8 + 4 es:", $Suma;
    echo "<br>";
    $Resta = $a - $b;
    echo "La resta 8-4 es:",$Resta;

    // Ejemplos del profesor

    $x = 9;
    echo "<br>";
    echo ("x =" .$x."<br>");
    $y = 3;
    echo ("x =" .$y."<br>");
    $z = 5;
    echo ("x =" .$z."<br>");

    $Suma = $x + $y;
    echo ("Suma =" .$Suma."<br>");
    $Resta = $x - $z;
    echo ("Resta =" .$Resta."<br>");
    $multiplicacion = $Suma * $Resta;
    echo ("Multiplicacion =" .$multiplicacion."<br>");
    $Final = $multiplicacion;
    echo "El resultado es: ", $Final;
    echo "<br>";
    echo "<br>";




    //Operadores de comparación

    /*
        NOMBRE                                     | EJEMPLO CON $a = 8 y $b = 4     | RESULTADO
        Mayor que                                  $a > $b                           $a es mayor que $b, false en caso contrario
        Menor que                                  $a < $b                           $b es menor que $b, false en caso contrario
        Mayor o igual que                          $a >= $b                          true si $a es mayor o igual que $b, false en caso contrario
        Menor o igual que                          $a <= $b                          true si $a es menor o igual que $b, false en caso contrario
        Diferente                                  $a <> $b o $a != $b               true si $a es diferente a $b, false en caso contrario
        Idéntico o estrictamente igual             $a === $b                         true si $a es igual a $b y son del mismo tipo, false en caso contrario
        No idéntico o estrictamente distinto       $a ¡== $b                         true si $a no es igual a $b o no son del mismo tipo, false en caso contrario
        Igual                                      $a == $b                          true si $a es igual a $b, false en caso contrario

    */

    echo "<h1>OPERADORES DE COMPARACION</h1>";
    // Ejemplo Profesor
    $x = 5;
    $z = 4;
    echo ($x == $z);
    echo ($x <= $z);

    $a = 8;
    $b = 5;


    if ($a > $b){
        echo "8 es mayor que 4";
    }

    echo "<br>";

    if ($a != $b){
        echo "8 y 4 son números diferentes";
    }

    
    //Operadores lógicos

    /*
        NOMBRE    | EJEMPLO  | RESULTADO 
        and ó &&   $a and $b  true si $a es true y $b es true, false en caso contrario
        or  ó ||   $a or $b   true si $a o $b es true, o ambos,false en caso contrario
        xor        $a xor $b  true si $a o $b es true, pero no ambos, false en caso contrario
        not ó !    !$a        true si $a no es true, false en caso contrario
    */ 



    echo "<h1>OPERADORES Lógicos</h1>";

    $a = 4;
    $b = 4;

    if ($a and $b  == 4){
        echo "4 y 4 Son número iguales";
    }
    

    // Ejemplo Profesor

    $x = 4;
    $y = 5;
 
    if (($x == 4) && ($y == 5))
    {
        print("Estas en lo correcto");
    }
     
    echo "<br>";
 
    if (($x == 4) or ($y == 3)){
        print("La segunda operacion tambien es correcta");
    }
 
 

   

    


    //Operadores de unión de cadenas
    
    /*Unir textos o cadenas en programación se conoce como CONCATENAR, y es muy sencillo. Para esta tarea siempre utilizaremos el operador punto. */
    
    echo "<h1>OPERADORES DE UNIÓN DE CADENAS</h1>";
    $t = "Ejemplo ";
    $w = 'Unión ';
    $x = "De ";
    $y = "Cadenas ";
    $z= ''; 
    $resultado1 = $t;
    $resultado2 = $t . $z . $x . $z . $w . $z . $x . $z . $y;
    echo "<b><h1>" ;
    echo $resultado1;
    echo "<hr>";
    echo $resultado2;
    echo "</b></h1>";





    $var1 = 'texto parte 1 ';
    $var2 = 'texto parte 2 ';
    $texto_completo = $var1 . $var2;
    echo "<br>";
    echo $texto_completo;
    

    /*El resultado de ejecutar este código sería:

    texto parte 1texto parte 2*/


    /*Ejemplo de concatenar números y variables:*/

    $var1 = 'No hay límites en las concatenaciones';
    $var = 2;
    $resultado = $var1 . ' observa como concateno ' . $var . ' números: ' . 3 . 4;
    echo "<br>";
    echo $resultado;

    /*El resultado de este ejercicio sería:

    No hay límites en las concatenaciones observa como concateno 2 números: 34*/



    // Concatenar valor a una variable

    $texto = 'Bienvenido a este tutorial';
    $texto2 = ' para aprender a unir textos en PHP';
    echo "<br>";
    $texto = $texto . $texto2;

    // o tambien:

    $texto = 'Bienvenido a este tutorial';
    $texto2 = ' para aprender a unir textos en PHP';
    echo "<br>";
    $texto .= $texto2 ;


    ?>

    









</body>
</html>