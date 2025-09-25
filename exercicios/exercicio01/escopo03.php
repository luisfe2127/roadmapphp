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

    $anon = "Claudiolfino" . "<br><br>";

   $result = static function () use ($anon) {
    echo "Bom dia " . $anon;
   };

    echo $result();

    function examplefunction($input) {
        $result = (static function () use ($input) {
            static $counter = 0;
            $counter++;

            return "input: $input, counter: $counter" . "<br>";

        });
        return $result();
    }

    echo examplefunction('A');
    echo examplefunction('B');

    function ad() {
        static $v = 0;
        $v++;

        echo $v . "<br>";

        if ($v < 10) {
            ad();
        };

        $v--;
    };

    ad();

    function &get_instance_ref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        $new = new stdClass;
        // Assign a reference to the static variable
        $obj = &$new;
    }
    if (!isset($obj->property)) {
        $obj->property = 1;
    } else {
        $obj->property++;
    }
    return $obj;
}

var_dump(get_instance_ref());
     
echo "<br>";
function &get_instance_noref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        $new = new stdClass;
        // Assign the object to the static variable
        $obj = $new;
    }
    if (!isset($obj->property)) {
        $obj->property = 1;
    } else {
        $obj->property++;
    }
    return $obj;
}

$obj1 = get_instance_ref();
$still_obj1 = get_instance_ref();
echo "\n";
$obj2 = get_instance_noref();
$still_obj2 = get_instance_noref();

var_dump($obj1);
echo "</br>";
var_dump($obj1);
echo "</br>";
var_dump($still_obj1);
echo "</br>";
var_dump($still_obj1);
echo "</br></br></br>";
var_dump($obj2);
echo "</br>";
var_dump($obj2);
echo "</br>";
var_dump($still_obj2);
echo "</br>";
var_dump($still_obj2);
?>