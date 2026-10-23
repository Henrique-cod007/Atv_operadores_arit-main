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
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
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
        <legend><strong>Atividade 5</strong></legend>
        <p>
            Um mercado possui dois tipos de produtos no estoque:
            <ul>
            <li>15 caixas de leite</li>
            <li>20 pacotes de biscoito</li>
            </ul>
            </ul>  
            Tarefa:<br>
            - Queremos realizar três cálculos simples: 
            <ol>
            <li>O total de produtos no estoque (leite + biscoito)</li><br>
            <li>A diferença entre a quantidade de biscoitos e a de leite (quanto um tem a mais que o outro). </li><br>
            <li>Quantas vezes a quantidade do produto com menor estoque cabe dentro do estoque do outro produto (divisão inteira).</li>
            </ol>
        </p>
        <div class="seg_quadrado">
            <h3>Respostas :</h3>
            <ol>
            <li><p><?php echo "o total de produtos é {$total_produtos}<br>"; ?></p></li>
            <li><p><?php echo "existe {$diferenca_QTDprodutos} pacotes de biscoitos a mais que caixa de leite<br>"; ?></p></li>
           <li><p><?php echo "{$cabe_dentro}x";?></p></li>
           </ol>
        </div>
        </fieldset>
        <div class="div_03">
        <ul>
            <li class = "lis_02" ><a href="index.php">Atividade 1</a></li>
            <li class = "lis_02" ><a href="page2.php">Atividade 2</a></li>
            <li class = "lis_02" ><a href="page3.php">Atividade 3</a></li>
            <li class = "lis_02" ><a href="page4.php">Atividade 4</a></li>
            <li class = "lis_02" ><a href="#">Atividade 5</a></li>
            <li class = "lis_02" ><a href="page6.php">Atividade 6</a></li>
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
