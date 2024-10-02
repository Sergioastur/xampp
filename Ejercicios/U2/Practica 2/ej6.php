<?php
    /*
        Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
        fila y columna del elemento mayor.
    */
    $M = array(
        array(0,0,0,0,0),
        array(0,0,0,0,0),
        array(0,0,0,0,0),
        array(0,0,0,0,0)
    );

    

    for ($i = 0; $i<4; $i++) {
        for ($f = 0; $f<5; $f++) {
            $M[$i][$f] = mt_rand(0, 10);
            
        }
    }
?>