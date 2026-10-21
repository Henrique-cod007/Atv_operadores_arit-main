<?php
// Funcionário recebe R$ 2.000 e terá aumento de 12%.
// Variáveis: $salario = 2000; $aumento = 12;
// Tarefa: Calcule o valor do aumento e o novo salário.

$salario = 2000;
$aumento = 12;

$valorAumento = $salario * ($aumento / 100);
$novoSalario = $salario + $valorAumento;

echo "Valor do aumento: R$ {$valorAumento} <br>";
echo "Novo salário: R$  $novoSalario";
?>