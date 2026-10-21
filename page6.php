<?php
// Lucas foi à feira e comprou:
// • 3 kg de maçã, ao preço de R$ 4,00 o quilo
// • 5 kg de banana, ao preço de R$ 3,00 o quilo
// Calcule o custo total da compra, multiplicando os quilos pelo valor por quilo e
// somando os resultados.

$qtd_maca = 3; //kg 
$qtd_banana = 4; //kg

$Preco_maca = 4; //preço
$preco_banana = 5;//preco

$preco_maca_final = $qtd_maca * $preco_maca;
$preco_banana_final = $qtd_banana * $preco_banana;

$preco_final_compra = $preco_banana_final * $preco_banana_final;

echo "O valor total da compra será de {$preco_final_compra}<br>";

?>