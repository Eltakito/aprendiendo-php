<?php
// Verificar si se han enviado los números
if(isset($_GET['numbers']) && is_array($_GET['numbers'])) {
    // Obtener el array de números desde la URL
    $numbers = $_GET['numbers'];

    // Mostrar los números ingresados
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }

    // Encontrar el máximo y el mínimo
    $max = max($numbers);
    $min = min($numbers);

    // Mostrar los números junto con "máximo" y "mínimo"
    foreach ($numbers as $number) {
        echo $number;
        if ($number == $max) {
            echo " máximo";
        } elseif ($number == $min) {
            echo " mínimo";
        }
        echo "<br>";
    }
}
?>