<!DOCTYPE html>
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
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo, e com a distância determinada por você!
                </p>
            </div>
        </div>
        
        <div class="painel">
           <h2>Cálculo do valor (R$) do consumo</h2>
           <div class="conteudo-painel">
               <form action="calculo.php" method="POST">
                   <label for="valor-combustivel">Valor Combustível</label>
                   <input type="text" class="campoTexto" name="valor-combustivel">
                
                   <label for="distancia">Distância em KM a ser percorrida</label>
                   <input type="number" class="campoTexto" name="distancia" required>
                   
                   <label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
                   <input type="number" class="campoTexto" name="autonomia" required>
                       
                   <button class="botao" type="submit">Calcular</button>
               </form>
           </div>
            
        </div>
    </main>

</body>

</html>