<?php
// Rafael decidiu comprar um carro no valor de R$ 60.000,00.
// Para reduzir o valor das parcelas, ele deu uma entrada de R$ 10.000,00 e
// financiou o restante em 12 vezes.
// • Calcule o valor financiado
// • Em seguida, calcule o valor de cada parcela

$carro = 60000;

$entrada = 10000;

$precoFinal_carro = $carro - $entrada;

$parcela = $precoFinal_carro / 12;

echo "O finaciamento é de {$precoFinal_carro} parcelado em 12 de{$parcela}<br>";
?>