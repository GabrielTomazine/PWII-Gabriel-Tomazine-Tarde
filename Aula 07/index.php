<?php

$km = 30;
$l = 7;

$Cm = $km / $l;

echo "1 - Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível.  <br>";

echo "<h4>Distância total: 30km <br>
<h4>Quantidade de conbustível gasto: 7l <br>
<h3>O Consumo médio é: ",$Cm,"</h3><br><br>";

$C = 25;
$A = 10;
$L= 20;

$V = $C*$A*$L;

echo "2- Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da seguinte fórmula: volume = comprimento x largura x altura <br>";
echo "<h4> Comprimento: 25cm <br>
<h4> Largura: 20cm <br>
<h4> Altura: 10cm <br>
<h3>Volume: ",$V,"cm </h3><br><br>";

$b1 = 15;
$b2 = 12;
$Al = 22;
$ar =($b1 + $b2) * $AL/2;

echo "3 - Escreva um algoritmo que receba três valores, calcule e apresente a área de um trapézio. <br>";
echo "<h3>Valor da área do trapézio é : ",$ar,"</h3><br><br>";

$vl= 5;
$p = $v /10;
$valortotal = $vl + ($vl * 0.16);

echo "4 - Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra."
echo "<h3>Valor da parcela: ", $p;
echo "<h3>valor total: ", $valortotal;
?>