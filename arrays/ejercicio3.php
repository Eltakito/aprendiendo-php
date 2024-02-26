// tarea antes de dormir
<?php
session_start();

// Inicialización para guardar las variables
if(isset($_GET['number'])){
    if(!isset($_SESSION['numbers'])){
        $_SESSION['numbers']=[];
    }
    $_SESSION['numbers'][]=$_GET['number'];
}

// Mostrar los números ingresados cuando se han ingresado tres números
if(isset($_SESSION['numbers']) && count($_SESSION['numbers']) == 3){
    foreach($_SESSION['numbers'] as $number){
        echo $number . "<br>";
    }
    session_unset();
    session_destroy();
}
?>
<form method="GET">
    <input type="number" name="number">
    <input type="submit" value="ok">
</form>
