<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Extensão, Pesquisa e Pós-Graduação</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="shortcut icon" href="./img/images.ico" type="image/x-icon" />
</head>
<body>
  <section class="login-block">
    <p style="color: red"> 
          <?php if(isset($_SESSION['loginErro'])) {
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']); 
          } ?>
        </p>
    <div class="container container-login">
      <div class="row">
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Extensão, Pesquisa e Pós Graduação</h2>
          <form class="login-form" action="verificaLogin.php" method="POST">
            <div class="form-group">
              <label for="email" class="text-uppercase" id="email">E-MAIL</label>
              <input type="email" class="form-control" id="email" required="" name="email">
            </div>
            <div class="form-group">
              <label for="senha" class="text-uppercase" id="senha">Senha</label>
              <input type="password" class="form-control" id="senha" required="" name="senha">
            </div>
            <div>
              <button type="submit" class="btn btn-login float-right" style="color: white;"> Acessar </button>
              <a href="cadastroUsuario.php" class="btn btn-login float-left"style="color: white"> Cadastrar </a>
            </div>
          </form>
        </div> 
        <div class="col-md-8 banner-sec">
          <br> <br>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid img-radio" src="img/slide1.jpeg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid img-radio" src="img/slide2.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid img-radio" src="img/slide3.jpg" alt="First slide">
              </div>
              <br>
            </div>     
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>