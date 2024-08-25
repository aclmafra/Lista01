<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="" method="get">
    
  
    <h1>Calculadora de IMC</h1>
    <h3>Digite seu peso</h3>
    <input type="number" required id="peso" class="peso" name="peso"  />
    <h3>Digite sua altura</h3>
    <input type="number" required step=".01" id="altura" class="altura" name="altura" />
    <button type="submit" >Enviar</button>

    </form>
</body>
</html>
<?php

  if(isset($_GET['peso']) && isset($_GET['altura'])){
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    $imc = $peso / ($altura * $altura);

    echo "O seu imc é de:" . number_format($imc, 2);
  }

?>