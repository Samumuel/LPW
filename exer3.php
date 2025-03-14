<?php

$retangulos = [];

for ($i = 0; $i < 3; $i++) {
    $retangulo = array(
        'b' => rand(1, 100),
        'h' => rand(1, 100),
    );
    array_push($retangulos, $retangulo);
}

function media($retangulos)
{
    $area = $retangulos["b"] * $retangulos["h"];
    echo ("Base: $retangulos[b] | Altura: $retangulos[h] | Área: $area<br>");
}

foreach ($retangulos as $rt) {
    media($rt);
}
