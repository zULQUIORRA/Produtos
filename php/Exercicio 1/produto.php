<?php
  include("invoice.php");

  $Invoice = new Invoice(45,3,"quantidade comprada",94);
  $Invoice->preco = 189.00 ;
  $Invoice->quantidade = 9;
  $Invoice->informacao = "Teclado Gamer com Temática Ahegao.";



  echo "<p> Descrição do produto: " . $Invoice->informacao . "<p>";
  echo "<p> Quantidade comprada: " . $Invoice->quantidade . "<p>"; 
  echo "<p> Preço Unitário: R$".$Invoice->preco."</p>";
?>