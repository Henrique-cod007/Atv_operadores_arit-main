<?php
// Produto custa R$ 500e há imposto de 18%.
// Variáveis: $preco = 500; $imposto = 18;
// Tarefa: Calcule o valor do imposto e o total a pagar.

$preco = 500;
$imposto = 18;

$valorImposto = $preco * ($imposto / 100);
$totalPagar = $preco + $valorImposto;

echo "Valor do imposto é {$valorImposto} <br>";
echo "Total a pagar é R$  {$totalPagar}";
?>