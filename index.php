<!DOCTYPE html>
<html lang="PT-BR">


<?php include 'includes/head.php'; 
session_start();
?>


<body>
<div class="container">
  <center>
   <br> <figure class="w-50 p-3" class="figure">
      <img src="img/chatgpt400px.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
      <figcaption class="figure-caption"></figcaption>
    </figure>
  </center>


  <center>
   
 
      <form action="action.php" method="post" id="form">
        <div class="w-100 p-3"  class="form-group">

          <h2><label for="exampleFormControlTextarea1">Digite sua pergunta</label></h2>
          <textarea class="form-control form-control-lg" name="question" id="exampleFormControlTextarea1" rows="5"></textarea>
          <br><button type="submit" name="btncadastrar" class="btn btn-primary">Enviar</button>
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