<?php
    $personas = array ("Juan"=> 8,"Pérez"=> 15,"Sebastian"=> 5,"Hans"=> 9,"Gabriel"=> 7, "Rocío"=>5);

    $max_age = 0;
    $persona_mayor = "";

    foreach($personas as $nombre => $edad ) {
        if ($edad > $max_age) {
            $max_age = $edad;
            $persona_mayor = $nombre;
        }
    }

    echo "La persona con mayor edad dentro del grupo es: " . $persona_mayor . " con una edad de " . $max_age . " años.";
?>