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

?>