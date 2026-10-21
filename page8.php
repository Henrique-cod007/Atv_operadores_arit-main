<?php
// Fernanda foi a uma loja e comprou:
// • 2 camisetas por R$ 50,00 cada
// • 3 calças por R$ 80,00 cada
// • 1 jaqueta por R$ 120,00
// A loja estava com uma promoção de 10% de desconto para compras acima de R$
// 300,00.
// • Calcule o valor total da compra sem desconto
// • Verifique se o total ultrapassa R$ 300,00
// • Se sim, aplique 10% de desconto sobre o total
// • Exiba o valor final com desconto, se aplicável

$preco_camisa = 50;
$preco_calsa = 80;
$preco_jaqueta = 120;

$qtd_camisa = 2;
$qtd_calsa = 3;
$qtd_jaqueta = 1;


$valor_total_camisa = $preco_camisa * $qtd_camisa ;
$valor_total_calsa = $preco_calsa * $qtd_calsa ;
$valor_total_jaqueta = $preco_jaqueta * $qtd_jaqueta ;

$valor_total_sem_desconto = $valor_total_camisa + $valor_total_calsa +$valor_total_jaqueta;
$se_passa_300 = $valor_total_sem_desconto - 300;


$desconto_valor_total = $valor_total_sem_desconto - ($valor_total_sem_desconto * 10/100) ;

echo "valor total da compra sem desconto".number_format($valor_total_sem_desconto,2,",",".")."<br>";
echo "o valor da compra ultrapassa {$se_passa_300} de 300<br>";
echo "o valor total da compra com o desconto de 10% é ".number_format($desconto_valor_total,2,",",".")."<br>";

?>