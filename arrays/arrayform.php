<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        //inicializa las variables
        $n = $_GET['n'];
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];
        //si las variables no existen las inicializa
            if (!isset($n)) {
            $contadorNumeros = 0;
            $numeroTexto = "";
            }
            //verifica si ya se han mandado 6 numeros al formulario
            if ($contadorNumeros == 6) {
                $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
                $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
                // espacios de la cadena
                $numero = explode(" ", $numeroTexto);
                echo "Los números introducidos son: ";
                    foreach ($numero as $n) {
                    echo $n, " ";
                    }
                }
            // Pide número y añade el actual a la cadena
            if (($contadorNumeros < 6) || (!isset($n))) {
            ?>
            <form action="#" method="get">
            Introduzca un número:
            <input type="number" name ="n" autofocus>
            <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
            <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
            <input type="submit" value="OK">
            </form>
            <?php
            }
    ?>
            
    ?>
</body>
</html>
    