
<form method="POST">
    <input type="text" id="numero" name="numero">
    <input type="submit" name="submit" value="Enviar">
</form>


<?php
session_start();

if(isset($_POST['numero'])){
    $numero = $_POST['numero'];

    for($i=0;$i<=12;$i++){
        echo "Multiplicar " .$i ." por ". $numero." nos da : " . $i*$numero."<br>";
    }  
}


 
   
?>