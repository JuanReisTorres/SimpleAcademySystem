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
                   
            input[type="submit"], input[type="reset"] {
                margin-left: 10px;
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
        $_SESSION["valorfinal"] = $_POST["plano"] * $_SESSION["valormensal"]; //recebemos através do método POST o plano, criamos uma global de sessão "valor final" que será calculado por plano(quantidade de meses) vezes o valor mensal que já está armazenada na global "valor mensal", e este calculo no dará o preço total
        $_SESSION["planomes"] = $_POST["plano"]; //para facilitar, já criamos a "plano mes" para identificar a quantidade de meses que o plano mensal foi adquirido, ou seja o plano selecionado.
        $_SESSION["metodopagamento"] = $_POST["metodopagamento"];
    ?>
    
    <h2>    
        <?php echo "Olá " . $_SESSION["nome"]; ?>
    </h2>
<form action="finalizar.php" method="post">
    <div id="final">
        <h2> Selecione as parcelas </h2>
        <?php 
            for($x=1;$x<=12;$x++){                
                echo'<input type="radio" name="parcelas" value="'.$x.'"> '.$x.'x de <span class="preco"> '.$_SESSION["valorfinal"]/$x.';</span><br>';
            }
        ?>
    </div>
        <input type="submit" value="PROXIMO">
        <input type="reset" value="LIMPAR">
    </form>


    <a href="index.html"><h2>Voltar para a página inicial</h2></a>
</body>
</html>