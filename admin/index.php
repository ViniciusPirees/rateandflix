<?php

session_start();
if (!isset($_SESSION['UsuCod'])) {
    header('location: ../visitante/index.php');
}
else{ 
    if ($_SESSION['UsuCod'] != 1) {
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

        <link href="https://fonts.googleapis.com/css2?family=Rancho&family=Roboto:wght@500&display=swap"
            rel="stylesheet">
        
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
                        Conta</button></a>
                <button class="entrar">Entrar</button>
            </div>
        </div>
        
      
<section class="items">
    <div class="carouselOfImages">
      <div class="carouselImage" style="background-size:cover;">
        <img data-tab="bright" src="http://www.thebrandage.com/assets/image/uploads/haberler/Bright_TUR.jpg"/>
      </div>
      <div class="carouselImage" style="background-size:cover;">
        <img data-tab="avatar" src="https://i.pinimg.com/736x/a4/23/f8/a423f86593029b7d2a6d9f1e1fd1e406---movies-movies-to-watch-online.jpg"/>
      </div>
     <div class="carouselImage" style="background-size:cover;">
        <img data-tab="nuh" src="http://a69.g.akamai.net/n/69/10688/v1/img5.allocine.fr/acmedia/medias/nmedia/19/02/17/31/20658158.jpg"/>
      </div>
       <div class="carouselImage" style="background-size:cover;">
        <img data-tab="lord" src="https://cdn.empireonline.com/jpg/70/0/0/1280/960/aspectfit/0/0/0/0/0/0/c/features/59e8d795405a5c6805947751/47%20Lord%20of%20War.jpg"/>
      </div>
      <div class="carouselImage" style="background-size:cover;">
        <img data-tab="thor" src="https://mikeantjones.files.wordpress.com/2012/04/thor-film-poster.jpg"/>
      </div>
       <div class="carouselImage" style="background-size:cover;">
        <img data-tab="john" src="https://images-na.ssl-images-amazon.com/images/I/91H06HPhX%2BL._SY717_.jpg"/>
      </div>
      <div class="carouselImage" style="background-size:cover;">
        <img data-tab="bond" src="http://www.the007dossier.com/007Dossier/james-bond-007-movie-posters/skyfall/skyfall-bond-poster.jpg"/>
      </div>
       <div class="carouselImage" style="background-size:cover;">
        <img data-tab="deadpool2" src="https://icdn3.digitaltrends.com/image/deadpool-2-thanksgiving-poster-1294x2048.jpg"/>
      </div>
       <div class="carouselImage" style="background-size:cover;">
        <img data-tab="inception" src="http://netdna.webdesignerdepot.com/uploads/2011/02/inception.jpg"/>
      </div>
       <div class="carouselImage" style="background-size:cover;">
        <img data-tab="fight" src="https://i.pinimg.com/736x/fd/5e/66/fd5e662dce1a3a8cd192a5952fa64f02--classic-poster-classic-movies-posters.jpg"/>
      </div>
       <div class="carouselImage" style="background-size:cover;">
        <img data-tab="dunkirk" src="http://www.gmhslasso.org/wp-content/uploads/2018/01/Stegenga_BestMoviesof2017_Photo2.jpg"/>
      </div>
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
    <script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js'></script><script  src="./script.js"></script>

        <script src="/JS/swiper-bundle.min.js"></script>
        <script src="../scripts/scriptsmain.js"></script>
    </body>

    </html>