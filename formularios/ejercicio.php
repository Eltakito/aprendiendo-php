
<?php
/*Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas.
Se pagarán 12 euros por hora.
*/
if(isset($_GET['a'])){
    $salario=$_GET['a'];
    echo "Sus horas trabajadas es:" .$salario;
}else{
    print "Nada aun.....";
}

