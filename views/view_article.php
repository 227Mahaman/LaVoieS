<?php
$title = "Article";
ob_start();
$target = '';
if ($_SERVER["SERVER_NAME"] == 'localhost') {
    $target = "http://localhost/IslamNiger/";
} else {
    $target = "http:///admin/";
}
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $annonces = Manager::getData("annonces","id", $id)['data'];
}
$sql1 = "SELECT COUNT(id) as total FROM annonces WHERE type_annonce='Actualité'";
$actualites = Manager::getMultiplesRecords($sql1);
$sql2 = "SELECT COUNT(id) as total FROM annonces WHERE type_annonce='Annonce'";
$annonces = Manager::getMultiplesRecords($sql2);
?>

<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('<?= $target.Manager::getData("files", "id", $annonces['photo'])['data']['file_url']; ?>');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white"><?= $annonces['titre']?></h1>
            <a href="index.php?p=home">Accueil</a><span class="mx-2 text-white">&bullet;</span> <span class="text-white"><?= $annonces['date_event']?> à <?= $annonces['time_event']?>.</span>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="featured-user  mb-5 mb-lg-0">
                    <h3 class="mb-4">Articles</h3>
                        <ul class="list-unstyled">
                            <li>
                            <a href="#" class="d-flex align-items-center">
                                <img src="public/images/person_1.jpg" alt="Image" class="img-fluid mr-2">
                                <div class="podcaster">
                                <span class="d-block">Actualité</span>
                                <span class="small"><?= $actualites['0']['total'];?> articles</span>
                                </div>
                            </a>
                            </li>
                            <hr>
                            <li>
                            <a href="#" class="d-flex align-items-center">
                                <img src="public/images/person_1.jpg" alt="Image" class="img-fluid mr-2">
                                <div class="podcaster">
                                <span class="d-block">Annonces</span>
                                <span class="small"><?= $annonces['0']['total'];?> articles</span>
                                </div>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                  <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                      <!--<div class="image" style="background-image: url('<?//= $target.Manager::getData("files", "id", $annonces['photo'])['data']['file_url']; ?>');"></div>-->
                      <div class="text">
                          <!--<h3 class="font-weight-light"><a href="index.php?p=annonce&id=<//?= $annonces['id']?>"><?//= $annonces['titre']?></a></h3>-->
                          <div class="text-white mb-3"><h3><span class="text-black-opacity-05"><small>By <?= $annonces['auteur']?> <span class="sep">/</span>Lieu: <?= $annonces['lieu']?></small></span></h3></div>
                          <p><?= $annonces['description']?></p>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require("template.php");
?>