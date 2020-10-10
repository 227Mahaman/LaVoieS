<?php
$title = "Accueil";
ob_start();
?>

<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(public/images/voie.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white">Au Nom d'ALLAH CLEMENT ET MISERICORDIEUX</h1>
            <a href="index.php?p=home">Accueil</a><span class="mx-2 text-white">&bullet;</span> <span class="text-white">Que le salut soit sur notre Prophète Mohammed et sa famille.</span>
          </div>
        </div>
      </div>
    </div> 
<!--<div class="container pt-5 hero">
  <div class="row align-items-center text-center text-md-left">
    <div class="col-lg-4">
      <img src="public/images/logo.png" alt="Image" class="img-fluid">
      <h1 class="mb-3 display-3">Bismillah</h1>
      <p>Au nom d'ALLAH, le Tout Miséricordieux, le très Miséricordieux!</p>
    </div>
    <div class="col-lg-8">
      <img src="public/images/voie.jpg" alt="Image" class="img-fluid">    
    </div>
  </div>
</div>-->
    

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="featured-user  mb-5 mb-lg-0">
                        <h3 class="mb-4">Actualités</h3>
                        <ul class="list-unstyled">
                            <li>
                            <a href="#" class="d-flex align-items-center">
                                <img src="public/images/person_1.jpg" alt="Image" class="img-fluid mr-2">
                                <div class="podcaster">
                                <span class="d-block">Claire Stanford</span>
                                <span class="small">32,420 podcasts</span>
                                </div>
                            </a>
                            </li>
                        </ul>
                        <hr>
                        <h3 class="mb-4">Fikrs</h3>
                        <ul class="list-unstyled">
                          <?php
                          $target = '';
                          if ($_SERVER["SERVER_NAME"] == 'localhost') {
                              $target = "http://localhost/laVoieDesSalaf";
                          } else {
                              $target = "http:///admin/";
                          }
                          $data = Manager::getData("cfikr", true)['data'];
                          if (is_array($data) || is_object($data)) {
                              foreach ($data as $value) {
                              ?>
                            <li>
                            <a href="index.php?p=fikrs&id=<?= $value['titre']?>" class="d-flex align-items-center">
                                <img src="public/images/person_1.jpg" alt="Image" class="img-fluid mr-2">
                                <div class="podcaster">
                                <span class="d-block"><?= $value['titre']?></span>
                                <span class="small">32,420 podcasts</span>
                                </div>
                            </a>
                            </li>
                            <?php } 
                              }
                          ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?php
                        $target = '';
                        if ($_SERVER["SERVER_NAME"] == 'localhost') {
                            $target = "http://localhost/laVoieDesSalaf";
                        } else {
                            $target = "http:///admin/";
                        }
                        $data = Manager::getData("annonces", true)['data'];
                        if (is_array($data) || is_object($data)) {
                            foreach ($data as $value) {
                            ?>
                            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                                <div class="image" style="background-image: url('public/images/img_1.jpg');"></div>
                                <div class="text">
                                    <h3 class="font-weight-light"><a href="single-post.html"><?= $value['titre']?></a></h3>
                                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By <?= $value['auteur']?> <span class="sep">/</span> Date: <?= $value['date_event']?> à <?= $value['time_event']?> <span class="sep">/</span>Lieu: <?= $value['lieu']?></small></span></div>
                                    <p><?= $value['description']?></p>
                                </div>
                            </div>
                            <?php } 
                        }
                    ?>
                </div>
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="site-block-27">
                                <ul>
                                    <li><a href="#" class="icon-keyboard_arrow_left"></a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#" class="icon-keyboard_arrow_right"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container" data-aos="fade-up">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-bold text-black">Behind The Mic</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="team-member">
                        <img src="public/images/person_1.jpg" alt="Image" class="img-fluid">
                        <div class="text">
                            <h2 class="mb-2 font-weight-light h4">Megan Smith</h2>
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="team-member">
                        <img src="public/images/person_2.jpg" alt="Image" class="img-fluid">
                        <div class="text">
                            <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="team-member">
                        <img src="public/images/person_3.jpg" alt="Image" class="img-fluid">
                        <div class="text">
                            <h2 class="mb-2 font-weight-light h4">Philip Martin</h2>
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="team-member">
                        <img src="public/images/person_4.jpg" alt="Image" class="img-fluid">
                        <div class="text">
                            <h2 class="mb-2 font-weight-light h4">Steven Ericson</h2>
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="team-member">
                        <img src="public/images/person_5.jpg" alt="Image" class="img-fluid">
                        <div class="text">
                            <h2 class="mb-2 font-weight-light h4">Nathan Dumlao</h2>
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="team-member">
                        <img src="public/images/person_6.jpg" alt="Image" class="img-fluid">
                        <div class="text">
                            <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light block-13">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="font-weight-bold text-black">Featured Guests</h2>
          </div>
        </div>
        <div class="nonloop-block-13 owl-carousel">

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="public/images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Megan Smith</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="public/images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Brooke Cagle</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="public/images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Philip Martin</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="public/images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Steven Ericson</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="public/images/person_5.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Nathan Dumlao</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="public/images/person_6.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Brook Smith</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?</p>
            </div>
          </div>

        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(public/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <h2>Subscribe</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit nihil saepe libero sit odio obcaecati veniam.</p>
            <form action="#" method="post" class="site-block-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php
$content = ob_get_clean();
require("template.php");
?>