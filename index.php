<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Funciones</title>
    </head>
    <body>
        <h1>Funciones predefinidas</h1>
        <?php
        // strtolower --> Convierte todos los caracteres de una cadena en minúsculas
        $palabra = "PALABRA";        
        echo strtolower($palabra);
        
        echo "<br /><br />";
        
        // strtoupper --> Convierte todos los caracteres de una cadena en mayúsculas
        $palabra2 = "otrapalabra";        
        echo strtoupper($palabra2);   
        ?>
        
        <h1>Funciones propias</h1>
        
        <?php
        
        function suma($num1, $num2)
        {
            $resultado = $num1+$num2;
            
            return $resultado;
        }
        
        $suma = suma(5, 7);
        
        echo "La suma de los números 5 y 7 es: ".$suma;
        
        ?>
        
        <h1>Funciones propias con funciones predefinidas</h1>
        
        <?php
        
        function frase_mayus($frase, $conversion=true) //$conversion es un parámetro con valor por defecto
        {
            $frase = strtolower($frase);
            
            if($conversion)
            {
                //ucwords --> Pone la primera letra de cada palabra de una frase en mayúsculas
                $resultado = ucwords($frase);
            }
            
            else
            {
                $resultado = strtoupper($frase);
            }
            
            return $resultado;
        }
        
        echo (frase_mayus("esto es una prueba.", false));
        
        ?>
    </body>
</html>
