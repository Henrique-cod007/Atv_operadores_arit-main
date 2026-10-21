<?php

$camisetas = 3;
$calcas = 2;
$valorCamiseta = 50 ;
$valorCalca = 80;

$valorTototal_camisa = $camisetas * $valorCamiseta ;
$valorTototal_calcas = $calcas * $valorCalca ;

$valorTotal_compras = $valorTototal_camisa + $valorTototal_calcas ;

$resultado = number_format($valorTotal_compras,2,".","");

echo "A compra do João de 3 camisa por R$ 50 e 2 calças por R$ 80 com o valor total de R$ {$resultado}";
?>
