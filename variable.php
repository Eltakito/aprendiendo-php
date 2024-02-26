<?php
// for($j=9;$j>0;$j--){
//     for($i=0;$i<$j;$i++){
//         print "*";

//     }
//     print "<br>";
// }
$k=0;
$altura=5;

for ($fila = 0; $fila < $altura; $fila++) {
    // Imprimir espacios en blanco para centrar la fila
    for ($espacios = 0; $espacios < ($altura - $fila - 1); $espacios++) {
        echo "&nbsp;";
    }
    // Imprimir asteriscos
    for ($asteriscos = 0; $asteriscos < (2 * $fila + 1); $asteriscos++) {
        echo "*";
    }
    
    echo "<br>";
}


?>