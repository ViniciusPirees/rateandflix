<?php

session_start();
if (isset($_SESSION['usuario'])) {
  if ($_SESSION['usuario'] == 1) {
    header('location: ../admin/index.php');
  } else {
    header('location: ../usuario/index.php');
  }
}

if (isset($_GET["id"])) {
  $id = $_GET["id"];
}

?>

<!DOCTYPE html>
<lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate and Flix - O seu principal site de notícias sobre entretenimento e muito mais</title>
    <link rel="stylesheet" href="../css/stylemain.css">
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

    <div>
      <?php
      
      include('../controle/key.php');
      include('../controle/conexao.php');
      define('BASEURL', 'https://api.themoviedb.org/3/');
      $url = BASEURL . 'movie/' . $id . '/images?api_key=' . APIKEY;
      $json = file_get_contents($url);
      $obj = json_decode($json);

      $urldetalhes = BASEURL . 'movie/' . $id . '?api_key=' . APIKEY . '&language=pt-br';
      
      $jsondetalhes = file_get_contents($urldetalhes);
      $objdetalhes = json_decode($jsondetalhes);
      $fotofundo = $obj->backdrops[0]->file_path;
      $poster = $objdetalhes->poster_path;
      $titulo = $objdetalhes->title;
      $tituloori = $objdetalhes->original_title;
      $anolancamento = $objdetalhes->original_title;
      echo '<style> #fundofilme {
        background: linear-gradient(0deg, rgb(40,45,45) 15%, rgba(0, 0, 0, 0.183) 100%), url("https://image.tmdb.org/t/p/original'.$fotofundo.'");
        background-repeat: no-repeat;
        background-size: cover;
      }</style>';
      
      echo '
      <div id="fundofilme">
      <div>
        <div class="posterfilme">
          <img class="poster1" src="https://image.tmdb.org/t/p/original'.$poster.'" />
        </div>
      
          <div class="detalhes">
          <div class="titulofilme">
          '.$titulo.'('.$anolancamento.')          
          </div>
          <div class="titulooriginal">
          '.$tituloori.'
          </div>
          </div>
      </div>
      </div>
        '
        ?>
  

      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
      <script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js'></script>
      <script src="/JS/swiper-bundle.min.js"></script>
      <script src="../scripts/scriptsmain.js"></script>
  </body>

  </html>  ?>