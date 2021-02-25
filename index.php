<?php require ('geocalizar.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Geocalização por IP</title>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="/imagens/logo.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <!-- Navbar !-->
  <nav class="navbar navbar-light" style="background: rgb(245, 245, 245);">
  <strong><a class="navbar-brand" href="#">
    <img src="/imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Geocalização por IP
  </a>
  </strong>
  <!-- IP do visitante !-->
  <h5><p class="font-weight-bold text-right" style="height: 15px; margin: 0 40px;"><?php print_r("Seu IP: " . $ipdouser); ?></p></h5>
</nav>
<br><br>
<div>
<span class="font-weight-bold" style="color: red; font-size: 45px;"><b>Localize</b></span>
</div>
<br><br>
<div>
    <!-- Formulário que pega informações !-->
  <form action="" method="POST">
  <input type="text" class="form-control" name="inserir" size="40" placeholder="Digite o IP ou site"/>
  </div>
  <br><br>
  <div>
  <button type="submit" name="enviar" class="btn btn-dark btn-lg">Procurar</button>
  </div>
  </form>
  <br><br>
  <!-- Exibe resultados !-->
  <div>
  <h4><b style="color: red;">País: </b><span class="text-white"><?php print_r($pais); ?></span></h4>
  </div>
  <div>
  <h4><b style="color: red;">Estado: </b><span class="text-white"><?php print_r($estado); ?></span></h4>
  </div>
  <div>
  <h4><b style="color: red;">Cidade: </b><span class="text-white"><?php print_r($cidade); ?></span></h4>
  </div>
  <div>
  <h4><b style="color: red;">Provedor: </b><span class="text-white"><?php print_r($provedor); ?></span></h4>
  </div>
  <!-- Footer !-->
  <footer class="footer mt-auto py-3 fixed-bottom" style="background: rgb(245, 245, 245);">
      
      <span class="text-white font-weight-bold text-dark" style="margin: 0 25px;">   ❤  Feito por Henrique Amorim Guarnieri.</span>
            <a href="https://github.com/oRiqueee" target="_blank"><img src="/imagens/github.png" width="25" height="25" class="d-inline-block align-right" style="display: flex; float: right; margin: 0 40px;"></a>
        </footer>
  </body>
</html>
