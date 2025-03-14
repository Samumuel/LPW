<?php

media();

function media()
{
    for ($i = 0; $i < 4; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $c = rand(1, 100);

        $media = ($a + $b + $c) / 3;

        echo ("Número 1: " . $a);
        echo ("<br>Número 2: " . $b);
        echo ("<br>Número 3: " . $c);
        echo ("<br>Média: " . $media);
    }
}
