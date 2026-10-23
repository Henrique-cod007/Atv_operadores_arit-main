<?php
$din_maria = 80_000 ;


// passagens Aéreas
$passagens_Aereas = 80_000 * 50/100;


// Hospedagem
$hospedagem = $din_maria * 30/100;


// Despesas Extras
$despesas_extras = $din_maria * 20/100;


// Aumento passagens
$passagens_Aereas_aumento =   $passagens_Aereas * 2/100;


// Aumento hospedagem
$hospedagem_aumento = $hospedagem * 1.5/100;


// Aumento despesa extra
$despesas_extras_aumento = $despesas_extras * 2.5/100;
// valor final
$valor_final = $passagens_Aereas_aumento + $hospedagem_aumento + $despesas_extras_aumento;




$div_hospedagem = $hospedagem / 900;
// respostas
// echo "<br>ela deve reserva para ,passagens aéreas : {$passagens_Aereas}, Hospedagem: {$hospedagem},despesas extras {$despesas_extras} ";


// echo "<br><br>ela deve reserva depois de um mes ,passagens aéreas depois de um mês : {$passagens_Aereas_aumento}, Hospedagem depois de um mês: {$hospedagem_aumento},despesas extras depois de um mês {$despesas_extras_aumento} ";


// echo "<br><br>o valor final da {$valor_final}";


// echo "<br><br>o valor para diarias em hotel é R$ ".number_format($div_hospedagem,2,",",".");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    li:hover{
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
        <legend><strong>Desafio</strong></legend>
        <p>A cliente Mariana está planejando uma viagem internacional e possui R$
        80.000 disponíveis. Ela deseja dividir esse valor entre três áreas de
    gastos:<br>
    ➢ Passagens Aéreas – 50% do valor total<br>


    ➢ Hospedagem – 30% do valor total<br>  
    ➢ Despesas Extras (alimentação, transporte, lazer) – 20% do valor
    total<br>
    Cada área de gasto está sujeita a uma variação cambial média mensal:<br>
    • Passagens Aéreas: +2% (aumento médio)<br>
    • Hospedagem: +1.5%<br>
    • Despesas Extras: +2.5%<br>
    Mariana quer saber:<br>
    • Quanto ela deve reservar para cada tipo de gasto.<br>
    • Quanto cada gasto aumentará após 1 mês com base na variação
    cambial.<br>
    • O valor total final estimado da viagem.<br>
    • O resto da divisão do valor reservado para hospedagem por 900,
    para simular a conversão em diárias de hotel.</p>
        <div class="seg_quadrado">
            <h3>Respostas</h3>


           <p><?php echo "<br>1- ela deve reserva para ,passagens aéreas : {$passagens_Aereas}, Hospedagem: {$hospedagem},despesas extras {$despesas_extras} ."; ?></p>


           <p><?php echo "<br><br>2- ela deve reserva depois de um mes ,passagens aéreas depois de um mês : {$passagens_Aereas_aumento}, Hospedagem depois de um mês: {$hospedagem_aumento},despesas extras depois de um mês {$despesas_extras_aumento} .";?></p>


            <p><?php echo "<br><br>3- o valor final da {$valor_final}."; ?></p>


            <p><?php echo "<br><br>4- o valor para diarias em hotel é R$ ".number_format($div_hospedagem,2,",",".").".";?></p>
        </div>
        </fieldset>
        <div class="div_03">
        <ul>
            <li><a href="index.php">Atividade 1</a></li>
            <li><a href="page2.php">Atividade 2</a></li>
            <li><a href="page3.php">Atividade 3</a></li>
            <li><a href="page4.php">Atividade 4</a></li>
            <li><a href="page5.php">Atividade 5</a></li>
            <li><a href="page6.php">Atividade 6</a></li>
            <li><a href="page7.php">Atividade 7</a></li>
            <li><a href="page8.php">Atividade 8</a></li>
            <li><a href="page9.php">Atividade 9</a></li>
            <li><a href="page10.php">Atividade 10</a></li>
            <li><a href="page11.php">Atividade 11</a></li>
            <li><a href="page12.php">Atividade 12</a></li>
            <li><a href="page13.php">Atividade 13</a></li>
            <li><a href="page14.php">Atividade 14</a></li>
            <li><a href="page15.php">Atividade 15</a></li>
        </ul>
    </div>
    <div>
    </main>
</body>
</html>
