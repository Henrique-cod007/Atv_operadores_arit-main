<?php
// Percentual de Desconto
// Um produto custa R$ 250 e o cliente tem 15% de desconto.
// Variáveis: $preco = 250; $desconto = 15;
// Tarefa: Calcule o valor do desconto e o preço final.


$preco = 250;
$desconto = 15;

$valorDesconto = $preco * ($desconto / 100);
$precoFinal = $preco - $valorDesconto;

echo "Valor do desconto: R$ " . $valorDesconto . "<br>";
echo "Preço final: R$  {$precoFinal}";
?>