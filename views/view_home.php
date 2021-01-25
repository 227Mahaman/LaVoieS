<?php
$title = "Accueil";
ob_start();
$target = '';
if ($_SERVER["SERVER_NAME"] == 'localhost') {
    $target = "http://localhost/IslamNiger/";
} else {
    $target = "http:///admin/";
}

$sql1 = "SELECT COUNT(id) as total FROM annonces WHERE type_annonce='Actualité'";
$actualites = Manager::getMultiplesRecords($sql1);
$sql2 = "SELECT COUNT(id) as total FROM annonces WHERE type_annonce='Annonce'";
$annonces = Manager::getMultiplesRecords($sql2);
?>
<style>
  /* .testimonial_section {
  display: block;
  overflow: hidden;
}
.testimonial_section:after {
  display: block;
  clear: both;
  content: "";
}
.testimonial_section .about_content {
  background-color: #020d26;
  padding-top: 77px;
  padding-right: 210px;
  padding-bottom: 62px;
  position: relative;
}
.testimonial_section .about_content .background_layer {
  background-color: #020d26;
  width: auto;
  margin-left: -200px;
  right: 0;
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
}
.testimonial_section .about_content .layer_content {
  position: relative;
  z-index: 9;
  height: 100%;
}
.testimonial_section .about_content .layer_content .section_title {
  margin-bottom: 24px;
  position: relative;
}
.testimonial_section .about_content .layer_content .section_title:after {
  display: block;
  clear: both;
  content: "";
}
.testimonial_section .about_content .layer_content .section_title h5 {
  color: #fff;
  font-family: "Open Sans";
  font-weight: 400;
  font-size: 15px;
  line-height: 28px;
  color: #818a8f;
  margin-top: -5px;
  margin-bottom: 6px;
}
.testimonial_section .about_content .layer_content .section_title h2 {
  font-family: "Titillium Web";
  font-weight: 300;
  font-size: 45px;
  line-height: 50px;
  padding-bottom: 51px;
  margin-bottom: 0px;
  color: #fff;
}
.testimonial_section .about_content .layer_content .section_title h2 strong {
  font-weight: 600 !important;
  width: 100%;
  display: block;
}
.testimonial_section .about_content .layer_content .section_title .heading_line {
  position: relative;
}
.testimonial_section .about_content .layer_content .section_title .heading_line span {
  transition: all 0.5s ease-in-out 0s;
  position: relative;
}
.testimonial_section .about_content .layer_content .section_title .heading_line span:after {
  content: "";
  right: auto;
  left: 69px;
  position: absolute;
  bottom: 28px;
  width: 17px;
  margin-left: 0;
  border-bottom-width: 3px;
  border-bottom-color: #cacaca;
  border-bottom-style: solid;
}
.testimonial_section .about_content .layer_content .section_title .heading_line:after {
  content: "";
  left: 1%;
  margin-left: 0;
  position: absolute;
  bottom: 28px;
  width: 59px;
  border-bottom-width: 3px;
  border-bottom-style: solid;
  border-bottom-color: #ff5e14;
}
.testimonial_section .about_content .layer_content .section_title p {
  color: #fff;
  margin: 0 0 15px;
}
.testimonial_section .about_content .layer_content a {
  color: #fff;
  text-transform: capitalize;
  font-size: 15px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s;
}
.testimonial_section .about_content .layer_content a i {
  font-size: 18px;
  vertical-align: middle;
}
.testimonial_section .about_content .layer_content a:hover {
  color: #ff5e14;
}
.testimonial_section .testimonial_box {
  margin-top: 60px !important;
  position: relative;
}
.testimonial_section .testimonial_box .testimonial_container {
  background-color: #ff5e14;
  margin-left: -170px !important;
  position: relative;
}
.testimonial_section .testimonial_box .testimonial_container .background_layer {
  background-color: #ff5e14;
  width: auto;
  margin-right: -200px;
  right: 0;
  background-image: url(../images/map.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content {
  position: relative;
  z-index: 9;
  height: 100%;
} */
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel {
  display: block;
  position: relative;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials {
  margin: 10px 0 10px 0;
  padding: 62px 0px 72px 50px;
  position: relative;
  text-align: center;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content {
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.13);
  margin-left: 150px;
  margin-top: 69px;
  padding: 45px 40px 45px 40px;
  z-index: 1;
  position: relative;
  background-color: #fff;
  transition: all 0.5s ease-in-out 0s;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content .testimonial_caption {
  margin-bottom: 15px;
  position: relative;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content .testimonial_caption:after {
  content: "";
  width: 30px;
  display: block;
  height: 2px;
  text-align: center;
  left: 46%;
  margin-top: 6px;
  background-color: #ff5e14;
  position: absolute;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content .testimonial_caption h6 {
  padding-top: 0;
  margin-bottom: -5px;
  font-size: 19px;
  font-weight: 600;
  line-height: 24px;
  color: #020d26;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content .testimonial_caption span {
  font-size: 12px;
  color: #9f9f9f;
  margin: 0;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content p {
  padding: 0;
  margin: 0;
  padding-top: 10px;
  font-size: 16px;
  line-height: 28px;
  font-weight: 400;
  color: #5d6576;
  font-style: italic;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .images_box .testimonial_img {
  border: none;
  position: absolute;
  top: 0;
  left: 55px;
  top: 80px;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .images_box .testimonial_img img {
  border: 5px solid #fff;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
  width: 35%;
}
.testimonial_section .testimonial_box .testimonial_container .owl-nav .owl-prev {
  position: absolute;
  top: 165px;
  right: 42px;
  border-radius: 0;
  background: #ff5e14;
  display: block;
  outline: 0;
  width: 34px;
  line-height: 34px;
  height: 34px;
  color: #fff;
  font-size: 23px;
  margin-top: -20px;
  transition: all 0.3s ease-in-out;
}
.testimonial_section .testimonial_box .testimonial_container .owl-nav .owl-prev:hover {
  background: #020d26;
}
.testimonial_section .testimonial_box .testimonial_container .owl-nav .owl-next {
  position: absolute;
  top: 165px;
  right: 5px;
  border-radius: 0;
  display: block;
  background: #ff5e14;
  outline: 0;
  width: 34px;
  text-align: center;
  line-height: 34px;
  height: 34px;
  color: #fff;
  font-size: 23px;
  margin-top: -20px;
  transition: all 0.3s ease-in-out;
}
.testimonial_section .testimonial_box .testimonial_container .owl-nav .owl-next:hover {
  background: #020d26;
}

@media all and (max-width: 991px) {
  .testimonial_section .about_content {
    padding-right: 15px !important;
  }
  .testimonial_section .about_content .background_layer {
    width: 200% !important;
  }
  .testimonial_section .testimonial_box {
    margin-top: 0 !important;
  }
  .testimonial_section .testimonial_box .background_layer {
    width: 200% !important;
    margin-left: -200px;
  }
  .testimonial_section .testimonial_box .about_content {
    padding-left: 15px !important;
    padding-right: 15px !important;
    margin-top: 28% !important;
  }
  .testimonial_section .testimonial_box .testimonial_container {
    margin-left: -15px !important;
  }
  .testimonial_section .testimonial_box .testimonial_container .testimonials {
    margin: 0px 0 20px 0;
  }
  .testimonial_section .testimonial_box .testimonial_container .testimonials .testimonial_content {
    margin-left: -36px !important;
  }
  .testimonial_section .testimonial_box .testimonial_container .testimonials .images_box {
    display: none;
  }

  .owl-nav {
    position: relative;
bottom: 450px;
z-index: 999;
color: green;
left: 800px;
width: 30% !important;
  }
}
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!---->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner site-blocks-cover overlay inner-page-cover" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/images/voie4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/images/wk2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/images/wk1.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <!--Annonces-->
        <div class="row bg-light block-13">
          <p class="text-success"><span><a href="index.php?p=annonce" class="icon-keyboard_arrow_left text-success"><h4 style="text-align:center;">Annonces &raquo;</h4> </a></span></p>
        </div>
        <div class="row">
          <?php
            $sql = "SELECT * FROM annonces WHERE type_annonce='Annonce' ORDER BY date_annonce DESC LIMIT 3";
            //$sql = "SELECT * FROM annonces WHERE type_annonce='Annonce' ORDER BY date_annonce DESC LIMIT $perPage OFFSET $offset";
            $data = Manager::getMultiplesRecords($sql);
            //$data = Manager::getData("annonces", true)['data'];
            if (is_array($data) || is_object($data)) {
              foreach ($data as $value) {
              ?>
              <div class="col-lg-4">
                <div class="d-block  podcast-entry bg-white mb-5" data-aos="fade-up">
                  <img style="width: 100%; height: 100%;" src="<?= $target.Manager::getData("files", "id", $value['photo'])['data']['file_url']; ?>" alt="">
                  <div class="text" style="width: 100%;">
                    <h5  class="font-weight-light"><a href="index.php?p=article&id=<?= $value['id']?>"><?= $value['titre']?></a></h5>
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small><?= $value['auteur']?> <span class="sep">/</span><?= $value['date_event']?> à <?= $value['time_event']?> <span class="sep">/</span><?= $value['lieu']?></small></span></div>
                  </div>
                </div>
              </div>
              <?php
              } 
            }
          ?>
        </div>
        <!--Actualités-->
        <div class="row">
          <div class="col-lg-12">
          <div class="bg-light block-13">
          <p class="text-success"><span><a href="index.php?p=actualite" class="icon-keyboard_arrow_left text-success"><h4>Actualités &raquo;</h4> </a></span></p>
          </div>
            <div class="testimonial_owlCarousel owl-carousel">
            <?php
              //$sql = "SELECT * FROM annonces ORDER BY date_annonce DESC LIMIT 1";
              $sql = "SELECT * FROM annonces WHERE type_annonce='Actualité' ORDER BY date_annonce DESC";
              $data = Manager::getMultiplesRecords($sql);
              //$data = Manager::getData("annonces", true)['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                ?>
                <div class="testimonials"> 
                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                  <img style="width: 48%; height: 100%;" src="<?= $target.Manager::getData("files", "id", $value['photo'])['data']['file_url']; ?>" alt="">
                  <div class="text">
                    <h5  class="font-weight-light"><a href="index.php?p=article&id=<?= $value['id']?>"><?= $value['titre']?></a></h5>
                    <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By <?= $value['auteur']?> <span class="sep">/</span> Date: <?= $value['date_event']?> à <?= $value['time_event']?> <span class="sep">/</span>Lieu: <?= $value['lieu']?></small></span></div>
                    <p><?= $value['description'];?></p>
                  </div>
                </div>
                </div>
                <?php
                } 
              }?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="featured-user  mb-5 mb-lg-0">
          <h3 class="mb-4">Recent Dourous</h3>
          <ul class="list-unstyled">
            <?php
              $sql = "SELECT fikrs.id, fikrs.titre, fikrs.date_ajout, fikrs.ville, fikrs.langue, fikrs.auteur, fikrs.livre, fikrs.photo, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre FROM fikrs ORDER BY fikrs.date_ajout ASC LIMIT 8";
              $data = Manager::getMultiplesRecords($sql);
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                  $oulema = Manager::getData('auteurs', 'id', $value['auteur'])['data'];
                  $langue = Manager::getData('langues', 'id', $value['langue'])['data'];
                  $ville = Manager::getData('ville', 'id', $value['ville'])['data'];
                ?>
                <li>
                  <a href="#" class="d-flex align-items-center">
                    <div class="podcaster">
                      <span class="d-block"><?= $value['titre']?>, <?= $oulema['nom'] . ' ' . $oulema['prenom']?></span>
                      <span class="small">Nombre: <?= $value['nombre']?> </span>
                    </div>
                  </a>
                </li>
                <?php } 
              }
            ?>
            
          </ul>
        </div>
      </div>
      <!--<div class="container" data-aos="fade-up">
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
      </div>-->
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="featured-user  mb-5 mb-lg-0">
          <h3 class="mb-4">Popular Podcaster</h3>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="d-flex align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-2">
                <div class="podcaster">
                  <span class="d-block">Claire Stanford</span>
                  <span class="small">32,420 podcasts</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-2">
                <div class="podcaster">
                  <span class="d-block">Dianne Winston</span>
                  <span class="small">12,381 podcasts</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-2">
                <div class="podcaster">
                  <span class="d-block">Borris Larry</span>
                  <span class="small">9,291 podcasts</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-2">
                <div class="podcaster">
                  <span class="d-block">Garry Smith</span>
                  <span class="small">3,291 podcasts</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mr-2">
                <div class="podcaster">
                  <span class="d-block">Gerson Stack</span>
                  <span class="small">1,092 podcasts</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center">
                <img src="images/person_6.jpg" alt="Image" class="img-fluid mr-2">
                <div class="podcaster">
                  <span class="d-block">Jenna Stone</span>
                  <span class="small">911 podcasts</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
            <!-- <div class="image" style="background-image: url('images/img_1.jpg');"></div> -->
            <div class="text">
              <h3 class="font-weight-light"><a href="single-post.html">Episode 08: How To Create Web Page Using Bootstrap 4</a></h3>
              <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span class="sep">/</span> 16 September 2017 <span class="sep">/</span> 1:30:20</small></span></div>
              <div class="player">
                <audio id="player2" preload="none" controls style="max-width: 100%">
                  <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                  </audio>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
            <!-- <div class="image" style="background-image: url('images/img_1.jpg');"></div> -->
            <div class="text">
              <h3 class="font-weight-light"><a href="single-post.html">Episode 08: How To Create Web Page Using Bootstrap 4</a></h3>
              <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span class="sep">/</span> 16 September 2017 <span class="sep">/</span> 1:30:20</small></span></div>
              <div class="player">
                <audio id="player2" preload="none" controls style="max-width: 100%">
                  <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                  </audio>
                </div>
              </div>
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
                <h2 class="font-weight-bold text-black">Nos Partenaires</h2>
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
        <h2 class="font-weight-bold text-black">Nos Oulèmas</h2>
      </div>
    </div>
    <div class="nonloop-block-13 owl-carousel">
      <?php
        $sql = "SELECT auteurs.id, auteurs.nom, auteurs.prenom, auteurs.statut, auteurs.ville, auteurs.description, auteurs.photo, (SELECT COUNT(fikrs.id) FROM fikrs WHERE fikrs.auteur=auteurs.id) as nombre FROM auteurs";
        $data = Manager::getMultiplesRecords($sql);
        //$data = Manager::getData('auteurs', true)['data'];
        if (is_array($data) || is_object($data)) {
          foreach ($data as $value) {
            $statut = Manager::getData('statuts', 'id', $value['statut'])['data'];
            $ville = Manager::getData('ville', 'id', $value['ville'])['data'];
          ?>
          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="<?= $target.Manager::getData("files", "id", $value['photo'])['data']['file_url']; ?>" alt="<?= $value['nom'] . ' ' . $value['prenom'];?>" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5"><?= $statut['grade'] . ' ' . $value['nom'] . ' ' . $value['prenom'];?></h3>
              <div class="text-white mb-3"><span class="text-black-opacity-05"><small>Ville: <?= $ville['titre']?> <!--<span class="sep">/</span>Fikrs: <?//= $value['nombre']?>--></small></span></div>
              <!--<p><?//= $value['description'];?></p>-->
            </div>
          </div>
          <?php } 
        }
      ?>
    </div>
  </div>
</div>
    
<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('public/images/voie3.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
        <h2>Subscribe</h2>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit nihil saepe libero sit odio obcaecati veniam.</p>
        <!--<form action="#" method="post" class="site-block-subscribe">
          <div class="input-group mb-3">
            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
            </div>
          </div>
        </form>-->
      </div>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require("template.php");
?>