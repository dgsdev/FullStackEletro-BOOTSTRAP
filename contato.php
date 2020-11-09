<?php

require_once('link.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['msg'])){
    $nome = $_POST['nome']; 
    $email = $_POST['email'];	
    $msg = $_POST['msg'];

    $sql = "INSERT INTO comentarios (nome, email, msg) VALUES ('$nome','$email','$msg')";
    $resultado = $link->query($sql);

    echo "<script>alert('Obrigado! Recebemos sua mensagem, vamos responder em breve. :)');</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">        
        <title>Contato - Full Stack Eletro</title>
      
    </head>
    <body>
    <div class="container-fluid m-1 p-0"> 
                
    <?php
       include_once("menu.html");
    ?>
    

        <header>
            <h2 class="header">Fale Conosco</h2>
          
        </header>
        
        <div class="row m-2">
  <div class="col-sm-6">
    <div class="card" style="border-radius: 10px">
      <div class="card-body">
      <h5 class="card-text"><img class="logocontato" src="./assets/lgmail.png">
                contato@fullstackeletro.com </h5>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card"  style="border-radius: 10px">
      <div class="card-body">
        <h5 class="card-title"><img class="logocontato2" src="./assets/WhatsApp.png">
                (11) 9999-9999</h5>
        
        
      </div>
    </div>
  </div>
</div>
      
<br>
    <div class="container-fluid">
        <form method="post" action="">
        <h1 class="efeito2">Envie suas dúvidas, sugestões ou reclamações:</h1><br>
    <div class="form-group">
    <label for="texto">Nome</label>
    <input type="text" class="form-control" id="texto" name="nome">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensagem:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" placeholder="Digite sua mensagem aqui... Vamos responder o mais breve possível!" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-danger btn-block">Enviar</button>
</form>
</div> 
          

<?php 
              
$sql = "SELECT * FROM comentarios";
$resultado = $link->query($sql);

if ($resultado->num_rows > 0){
       while($rows = $resultado->fetch_assoc()) {
           echo "<div class='mensagem'>";
           echo "Data: ", $rows['data'],"<br>";
           echo "Nome: ", $rows['nome'],"<br>";
           echo "Email: ", $rows['email'],"<br>";
           echo "Mensagem: ", $rows['msg'],"<br>";          
           echo "</div>";         
       }
} else {
    echo "Nenhum comentário ainda!";
}
?>     
            
      
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