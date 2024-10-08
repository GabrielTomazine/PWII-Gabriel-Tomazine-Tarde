<?php
$peso = 50;
$altura = 190;
$imc = $peso / $altura * $altura;

if ($imc < 18.5){
    $classificacao = "Magreza";
}
else if ($imc >= 18.5 && $imc < 25){
    $classificacao = "Normal";
}
else ($imc >= 25 && $imc < 30){
   
}
?>