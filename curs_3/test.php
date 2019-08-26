<?php

$a = 1;

$b = 3;

// > < >= <= == === != !== || &&
/*
if($a > 2) {
    echo 1;
} else if ($a > $b) {
    echo 2;
} else {
    echo 3;
}
*/

//bucla while
/*
$i = 1;

while($i < 10){
    echo $i;
    $i++;
}
*/

/*
for ($i = 1; $i < 10; $i++) {
    echo $i.'<br>';
}

*/

$lista = array(3, 7, 2, 10);

foreach($lista as $k => $v){
    echo $k.'|'.$v.'<br>';
}