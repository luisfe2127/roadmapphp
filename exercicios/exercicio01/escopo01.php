<?php 
// Escopo Global

$nome = "Slan";

// function sobrenome() {
//     $nome + "Silva";

//     return $nome;
// };

echo $nome . "</br></br>";

$nome2 = "Muyamoto";
$sobrenome = "Takezo";

function sobrenome() {
    global $nome2, $sobrenome;

    return $nome2 . " " . $sobrenome . "</br></br>";  
}

echo sobrenome();

$x = 2;
$y = 5;

function soma() {
    global $x, $y;
    $y = $x + $y;
    
}

echo soma();
echo $y;
?>