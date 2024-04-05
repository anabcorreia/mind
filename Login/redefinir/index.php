<?php include_once("lib/includes.php");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Redefinir Senha</title>
  </head>
  <body>
    
    <div class="row">
      <div class="col-sm-5 offset-md-3">
        <?php
            $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
            $dir = "pags/";
            $ext = ".php";

            if(file_exists($dir.$url.$ext)){
              include($dir.$url.$ext);
            }else{
              echo "<div class='alert alert-success'>Mude sua senha!</div>";
            }

        ?>
        <form method="POST">
<p align="right"><a href="?pagina=recuperar">Esqueceu a senha? Recupere já!</a></p>
</form>
      </div>

    </div>

  </body>
</html>