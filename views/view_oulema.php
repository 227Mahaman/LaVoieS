<?php
$title = "Oulema";
ob_start();
$target = '';
if ($_SERVER["SERVER_NAME"] == 'localhost') {
    $target = "http://localhost/IslamNiger/";
} else {
    $target = "http:///admin/";
}
?>
<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(public/images/voie4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
        <!--<h1 class="text-white">Au Nom d'ALLAH CLEMENT ET MISERICORDIEUX</h1>-->
        <a href="index.php?p=home">Accueil</a><span class="mx-2 text-white">&bullet;</span> <span class="text-white">Bibliographie de nos savants</span>
      </div>
    </div>
  </div>
</div> 
<!--<div class="site-section">
  <div class="container" data-aos="fade-up">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="font-weight-bold text-black">Nos Oulèmas</h2>
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
    </div>
  </div>
</div>-->

<div class="site-section bg-light block-13">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <!--<h2 class="font-weight-bold text-black">Featured Guests</h2>-->
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
              <div class="text-white mb-3"><span class="text-black-opacity-05"><small>Ville: <?= $ville['titre']?> <span class="sep">/</span>Fikrs: <?= $value['nombre']?></small></span></div>
              <p><?= substr($value['description'], 0, 125) . '...';?></p>
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