<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
        <title>Full Stack Eletro</title>
        <script>
        function saudacao(){
            data = new Date();
            hora = data.getHours();

            if(hora < 12 ){
                document.getElementById("msg_abertura").innerHTML = "Bom dia!";
            }
            else if(hora < 18){
                document.getElementById("msg_abertura").innerHTML = "Boa Tarde!";
            }
            else {
                document.getElementById("msg_abertura").innerHTML = "Boa Noite!";
            }            
        }       
        </script>    
    </head>
    <div class="container-fluid m-1 p-0">
  

    <body onload="saudacao()">  
  
        
    <?php
       include_once("menu.html");
    ?>

<!-- Início do Menu 
        <nav class="menu">
            <a href="./index.php"><img class="logo" src="./assets/lgfull.png" alt="Full Stack Eletro"></a>
            <a href="./produtos.php">Produtos</a>
            <a href="./loja.php">Nossas lojas</a>
            <a href="./contato.php">Fale Conosco</a>            
        </nav>
Fim do Menu -->

        <div class="back">                
            <main class="main">
                <h2 class="fonte"><span id="msg_abertura"></span> Seja Bem-vindo(a)!</h2>                               
            </div>             
                <h1 class="efeito">Aqui em nossa loja, programadores tem desconto nos produtos para sua casa!</h1>
            </main>                
    <?php
       include_once("footer.html");
    ?>  
        <script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        </div>
    </body>
    </html>