<html>
    <head>
        <meta charset="UTF-8">
        <title> Peso ideial </title>
               <style type="text/css">
           h2{
                padding: 20px;
                margin-top: 0px;
                color: white;
                background: rgb(102,0,204);
            } 
			
            .notas{
                padding: 10px;
                background: rgb(102,0,204);
                background: radial-gradient(circle, rgba(102,0,204,1) 63%, rgba(102,0,102,1) 87%);
                text-align: center;
                border-radius: 5px;
            }
			
            p{
                margin-left: 10px;
                margin-right: 10px;
                font-size: 20px;
                background: rgb(102,0,204);
                border-radius: 5px;
                padding: 10px;
                color: white;
                border: 5px double #e9e9e9;
            } 
			
            body{
                font-family: Calibri, Arial;
                 background: #e9e9e9;
                 margin: 0;
            } 
			
            a:link{
                text-decoration: none;
            }
            
            a{
                text-align: center;
            }
            
            #final{
                background: #660066;
                border-radius: 5px;
                font-size: 20px;
                padding: 10px;
                color: white;
                margin-bottom: 10px;
                margin-left: 10px;
                margin-right: 10px;
            }
 
        </style>
    </head>
<body>
    <?php
        session_start();
        $parcelas = $_POST["parcelas"]; //Pegando a quantidade de parcelas que a pessoa selecionou no arquivo "pay.php"
        $valorparcelas = $_SESSION["valorfinal"]/$parcelas; //Calculando o valor de cada parcela com base no valor total, logo VALOR TOTAL/NUMERO DE PARCELAS 
        $emagrecer=$_SESSION["peso"]-$_SESSION["pideal"]; //Calculando diferença do peso ideal
    ?>
    
    <h2>    
        <?php echo "Olá " . $_SESSION["nome"];?>
    </h2>
    
    <div id="final">
        <h2> Dados pessoais </h2>
        <p> Nome: <?php echo $_SESSION["nome"];?></p> 
        <p> Sexo: <?php echo $_SESSION["sexo"];?></p> 
        <p> Peso: <?php echo $_SESSION["peso"];?> KG</p> 
        <p> Peso ideal: <?php echo $_SESSION["pideal"];?> KG</p>
        <?php
            if($_SESSION["peso"] > $_SESSION["pideal"]){
                echo "<p> Você está acima do seu peso ideal :(, mas a academia do Juan te ajudará nessa!<br>";
                echo "Você precisa emagrecer " . $emagrecer . "KG para chegar em seu peso ideal </p>";
            }
        ?>
        <p> Altura: <?php echo $_SESSION["altura"];?> CM</p> 
        <hr>
        <h2> Dados de inscrição </h2>
        <p> Modalidade: <?php echo $_SESSION["modalidadeutf8"];?></p>
        <hr>
        <h2> Dados de pagamento </h2>
        <p> Valor por mês de <?php echo $_SESSION["modalidadeutf8"]; ?>: R$<?php echo $_SESSION["valormensal"];?></p>
        <p> Quantidade de meses adquiridos: <?php echo $_SESSION["planomes"];?></p>
        <hr>
        <p> Método de pagamento: <?php echo $_SESSION["metodopagamento"];?> </p>
        <p> Quantidade de parcelas: <?php echo $parcelas;?> </p>
        <p> Valor parcelas: R$<?php echo $valorparcelas;?> </p>
        <hr>
        <p> Valor final: R$<?php echo $_SESSION["valorfinal"];?> </p>
    </div>

    <?php 
    session_destroy();
    ?>
    <a href="index.html"><h2>Voltar para a página inicial</h2></a>
</body>
</html>