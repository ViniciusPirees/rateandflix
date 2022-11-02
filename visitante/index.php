<?php

session_start();
if (isset($_SESSION['usuario'])) {
  if ($_SESSION['usuario'] == 1) {
    header('location: ../admin/index.php');
  } else {
    header('location: ../usuario/index.php');
  }
}

?>
<!DOCTYPE html>
<lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate and Flix - O seu principal site de notícias sobre entretenimento e muito mais</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/stylemain.css">
    <link rel="stylesheet" href="estilo/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rancho&family=Roboto:wght@500&display=swap" rel="stylesheet">

  </head>

  <body>
    <div class="pai">
      <div class="coluna1">
        <h1>Rate & Flix</h1>
      </div>
      <div class="coluna2">
        <nav>
          <a href="../index.php">Home</a>
          <a href="">Notícias</a>
          <a href="">Dicas</a>
          <a href="">Filmes</a>
          <a href="">Sobre</a>
          <a href="">Contato</a>
        </nav>
      </div>
      <div class="coluna3">
        <a href="rateandflix2.html" target="_blank"><button class="criarconta">Criar
            Conta</button>
        </a>
        <a href="telalogin.php" target="_blank">
          <button class="entrar">Entrar</button>
        </a>
      </div>
    </div>

    <section class="items">
      <div class="carouselOfImages">
        <?php
        include('../controle/key.php');
        include('../controle/conexao.php');
        define('BASEURL', 'https://api.themoviedb.org/3/');
        $url = BASEURL . 'movie/popular?api_key=' . APIKEY . '&language=pt-BR';
        $json = file_get_contents($url);
        $obj = json_decode($json);
        for ($i = 0; $i < 15; $i++) {
          $poster = $obj->results[$i]->poster_path;
          $id = $obj->results[$i]->id;

          echo '<div class="carouselImage" style="background-size:cover;">
        <a href="filme.php?id=' . $id . '"><img src="https://image.tmdb.org/t/p/original/' . $poster . '"/></a>
      </div>
      ';
        } ?>
      </div>
    </section>

    <hr>
    <footer>
      <nav class="footer">
        <a href="#">Home</a>
        <a href="#">Notícias</a>
        <a href="#">Dicas</a>
        <a href="#">Filmes</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
      </nav>
    </footer>

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
    <script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js'></script>
    <script src="/JS/swiper-bundle.min.js"></script>
    <script src="../scripts/scriptsmain.js"></script>
  </body>

  </html>