<?php
    function cantidad_caracteres ($texto) {
        return strlen($texto);
    }

    // no entendi muy bien de que forma querian que se realizara la funcion por lo cual hice dos ejemplos
    
    function cantidad_caracteres_2 ($texto) {
        $contador = 0;
        for ($i = 0; isset($texto[$i]); $i++) {
            $contador++;
        }
        return $contador;
    }
?>