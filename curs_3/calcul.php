<?php


    $x = (int)$_GET['x'];

    if($x > 0){
        $output = '';
        $factorial = 1;
    
        for ($i = 1; $i <= $x; $i++){
    
            $factorial *= $i;
    
        }
    
        $output .= $x.'! = '. $factorial;
    
        echo $output;
    } else {
        echo 'Valoarea introdusa trebuie sa fie numerica si pozitiva!';
    }
//converteste GET de valoare in INT
//is_int verifica tip numeric
//is_numeric verifica tip numeric sau string numeric

