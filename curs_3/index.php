<form action="index.php">

    X: <input type="text" value="" name="x">
    <br><br>
    <input type="submit" value="Calcul factorial">

</form> 

<?php
if(!empty($_GET['x'])){
    include('calcul.php');
}

if(isset($_GET['pagina'])){
    include('');
}

/*
include(''); -> nu opreste executia codului
include_once(''); -> face verificare de include, merge mai greu
require(''); -> opreste executia codului
require_once('');

*/

?>