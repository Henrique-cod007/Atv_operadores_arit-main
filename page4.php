<?php
// Ana comprou produtos no valor de R$ 800 com 10% de desconto.
// Variáveis: $valorCompra = 800; $desconto = 10;
// Tarefa: Calcule o valor do desconto e o valor final.


$precoProduto = 800;

$descontoProduto = $precoProduto-($precoProduto * (10/100));

echo "O valor final do produto de {$precoProduto} com o desconto ficara {$descontoProduto}<br>";
?>