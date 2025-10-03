<?php 
$array01 = array(1,2,3,4,5);
print_r($array01);

foreach($array01 as $i => $value) {
    unset($array01[$i]);
}
print_r($array01);

$array01[] = 6;
print_r($array01);

$array01 = array_values($array01);
$array01[] = 7;
print_r($array01);

//Example #11 Array Destructuring

$source_array = ['foo', 'bar', 'baz'];

[$foo, $bar, $baz] = $source_array;

echo $foo, PHP_EOL;    // prints "foo"
echo $bar, PHP_EOL;    // prints "bar"
echo $baz, PHP_EOL;    // prints "baz"

//Example #12 Array Destructuring in Foreach

$source_array02 = [
    [1, 'Tom'],
    [2, 'Fred'],
    [3, 'Jim'],
];

foreach($source_array02 as [$id, $name]) {
    echo "$id: $name";
}
?>