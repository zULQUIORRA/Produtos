<?php
include ("pessoa.php");

$pessoa = new Empregado("nome","sobrenome","salario");
$nome = "Thiago";
$sobrenome = "Henrique";
$SM = 3.000;
$SA = 19.600;
$aumento =  ($SA * 12) / 10; 

echo "<p> Primeiro Nome: " .$nome. "<p>";
echo "<p> Sobrenome: " .$sobrenome. "<p>";
echo "<p> Salário Mensal sem aumento: R$" .$SM. ". Salário Anual sem aumento: R$" .$SA.
  ". Salário Anual com aumento de 10%: " .number_format($aumento,3,".","."). "</p>";

?>