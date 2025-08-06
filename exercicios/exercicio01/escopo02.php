<?php 
function test01() {
    $a = 0;
    echo $a . "</br>";
    $a++;
}

test01();
test01();
test01();

echo "</br>";

function test02() {
    static $a = 0;
    echo $a . "</br>";
    $a++;
}

test02();
test02();
test02();


?>