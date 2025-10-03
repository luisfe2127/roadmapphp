<?php 
//Example #1 A simple array

$array01 = array(1 => "a", 2 => "b", 3 => "c");
$array02 = [1 => "a", 2 => "b", 3 => "c"];

echo "<pre>";
print_r($array01);
print_r($array02);  

$arrayString01 = ["test" => 1, 3 => "b", 4 => "c", 1 => "a"];

var_dump($arrayString01);

//Example #3 Mixed int and string keys

$array03 = [1,2,3,3 => "a",7,8,4 => "b", "teste" => 9, 10];

print_r($array03);

//Example #8 Accessing array elements

$arrayCar = [
    $car = ["Toyota", "Corolla", "Lamborghini", "Tesla", $modelCar = [2020, 2021, 2022]],
    $scotter = ["Honda", "Biz", "Yamaha", "Dafra", $modelSco = [2020, 2021, 2022]]
];

print_r("\n". "\n" . $car[2]. " " . $modelCar[1]. "\n". "\n");

function arrayFuntion() {
    $name = ["Ana", "Maria", "João", "Pedro"];
    return $name;
};

$array04 = arrayFuntion()[2];
print_r($array04);

$source_array03 = ['GrimmerWolfgang','Johan','Tenma'];

[$first, $second, $third] = $source_array03;

echo "\n". "\n" . $first;

[,,$third] = $source_array03;

echo "\n". "\n" . $third;

//Example #14 Destructuring Associative Arrays

$source_array04 = ['foo' => 1, 'bar' => 2, 'baz' => 3];

// Assign the element at index 'baz' to the variable $three
['baz' => $three] = $source_array04;

echo "\n". "\n" . $three, PHP_EOL;  // prints 3

$source_array04 = ['foo', 'bar', 'baz'];

// Assign the element at index 2 to the variable $baz
[2 => $baz] = $source_array04;

echo "\n". "\n" . $baz, PHP_EOL;    // prints "baz"

$a = 1;
$b = 2;

[$b, $a] = [$a, $b];

echo "\n". "\n" . $a, PHP_EOL;    // prints 2
echo "\n". "\n" . $b, PHP_EOL;    // prints 1
?>