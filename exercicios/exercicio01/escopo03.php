<?php 
// Passar valores como parâmetros

    function media($n1,$n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
    }
     $n1 = 35;  $n2 = 10; $n3 = 4;

     $resultado = number_format(media($n1, $n2, $n3), 1, ',', '.');
     echo "A média é: " . $resultado . "</br></br>";
?>