<?php
// Rafael decidiu comprar um carro no valor de R$ 60.000,00.
// Para reduzir o valor das parcelas, ele deu uma entrada de R$ 10.000,00 e
// financiou o restante em 12 vezes.
// • Calcule o valor financiado
// • Em seguida, calcule o valor de cada parcela

$carro = 60000;

$entrada = 10000;

$precoFinal_carro = $carro - $entrada;

$parcela = $precoFinal_carro / 12;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
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
        <legend><strong>Atividade 7</strong></legend>
        <p>
            Rafael decidiu comprar :
            <ul>
            <li>1 carro no valor de R$ 60.000,00</li>
            <li>Para reduzir o valor das parcelas, ele deu uma entrada de R$ 10.000,00 e
financiou o restante em 12 vezes.</li>
            </ul> 
            Tarefa:<br>
            <ul>
            <li>Calcule o valor financiado</li><br>
            <li>Em seguida, calcule o valor de cada parcela</li>
            </ul>
        </p>
        <div class="seg_quadrado">
            <h3>Respostas :</h3>
            <ol>
            <li><p><?php echo "O finaciamento é de R$ {$precoFinal_carro},00 <br>"; ?></p></li>
             <li><p><?php echo "O valor da parcelado é de R$ ".number_format($parcela,2,",",".")."<br>"; ?></p></li>
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
            <li class = "lis_02" ><a href="page6.php">Atividade 6</a></li>
            <li class = "lis_02" ><a href="#">Atividade 7</a></li>
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