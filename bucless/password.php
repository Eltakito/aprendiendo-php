<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de contraseña</title>
</head>
<body>
    <form method="POST" action="">
        <label for="passwordIngresada">Ingrese la contraseña:</label><br>
        <input type="password" id="passwordIngresada" name="passwordIngresada"><br><br>
        <input type="submit" name="submit "value="Enviar">
    </form>
</body>
</html>

<?php
/*
--BUCLES FUNDAMENTALES
$i=0;

while($i<=100){
    echo $i;
    $i+=5;
    echo "<br>";
}

do{
    echo $i . "<br>";
    $i+=5;
}while($i<=100);


for( $i=320; $i>=160;$i=$i-20){
    echo $i ."<br>";
}
*/
/*
session_start() se utiliza al comienzo de un script PHP para permitir el
 uso de variables de sesión ($_SESSION) y para garantizar que los datos
  de sesión estén disponibles para su uso en ese script.
*/
session_start();

$password = 1234;

// Verificar si el contador de intentos ya está definido en la sesión
if (!isset($_SESSION['intentos'])) {
    // Si no está definido, inicializarlo
    $_SESSION['intentos'] = 0;
}

// Verificar si el formulario ha sido enviado
if(isset($_POST['passwordIngresada'])) {
    // Obtener la contraseña ingresada
    $passwordIngresada = $_POST['passwordIngresada'];

    // Verificar si la contraseña coincide y el número de intentos es menor o igual a 4
    if ($passwordIngresada == $password && $_SESSION['intentos'] <= 4) {
        echo "La caja fuerte se ha abierto satisfactoriamente";
    } else {
        echo "Lo siento, esta no es la combinación";
        // Incrementar el contador de intentos
        $_SESSION['intentos']++;
    }

    // Verificar si el número de intentos supera el límite
    if ($_SESSION['intentos'] >= 5) {
        echo " Lo siento, se le acabaron los intentos";

    }
}
?>

