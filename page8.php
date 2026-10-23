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
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8</title>
</head>
<style>
    body{
        background-color: rgba(221, 219, 219, 0.78);
    }
    main{
    display: flex;
    justify-content: center;
    gap: 20px;
    align-items: flex-start;
}
    .principal{
        background-color: rgb(255, 255, 255);
        width: 500px;
        height: 60%;
        padding: 20px;
        border-radius: 10px  ;
        box-shadow: 0px 0px 5px black ;
        margin: 0px;
    }
    .seg_quadrado{
        background-color: rgb(235, 235, 235);
        width: 95%;
        height: 400px;
        margin: auto;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 5px black ;
    }
    fieldset{
        border: 2px solid black;
        padding: 18px;
        border-radius: 10px;
    }
    legend{
        font-size: 20px;
    }
    .div_03{
    background-color: white;
    box-shadow: 0px 0px 5px black;
    width: 455px;
    height: 70px;
    padding: 19px;
    margin: auto;
    overflow-y: hidden;
    margin-top: 20px; 
    border-radius: 10px; ;
}
    .div_03 ul{
    display: flex;
    flex-wrap: inherit;
    gap: 10px;
    list-style: none;
    padding: 0;
    text-align: center;
    }
    .div_03 li{
        background-color: rgb(235, 235, 235);
        border-radius: 10px;
        padding: 10px;
        transition: 0.3s ease-in-out;
    } 
    .lis_02:hover{
        background-color: rgb(105, 104, 104);
        border-radius: 40px;
        padding: 20px;
        color: white;
    } 
    a{
        text-decoration: none;
        color: black;
    }
</style>
<body>
    <header>
    </header>
    <main>
    <div class="principal">
        <fieldset>
        <legend><strong>Atividade 8</strong></legend>
        <p>
            Fernanda foi a uma loja e comprou:
            <ul>
            <li>2 camisetas por R$ 50,00 cada</li>
            <li>3 calças por R$ 80,00 cada.</li>
            <li>1 jaqueta por R$ 120,00</li>
            <li>A loja estava com uma promoção de 10% de desconto para compras acima de R$
300,00.</li>
            </ul> 
            Tarefa:<br>
            <ol>
            <li>Calcule o valor total da compra sem desconto</li><br>
            <li>Verifique se o total ultrapassa R$ 300,00</li><br>
            <li>Se sim, aplique 10% de desconto sobre o total</li><br>
            <li>Exiba o valor final com desconto, se aplicável</li>
            </ol>
        </p>
        <div class="seg_quadrado">
            <h3>Respostas :</h3>
            <ol>
            <li><p><?php echo "valor total da compra sem desconto custará ".number_format($valor_total_sem_desconto,2,",",".")."<br>"; ?></p></li>
            <li><p><?php echo "o valor da compra ultrapassa a mais R$ {$se_passa_300} de R$ 300<br>"; ?></p></li>
            <li><p><?php echo "o valor total da compra com o desconto de 10% é R$ ".number_format($desconto_valor_total,2,",",".")."<br>"; ?></p></li>
           </ol>
        </div>
        </fieldset>
        <div class="div_03">
        <ul>
            <li class = "lis_02" ><a href="index.php">Atividade 1</a></li>
            <li class = "lis_02" ><a href="page2.php">Atividade 2</a></li>
            <li class = "lis_02" ><a href="page3.php">Atividade 3</a></li>
            <li class = "lis_02" ><a href="page4.php">Atividade 4</a></li>
            <li class = "lis_02" ><a href="page5.php">Atividade 5</a></li>
            <li class = "lis_02" ><a href="page7.php">Atividade 6</a></li>
            <li class = "lis_02" ><a href="page7.php">Atividade 7</a></li>
            <li class = "lis_02" ><a href="page8.php">Atividade 8</a></li>
            <li class = "lis_02" ><a href="page9.php">Atividade 9</a></li>
            <li class = "lis_02" ><a href="page10.php">Atividade 10</a></li>
            <li class = "lis_02" ><a href="page11.php">Atividade 11</a></li>
            <li class = "lis_02" ><a href="page12.php">Atividade 12</a></li>
            <li class = "lis_02" ><a href="page13.php">Atividade 13</a></li>
            <li class = "lis_02" ><a href="page14.php">Atividade 14</a></li>
            <li class = "lis_02" ><a href="page15.php">Atividade 15</a></li>
            <li class = "lis_02" ><a href="desafio.php">Desafio</a></li>
        </ul>
    </div>
    <div>
    </main>
</body>
</html>