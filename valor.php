<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Academia do Juan </title>
        <style type="text/css">
            body{
                font-family: Calibri, Arial;
                 background: #e9e9e9;
                 margin: 0;
            }
            textarea{
                width: 500px;
                height: 150px;
                font-size: 15px;
                padding-top: 7px;
                margin-left: 10px;
            }
            h2{
                padding: 20px;
                margin-top: 0px;
                background: rgb(102,0,204);
                background: radial-gradient(circle, rgba(102,0,204,1) 63%, rgba(102,0,102,1) 87%);
                color: white;
            } 
            #planos{
                text-align: center;
            }
            .explica-titulo{
                margin-left: 10px;
                margin-bottom: 0px;
                font-size: 25px;
            }
            
            p{
                margin-left: 10px;
                font-size: 20px;
            }
            
            form{
                margin-left: 10px;
                position: relative;
                margin-bottom: 10px;
            }
            
           input[type="number"], input[type="text"]{
                position: absolute;
                left: 200px;
                width: 300px;
                height: 17px;
            }
            
            input[type="submit"], input[type="reset"] {
                left: 200px;
                width: 100px;
                height: 30px;
                background: rgb(102,0,204);
                background: radial-gradient(circle, rgba(102,0,204,1) 63%, rgba(102,0,102,1) 87%);
                border-radius: 5px;
                font-size: 15px;
                color: white;
                
            }
              
        </style>
    </head>
<body>
    <?php
        session_start();
        $_SESSION["nome"] = $_POST["nome"]; //Adicionando a global nome
        $_SESSION["sexo"] = $_POST["sexo"]; //Adicionando a global sexo
        $_SESSION["peso"] = $_POST["peso"]; //Adicionando a global peso
        $_SESSION["altura"] = $_POST["altura"]; //Adicionando a global altura

        $_SESSION["valormensal"] = 0.0; //Adicionando a global valor mensal (valor por mês de determinada ativade)
        $modalidade=$_POST["modalidade"]; //Definindo a variável modalidade
        $_SESSION["modalidadeutf8"]=""; //A modalidade é dada sem acentos, essa variável serve para setar os acentos
        $_SESSION["pideal"] = 0.0; //Global do peso ideal
    
        //Calculando o peso ideal
        if($_SESSION["sexo"]="masculino") {
            $_SESSION["pideal"] = $_SESSION["altura"] - 100 - ($_SESSION["altura"] - 150) / 4;
        }else{
            $_SESSION["pideal"] = $_SESSION["altura"]- 100 - ($_SESSION["altura"] - 150) / 2.5;
        }
    
        //preco conforme modalidade
        switch($modalidade){
            case "danca":
                $_SESSION["valormensal"] = 300; //Valor 1 mes de dança
                $_SESSION["modalidadeutf8"] = "Dança"; // de "danca" para "Dança"
                break;
            case "musculacao":
                $_SESSION["valormensal"] = 250;
                $_SESSION["modalidadeutf8"] = "Musculação";
                break;
            case "boxe":
                $_SESSION["valormensal"] = 80;
                $_SESSION["modalidadeutf8"] = "Boxe";
                break;
            case "judo":
                $_SESSION["valormensal"] = 200;
                $_SESSION["modalidadeutf8"] = "Judô";
                break;
            case "jiujitsu":
                $_SESSION["valormensal"] = 400;
                $_SESSION["modalidadeutf8"] = "Jiu-Jitsu";
        }
    ?>
    <h2> Selecione um plano </h2>
    
<form action="pay.php" method="post"> 
<div id="planos">
   <p><label for="plano">Escolha um plano para a prática de <?php echo $_SESSION["modalidadeutf8"]; ?></label>
   <br>
   <input type="radio" name="plano" value="3">3 meses - <span class="preco">R$<?php echo $_SESSION["valormensal"]*3; ?></span>
   <br>
   <input type="radio" name="plano" value="6" required>6 meses - <span class="preco">R$<?php echo $_SESSION["valormensal"]*6; ?></span>
   <br>
   <input type="radio" name="plano" value="12">12 meses - <span class="preco">R$<?php echo $_SESSION["valormensal"]*12; ?></span>
   <br> 
    </p>
    <hr>
    <p><label for="metodopagamento">Método de pagamento: </label>
    <br>
    <input type="radio" name="metodopagamento" value="cartao" required>Cartão de crédito</p>
    Em breve outras
    <br>
    <br>
<img src="https://ichef.bbci.co.uk/news/410/cpsprodpb/3CC7/production/_112395551_eso2008a.jpg">
<input type="submit" value="PROXIMO">
<input type="reset" value="LIMPAR">
</div>

</form>
</body>
</html>