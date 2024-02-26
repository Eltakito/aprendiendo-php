
<form method="GET" action="procesar.php">
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <input type="number" name="numbers[]" placeholder="Ingrese el número <?= $i + 1 ?>"><br>
    <?php } ?>
    <input type="submit" value="Enviar">
</form>