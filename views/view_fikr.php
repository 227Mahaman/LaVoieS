<?php
$title = "Nos Fikrs";
ob_start();
?>
<div class="container pt-5 hero">
  <div class="row align-items-center text-center text-md-left">  
  <img src="public/images/voie.jpg" alt="Image" class="img-fluid">
  </div>
</div>
    
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <?php
            $target = '';
            if ($_SERVER["SERVER_NAME"] == 'localhost') {
                $target = "http://localhost/laVoieDesSalaf";
            } else {
                $target = "http:///admin/";
            }
            $sql = "SELECT fikrs.id, fikrs.titre, fikrs.date_ajout, fikrs.ville, fikrs.langue, fikrs.auteur, fikrs.livre, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre FROM fikrs";
            $data = Manager::getMultiplesRecords($sql);
            if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                  $oulema = Manager::getData('auteurs', 'id', $value['auteur'])['data'];
                  $langue = Manager::getData('langues', 'id', $value['langue'])['data'];
                  $ville = Manager::getData('ville', 'id', $value['ville'])['data'];
                ?>
                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                    <div class="image" style="background-image: url('public/images/img_1.jpg');"></div>
                    <div class="text">
                        <h3 class="font-weight-light"><a href="index.php?p=datas&fikr=<?= $value['id']?>"><?= $value['titre']?>, <?= $oulema['nom'] . ' ' . $oulema['prenom']?></a></h3>
                        <div class="text-white mb-3"><span class="text-black-opacity-05"><small>Publié le <?= $value['date_ajout']?> <span class="sep">/</span>Ville: <?= $ville['titre']?> <span class="sep">/</span>Langue: <?= $langue['titre']?></small></span></div>
                        <p>Nombre: <?= $value['nombre']?> | Livre: <?= $value['livre']?></p>
                    </div>
                </div>
                <?php } 
            }
        ?>
      </div>
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

<?php
$content = ob_get_clean();
require("template.php");
?>