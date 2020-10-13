<!DOCTYPE html>
<html lang="en">
<head>
  <title>IslamNiger &mdash; La voie des Salafs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 
  <link rel="stylesheet" href="public/fonts/icomoon/style.css">

  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/magnific-popup.css">
  <link rel="stylesheet" href="public/css/jquery-ui.css">
  <link rel="stylesheet" href="public/css/owl.carousel.min.css">
  <link rel="stylesheet" href="public/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


  <link rel="stylesheet" href="public/css/aos.css">

  <link rel="stylesheet" href="public/css/style.css">

</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="row align-items-center">


          <div class="col-3">
            <!--<h1 class="site-logo"><a href="index.php?p=home" class="h2">IslamNiger<span class="text-success">.</span> </a></h1>-->
            <a href="index.php?p=home" class="h2"><img src="public/images/logoone1.png" alt="Logo IslamNiger" class="img-fluid"></a>
          </div>
          <div class="col-9">
            <nav class="site-navigation position-relative text-right text-md-right" role="navigation">



              <div class="d-block d-lg-none ml-md-0 mr-auto"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.php?p=home">Accueil</a>
                </li>
                <li class="has-children">
                  <a href="#">Articles</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="index.php?p=actualite">Actualités</a></li>
                    <li><a href="index.php?p=annonce">Annonces</a></li>
                  </ul>
                </li>
                <li><a href="index.php?p=fikr">Fikr</a></li>
                <li><a href="index.php?p=audio">Audio</a></li>
                <li><a href="index.php?p=oulema">Oulèmas</a></li>
                <li><a href="index.php?p=contact">Contact</a></li>
              </ul>
            </nav>


          </div>

        </div>
      </div>
      
    </header>
    <?= $content;?>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h3>A propos de Nous</h3>
            <p>IslamNiger est une plateforme qui  informe les musulmans sur l'actualités, les annonces de conférence, prêche et rend accessibles les audios des prêches, conférences et enseignement avec l'accord des nos Oulémas.</p>
          </div>
          <div class="col-lg-3 mx-auto">
            <h3>Navigation</h3>
            <ul class="list-unstyled">
              <li><a href="index.php?p=">Accueil</a></li>
              <li><a href="index.php?p=actualite">Actualité</a></li>
              <li><a href="index.php?p=annonce">Annonce</a></li>
              <li><a href="index.php?p=fikr">Fikr</a></li>
              <li><a href="index.php?p=audio">Audio</a></li>
              <li><a href="index.php?p=contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quibusdam!</p>
            <form action="#" class="form-subscribe">
              <input type="email" class="form-control mb-3" placeholder="Enter Email">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>Copyright © 1441 - 2020 IslamNiger .
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <!--Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>-->
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="public/js/jquery-3.3.1.min.js"></script>
  <script src="public/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="public/js/jquery-ui.js"></script>
  <script src="public/js/popper.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/owl.carousel.min.js"></script>
  <script src="public/js/jquery.stellar.min.js"></script>
  <script src="public/js/jquery.countdown.min.js"></script>
  <script src="public/js/jquery.magnific-popup.min.js"></script>
  <script src="public/js/aos.js"></script>

  <script src="public/js/mediaelement-and-player.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

      for (var i = 0; i < total; i++) {
        new MediaElementPlayer(mediaElements[i], {
          pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
          shimScriptAccess: 'always',
          success: function () {
            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++) {
              target[j].style.visibility = 'visible';
            }
          }
        });
      }
    });
  </script>


  <script src="public/js/main.js"></script>

</body>
</html>