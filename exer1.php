<?php

for ($i = 20; $i < 71; $i++) {
    if ($i % 2 == 0) {
        $par += $i;
    } else {
        $imp += $i;
    }
}

echo ("Par: " . $par);

echo ("<br>Ímpar: " . $imp);
