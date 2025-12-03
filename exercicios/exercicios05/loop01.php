<?php 

for ($i = 0;$i <= 10; $i++) {
    echo "Número: " . $i . "</br>";
}

$list = ["Maçã", "Banana", "Laranja", "Uva"];

foreach ($list as $item) {
    echo "Item: " . $item . "</br>";
}

class Veiculos {
 public $carro = [
        "Toyota" => [
            "modelos" => [
                ["nome" => "Corolla", "ano" => 2020],
                ["nome" => "Corolla", "ano" => 2021],
                ["nome" => "Corolla", "ano" => 2022],
            ]
        ],

        "Tesla" => [
            "modelos" => [
                ["nome" => "Model 3", "ano" => 2021],
                ["nome" => "Model S", "ano" => 2022],
            ]
        ],
    ];

    public $moto = [
        "Honda" => [
            "modelos" => [
                ["nome" => "Biz", "ano" => 2020],
                ["nome" => "Biz", "ano" => 2021],
                ["nome" => "Biz", "ano" => 2022],
            ]
        ],

        "Yamaha" => [
            "modelos" => [
                ["nome" => "Factor", "ano" => 2021],
                ["nome" => "Fazer", "ano" => 2022],
            ]
        ],
    ];
}

foreach ((new Veiculos())->carro as $marca => $detalhes) {
    echo "Marca: " . $marca . "</br>";
    foreach ($detalhes['modelos'] as $modelo) {
        echo " - Modelo: " . $modelo['nome'] . " Ano: " . $modelo['ano'] . "</br>";
    }
}
?>