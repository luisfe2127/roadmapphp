<?php 
// $idade = 4837389;

// if ($idade < 18) {
//     echo "Menor de idade";
// } elseif ($idade >= 18 && $idade < 65) {
//     echo "Adulto";
// } else {
//     echo "Idoso </br>";
// }

 class Pessoas {
    public $pessoa01 = [
        "nome" => "João",
        "idade" => 25,
    ];

    // public $pessoa02 = [
    //     $nome => "Maria",
    //     $idade => 17,
    // ];
 }

 $obj = new Pessoas();

    if ($obj->pessoa01['idade'] < 18) {
        echo $obj->pessoa01['nome'] . " é menor de idade </br>";
    } else {
        echo $obj->pessoa01['nome'] . " é adulto </br>";
    }
?>