<?php

for($i=0;$i<20;$i++){
    $numero[$i]=rand(0,100);
}  
//vardump($numero); 
for($i=0;$i<20;$i++){
    $cuadrado=$numero[$i]*$numero[$i];
    $cubo=$cuadrado*$numero[$i];
echo"<table>";
echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
    echo "<tr>";
        echo "<td>" . $numero[$i] . "</td>";
        echo "<td>" . $cuadrado . "</td>";
        echo "<td>" . $cubo . "</td>";
    echo "</tr>";
echo"</table>";
}



?>