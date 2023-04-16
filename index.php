<!DOCTYPE html>
<html lang="PT-BR">


<?php include 'includes/head.php'; 
session_start();
?>


<body>
<div class="container">
  <center>
  <!-- class="w-50 p-3" -->
   <br> <figure  class="figure">
      <img src="img/banner projeto chatgpt.png" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
      <!-- <figcaption class="figure-caption"></figcaption> -->
    </figure>
  </center>
 

  <center>
   
 
      <form action="action.php" method="post" id="form">
        <div class="w-100 p-3"  class="form-group">
        <font color="white">
          <h2><label for="exampleFormControlTextarea1">⇩ DIGITE SUA PERGUNTA ⇩</label></h2></font>
          <textarea class="form-control form-control-lg" name="question" id="exampleFormControlTextarea1" rows="5"></textarea>
          <br><button type="submit" name="btncadastrar" class="btn btn-primary">ENVIAR</button>
        </div>
        </form>
  </center>
  
  <center>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"></h4>
      <p><?php 
      if(isset($_SESSION['content']))
      {
        echo $_SESSION['content'];
      }
      ?></p>
      <hr>
      <p class="mb-0"></p>
    </div>
  </center>
 </div>

  <script>

  </script>
</body>

</html>