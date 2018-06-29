<?php

$mensagem = "";

if($_POST){
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];
    $preco = $_POST['valor-combustivel'];
    
    if(is_numeric($distancia) && is_numeric($autonomia)){
        if($distancia > 0 && $autonomia > 0 && $preco > 0){
            $calculo = ($distancia / $autonomia) * $preco;
            $calculo = number_format($calculo, 2, ',', '.');

            $mensagem.= "<p>O valor do consumo em (R$) : ".$calculo."</p>";
    }else{
          $mensagem.= "<p> O valor inserido invalido.</p>"; 
        };
        
    }else{
        $mensagem.= "<p> O valor inserido não é correto.</p>";
    };

}else{
    $mensagem.= "<p>Nenhum dado foi inserido</p>";
};
?>


<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consumo de Combustível</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main>
      <div class="painel">
         <h2>Resultado do calculo de consumo</h2>
          <div class="conteudo-painel">
             <?php
                echo $mensagem;
             ?>
    
             <a class="botao" href="index.php">Voltar</a>
          </div>
      </div>
  </main>
</body>
</html>
    