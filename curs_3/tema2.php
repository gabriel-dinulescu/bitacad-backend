<?php
/*
1. Scrieti un script care sa afiseze output-ul 
'1-2-3-4-5-6-7-8-9-10'
*/
function concatMsg() {
    $output = '';
    for($i = 1; $i <= 10; $i++){
        if($i !== 10){
            $output .= $i.'-';
        } else {
            $output .= $i;
        }
    }

    echo $output;
}

concatMsg(); // call the function

/*
2. Să se afișeze toate numerele din urmatorul array care sunt divizibile cu 6.

$numere = array(6, 4, 15, 12, 36, 89, 45);
*/

$array = array(6, 4, 15, 12, 36, 89, 45);

function checkDivision($array){
    $output = 'Divizorii lui 6 sunt: ';
    for($i = 0; $i < count($array); $i++){
        if($array[$i]%6 === 0)  $output .= $array[$i].'-';
    }
    
}
?>