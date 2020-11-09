<?php

require_once('link.php');

if(isset($_POST['cliente']) && isset($_POST['end']) && isset($_POST['tel']) 
&& isset($_POST['prod']) && isset($_POST['preco']) && isset($_POST['qtd']) && isset($_POST['total'])){
    $cliente = $_POST['cliente'];
    $end = $_POST['end'];
    $tel = $_POST['tel']; 
    $prod = $_POST['prod'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd']; 
    $total = $_POST['total'];

    $sql = "INSERT INTO pedido (cliente, endereco, telefone, produto, preco, quantidade, preco_total) 
    VALUES ('$cliente', '$end', '$tel', '$prod', '$preco', '$qtd', '$total')";
    $resultado = $link->query($sql);

    echo "<script>alert('Produto Incluído com Sucesso!');</script>";

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
               
    <?php
       include_once("menu.html");
    ?>

        <header>
            <h2 class="header">Fale Conosco</h2>
          
        </header>
               

        <div class="container-fluid">
        <form method="post" action="">
            <h1 class="efeito2">Faça seu Pedido e Aproveite Promoções:</h1><br> 
            <div class="form-group">
            <label for="cliente">Cliente:</label>               
            <input class="form-control" name="cliente" type="text" required>
            </div>
            <div class="form-group">
            <label for="end">Endereço:</label> 
            
            <input class="form-control" name="end" type="text" required>
            </div>
            <div class="form-group">
            <label for="tel">Telefone:</label>
            
            <input class="form-control" type="tel" name="tel" placeholder="     Formato: 00-00000-0000" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required>
           </div>

           <div class="form-group">
            <label for="produtos">Produto</label>
            
            <select class="form-control" id="produtos" name="prod">
            <option>Geladeira Frost Free Brastemp Side Inverse 540L</option>
            <option>Geladeira Frost Free Brastemp Branca 375 Litros</option>
            <option>Geladeira Frost Free Consul Prata 340 Litros</option>
            <option>Fogão 4 Bocas Consul Inox com Mesa de Vidro</option>
            <option>Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático</option>
            <option>Micro-ondas Consul 32 Litros inox</option>
            <option>Microondas 25L Espelhado Philco</option>
            <option>Forno de Microondas Eletrolux 20L</option>
            <option>Lavadoura de Roupas Brastemp 11KG com Turbo Performance Branca</option>
            <option>Lavadoura de Roupas</option>
            <option>Lava-louça Eletrolux Inox com 10 serviços, 06 Programas de Lavagem e Painel Blue Touch</option>
            <option>Lava Louça Compacta, 8 Serviços Branca 127V</option>
            </select>
            </div>
            <div class="form-group">
            <label for="preco">Preço:</label>
            
            <input class="form-control" type="number" id="preco" name="preco" required>
            </div>
            <div class="form-group">
            <label for="qtd">Quantidade:</label>
            
            <input class="form-control" type="number" id="qtd" name="qtd" required>
            </div>
            <div class="form-group">
            <label for="total">Valor Total:</label>
           
            <input class="form-control" type="number" id="total" name="total" required>
            </div>
         
            <input type="submit" class="btn btn-danger btn-block" name="submit" value="ENVIAR">

        </form>
       </div>
        

<?php 
              
$sql = "SELECT * FROM pedido";
$resultado = $link->query($sql);

if ($resultado->num_rows > 0){
       while($rows = $resultado->fetch_assoc()) {
           echo "<div class='mensagem'>";
           echo "Cliente: ", $rows['cliente'],"<br>";
           echo "Endereço: ", $rows['endereco'],"<br>";
           echo "Telefone: ", $rows['telefone'],"<br>";
           echo "Produto: ", $rows['produto'],"<br>"; 
           echo "Preço : ", $rows['preco'],"<br>"; 
           echo "Quantidade: ", $rows['quantidade'],"<br>"; 
           echo "Valor Total: ", $rows['preco_total'],"<br>";          
           echo "</div>";            
       }
} else {
    echo "Nenhum pedido no Banco de Dados!";
}
?>                   
    <?php
       include_once("footer.html");
    ?>      
        <script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
    </body>
</html>