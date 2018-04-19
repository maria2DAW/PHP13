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
        
        <h1>Funciones con parámetro por referencia</h1>
        
        <?php  
        
        /*Parámetros por valor y por referencia

         * -Paso de parámetro por valor (por defecto en PHP es así):
         * 
         * function ejemplo($param)
         * {         
         *      $param++;
         * }
         * 
         * -Paso de parámetro por referencia
         * 
         * function ejemplo (&$param)
         * {
         *      $param++;
         * }         
         */
        
        function incrementa($valor1)
        {
            $valor1++;
            
            return $valor1;
        }
        
        echo incrementa(5);
        
        echo "<br /><br />";
        
        $numero = 5;
        
        echo incrementa($numero)."<br />";
        
        echo $numero;
        
        function incrementaReferencia(&$valor2) //Colocamos "&" delante del parámetro para indicar que es por referencia
        {
            //Con los valores por referencia se crea una conexión con los cambios de la 
            //variable en el exterior de la función
            $valor2++;
            
            return $valor2;
        }
        
        $numero2 = 5;
        
        echo "<br /><br />";
        
        //En la llamada a una función con parámetros por referencia,
        //sólo se le puede pasar por parámetro una variable ya definida, en este caso "$numero2".
        echo incrementaReferencia($numero2);
        
        echo "<br /><br />";
        
        echo $numero2;
        
        echo "<br /><br />";
        
        function cambia_mayus(&$param)
        {
            $param = strtolower($param);
            
            $param = ucwords($param);
            
            return $param;
        }
        
        $cadena = "hOlA mUnDo";
        
        echo cambia_mayus($cadena);
        
        echo "<br /><br />";
        
        echo $cadena;
        
        ?>
    </body>
</html>
