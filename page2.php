<?php
// Supermercado
// Maria comprou 4 pacotes de arroz a R$ 20 e 6 pacotes de feijão a R$ 12.
// Variáveis: $arroz = 4; $feijao = 6; $precoArroz = 20; $precoFeijao = 12;
// Tarefa: Calcule o valor total e a diferença de preço entre os produtos.

$arroz = 4;
$feijao = 6;
$precoArroz = 20;
$precoFeijao = 12;

$valortotal_Arroz = $arroz * $precoArroz; 
$valorTotoal_Feijao = $feijao * $precoFeijao;

$valorTotal = $valortotal_Arroz + $valorTotoal_Feijao;
$diferenca = $precoArroz - $precoFeijao;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
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
        <legend><strong>Atividade 2</strong></legend>
        <p>Supermercado:<br>
            Maria comprou 
            <ul>
            <li>4 pacotes de arroz a R$ 20</li>
            <li>6 pacotes de feijão a R$ 12</li>
            </ul>
            Variáveis:   
        <ul>
            <li>$arroz = 4;</li>
            <li>$feijao = 6;</li>
            <li> $precoArroz = 20;</li>
            <li>$precoFeijao = 12;</li>
        </ul> 
        Tarefa: 
            <ul>
            <li>Calcule o valor total e a diferença de preço entre os produtos.</li>
            </ul>
        </p>
        <div class="seg_quadrado">
            <h3>Respostas :</h3>


           <p><?php echo "O valor ta compra é R$ {$valorTotal},00 ."; ?></p>
           <p><?php echo "A diferença dos preços dos produtos é R$ {$diferenca},00 ."; ?></p>
        </div>
        </fieldset>
        <div class="div_03">
        <ul>
            <li class = "lis_02" ><a href="index.php">Atividade 1</a></li>
            <li class = "lis_02" ><a href="#">Atividade 2</a></li>
            <li class = "lis_02" ><a href="page3.php">Atividade 3</a></li>
            <li class = "lis_02" ><a href="page4.php">Atividade 4</a></li>
            <li class = "lis_02" ><a href="page5.php">Atividade 5</a></li>
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
