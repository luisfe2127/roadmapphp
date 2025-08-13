<?php 
// Passar valores como parâmetros

    function media($n1,$n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
    }
     $n1 = 35;  $n2 = 10; $n3 = 4;

     $resultado = number_format(media($n1, $n2, $n3), 1, ',', '.');
     echo "A média é: " . $resultado . "</br></br>";

//Retorno de função

     function gerarNome($primeiro, $ultimo) {
        return "$primeiro $ultimo";
     }

     $nome = gerarNome("João", "Silva");
     echo "O nome completo é: " . $nome . "</br></br>";

//Arrays associativos para armazenar estado

     function processar(array $dados) {
        $dados['total'] = $dados['a'] + $dados['b'];
        return $dados;
     }

    $info = ['a' => 1, 'b' => 5];
    $info = processar($info);
    echo "Total: " . $info['total'] . "</br></br>";

//Orientação a Objetos (OOP)
    class calculadora {
        public function somar($a, $b) {
        return $a + $b;
        }
    }

    $calc = new calculadora();
    $resultado = $calc->somar(10, 20);
    echo "Resultado da soma: " . $resultado . "</br></br>";

    $anon = "Claudiolfino";

   $result = static function () use ($anon) {
    echo "Bom dia " . $anon;
   };

    echo $result();
     
?>