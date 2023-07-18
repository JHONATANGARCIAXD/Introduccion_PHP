<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIABLES Y CONSTANTES</title>
</head>
<body>
    <h1>VARIABLES Y CONSTANTES</h1>
    <!--Script php-->

    <?php

    /*1. La forma de representar las variables en PHP es anteponiendo el simbolo "$" a la palabra que utilizaems como variable. Ejemplo: $edad */
    
    /*2. Debemos prestar atención a las mayúsculas y minúsculas, ya que PHP reconoce la diferencia entre las dos. $valor es diferente de $VALOR  */

    /*3. ¿Para qué se utilizan las variables? Gracias a ellas podemos realizar operaciones aritmeticas y operaciones con cadenas, etc */

    /*4. Las variables las utilizaremos como y cuando queramos en una misma página, ya que no existe limitación en cuanto a su uso */

    /*5. Hay que prestar ateción a no provocar errores por utlizar palabras reservadas por el lenguaje. Ejemplo: $os se genera un error, porque es una variable predefinida.  */

    /*6. Tambien se debe evitar el error de empezar una variable por un número. Ejemplo: $35var = 45 es un error */

    /*7. En PHP no es necesario especificar el tipo de variable, pero si debemos saber cuando utilizar las comillas a la hora de definirlas, ya que su uso indicaria que se esta hablando de una cadena. Ejemplo: $cuenta = 7, $nombre= "nestor */

    /*8. Podemos mostrar las variables en pantalla de varias maneras: una de ellas puede ser utilizando la opción echo(); otra puede ser mediante print(); */


    $a = 5;
    $b = "7";
    
    echo "<b><h1>";
    echo ($a);
    echo "<br>";
    echo ($b);
    echo "</b></h1>";

    //Constantes

    /*La forma de definir una constante es mediante la función "define" */

    /*Sintaxis: define("nombre_variable, "valor_variable") */

    define("capital_colombia","Bogota")
    define("Habitantes", 7000000)

    ?>

</body>
</html>