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

class foo {
    public static function counter() {
        static $counter = 0;
        $counter++;
        return $counter;
    }
};

var_dump(foo::counter());
var_dump(foo::counter());

function foo(){
    static $int = 0;          // correct 
    static $int = 1+2;        // correct
    //static $int = sqrt(121);  // correct as of PHP 8.3.0

    $int++;
    echo $int;
}

echo foo() . "</br>";
echo foo() . "</br>";
echo foo() . "</br>";

?>

