<?php
// Um mercado possui dois tipos de produtos no estoque:
// • 15 caixas de leite
// • 20 pacotes de biscoito
// Queremos realizar três cálculos simples:
// 1. O total de produtos no estoque (leite + biscoito)
// 2. A diferença entre a quantidade de biscoitos e a de leite (quanto um tem a mais
// que o outro)
// 3. Quantas vezes a quantidade do produto com menor estoque cabe dentro do
// estoque do outro produto (divisão inteira)

$caixa_leite = 15;
$pacotes_biscoitos = 20;

$total_produtos = $caixa_leite + $pacotes_biscoitos;

$diferenca_QTDprodutos = $pacotes_biscoitos - $caixa_leite;

$cabe_dentro = (int)($pacotes_biscoitos /$caixa_leite);

echo "o total de produtos é {$total_produtos}<br>";

echo "existe {$diferenca_QTDprodutos} pacotes de biscoitos a mais que caixa de leite<br>";

echo "{$cabe_dentro}x";

?>