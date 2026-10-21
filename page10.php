<?php 
// Venda com Imposto
// Bruno comprou 5 produtos a R$ 100 cada com imposto de 8%.

// Variáveis: $produto = 5; $precoProduto = 100; $imposto = 8;
// Tarefa: Calcule valor total, imposto e total a pagar.


$produto = 5; 
$precoProduto = 100; 
$imposto = 8;

$preco_sem_imposto = $produto * $precoProduto;
$valor_imposto = 500 * 8 /100;
$preco_com_imposto = $preco_sem_imposto + $preco_com_imposto;

echo "o valor total da compra sem o imposto é ".number_format($preco_sem_imposto,2,",",".") ."<br>";
echo "o valor do imposto é {$valor_imposto}<br>";
echo "o valor total com imposto é".number_format($preco_com_imposto,2,",",".")."<br>";
?>