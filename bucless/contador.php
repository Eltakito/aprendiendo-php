<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Media</title>
</head>
<body>
    <h2>Calcular Media de Números Positivos</h2>
    <form method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" min="0" step="any">
        <input type="submit" value="Agregar">
    </form>

    <?php
    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        if($numero >= 0) {
            //PHP mantiene un seguimiento de la suma total de los elementos ingresados y el contador
            session_start();
            if(!isset($_SESSION['sum'])) {
                $_SESSION['sum'] = 0;
                $_SESSION['contador'] = 0;
            }
            $_SESSION['sum'] += $numero;
            $_SESSION['contador']++;
        } else {
            echo "<p>¡Número negativo! El cálculo de la media ha terminado.</p>";
        }
    }

    if(isset($_SESSION['sum']) && $_SESSION['contador'] > 0) {
        $media = $_SESSION['sum'] / $_SESSION['contador'];
        echo "<p>La media de los números ingresados es: " . $media . "</p>";
    }
    ?>
</body>
</html>
