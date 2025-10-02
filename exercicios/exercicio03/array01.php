<?php 
$array01 = array(1 => "a", 2 => "b", 3 => "c");
$array02 = [1 => "a", 2 => "b", 3 => "c"];

echo "<pre>";
print_r($array01);
print_r($array02);  

$arrayString01 = ["test" => 1, 3 => "b", 4 => "c", 1 => "a"];

var_dump($arrayString01);

$array03 = [1,2,3,3 => "a",7,8,4 => "b", "teste" => 9, 10];

print_r($array03);

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
?>