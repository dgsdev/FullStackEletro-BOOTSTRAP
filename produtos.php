<?php

require_once('link.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">        
        <title>Produtos - Full Stack Eletro</title>
        <style>
        * {
            margin: 0;
            padding: 0;
        }
        </style>
    </head>
    <body>
    <div class="container-fluid m-1 p-0"> 
          
    <?php
       include_once("menu.html");
       ?>
        

        
        <header class="header">
        <h2>Produtos</h2>
        </header>

        <!-- Example single danger button 
<div class="btn-group d-flex">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categorias
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Todos Produtos (12)</a>
    <a class="dropdown-item" href="#">Geladeiras (3)</a>
    <a class="dropdown-item" href="#">Fogões (2)</a>
    <a class="dropdown-item" href="#">Microondas (3)</a>
    <a class="dropdown-item" href="#">Lavadouras de roupa  (2)</a>
    <a class="dropdown-item" href="#">Lava-louças (2)</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Faça seu Pedido</a>
  </div>
</div>-->

  <div class="container-fluid w-100 mx-1"> 
  <div class="card text-light bg-danger mb-3 sm-4">
  <h3 class="categoria">Categorias</h3> 
  <div class="card-body p-0">
  <h5 class="card-title"></h5>
    
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item text-dark" onclick="exibir_todos()" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Todos Produtos (12)</li>
  <li class="list-group-item text-dark" onclick="exibir_categoria('geladeiras')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Geladeiras (3)</li>
  <li class="list-group-item text-dark" onclick="exibir_categoria('fogão')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Fogões (2)</li>
  <li class="list-group-item text-dark" onclick="exibir_categoria('microondas')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Microondas (3)</li>  
  <li class="list-group-item text-dark" onclick="exibir_categoria('lavadouras_roupa')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Lavadouras de roupa  (2)</li>
  <li class="list-group-item text-dark" onclick="exibir_categoria('lava_louças')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Lava-louças (2)</li> 
  <li class="list-group-item text-danger"><a href="pedido.php" style="text-decoration: none; color: #000; font-weight: bold;" onmouseover="upScaleMenu(this)" onmouseout="downScaleM(this)">Faça seu Pedido</a></li>    
  </ul>  
  </div>
  </div>
  </div>

  

 
<?php 
              
              $sql = "SELECT * FROM produtos;";
              $result = $link->query($sql);
              
              if ($result->num_rows > 0){
                  while($rows = $result->fetch_assoc()) {
                      
                      ?>

                

  <div class="box_produto card text-light bg-danger mx-2 " id="<?php echo $rows["categorias"]; ?>" style="width: 18rem; text-align: center;">
  
  <img src="<?php echo $rows["imagem"]; ?>"  class="card-img-top" alt="alt="<?php echo $rows["descricao"]; ?> style="height: 250px;">
  <div class="card-body">
  <h5 class="card-title" style="height: 60px;"><?php echo $rows["descricao"]; ?></h5>
    
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item text-dark"><strike>R$<?php echo $rows["preco"]; ?></strike></li>
  <li class="list-group-item text-danger"><strong>R$ <?php echo $rows["preco_venda"]; ?></strong></li>  
  </ul> 
               
  </div>
 </div>



  

<?php
       }
    } else {
        echo "Nenhum Produto Cadastrado!";
    }
    ?>

    

    <?php
       include_once("footer.html");
       ?>  
       <script src="functions.js"></script>
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</div>
    </body>
</html>