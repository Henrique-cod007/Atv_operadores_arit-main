<?php
// Pedro comprou 1 carro a R$ 50.000 e 2 motos a R$ 15.000 cada.
// Variáveis: $carro = 1; $moto = 2; $precoCarro = 50000; $precoMoto = 15000;
// Tarefa: Calcule o valor total da compra e quanto o carro custa a mais que uma moto.

$carro = 1;
$moto = 2; 

$Precocarro = 50000;
$Precomotos = 15000; 

$valortotal_carro = $carro * $Precocarro;

$valortotal_moto = $moto * $Precomotos;

$valorTotal_compras = $valortotal_carro + $valortotal_moto;

$valorTotal_formatado = number_format( $valorTotal_compras,2,".","");


$diferenca = $Precocarro - $Precomotos ;

$dife_formatado = number_format( $diferenca,2,".","");

echo "O valor total da compra  R$ {$valorTotal_formatado}, e o carro custa R$ {$dife_formatado} a mais que uma moto <br>";

?>