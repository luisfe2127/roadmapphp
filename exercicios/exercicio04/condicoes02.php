<?php 
$comida = "Fogaça";

function teste() {
    return "Comida não encontrada";
};

$valor = match($comida) {
    "Lasanha" => "R$ 30,00",
    "Pizza" , "Fogaça" => "R$ 25,00",
    "Hambúrguer" => "R$ 20,00",
    default => teste()
};

echo "O valor da $comida é $valor </br>";


?>