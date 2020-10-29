<?php
$title = "Audio";
ob_start();
$target = '';
if ($_SERVER["SERVER_NAME"] == 'localhost') {
    $target = "http://localhost/IslamNiger/";
} else {
    $target = "http://admin/";
}
/**
 * @var currentPage variable
 * représente la page courante
 * si elle est égale à 0, on lui attribue 1
 */
$currentPage = (int)($_GET['page'] ?? 1);
if($currentPage <= 0){
    throw new Exception("Numéro de page invalide");
    
}
/**
 * @var count variable
 * contient le nombre total d'annonce
 */
$count = Manager::Count('datas', 'id');
/**
 * @var perPage variable
 * représentant le nombre d'annonce à afficher par page
 */
$perPage = 4;
/**
 * @var pages variable
 * @param count
 * @param perPage
 * le nombre de page 
 */
$pages = ceil($count['total']/$perPage);
if ($currentPage > $pages){
    throw new Exception("Cette page n'existe pas");
}
/**
 * @var offset variable
 */
$offset = $perPage * ($currentPage - 1);
/**
 * @var link variable
 * lien de pagination
 */
$link = "index.php?p=audio";
if(isset($_GET['langue'])){//Filtre by langue
  $langue = $_GET['langue'];
  $sql = "SELECT datas.id, datas.titre, datas.date, datas.fikr, datas.chemin, fikrs.id as idFikr, fikrs.photo as path_url, fikrs.livre, fikrs.langue, fikrs.ville FROM datas, fikrs WHERE datas.fikr=fikrs.id AND fikrs.langue='$langue' GROUP BY idFikr LIMIT $perPage OFFSET $offset";
} elseif(isset($_GET['category'])){//Filtre by categorie
  $category = $_GET['category'];
  $sql = "SELECT datas.id, datas.titre, datas.date, datas.fikr, datas.chemin, fikrs.id as idFikr, fikrs.photo as path_url, fikrs.livre, fikrs.langue, fikrs.ville FROM datas, fikrs WHERE datas.fikr=fikrs.id AND fikrs.cfikr='$category' GROUP BY idFikr LIMIT $perPage OFFSET $offset";
} elseif(isset($_GET['ville'])){//Filtre by ville
  $ville = $_GET['ville'];
  $sql = "SELECT datas.id, datas.titre, datas.date, datas.fikr, datas.chemin, fikrs.id as idFikr, fikrs.photo as path_url, fikrs.livre, fikrs.langue, fikrs.ville FROM datas, fikrs WHERE datas.fikr=fikrs.id AND fikrs.ville='$ville'  GROUP BY idFikr LIMIT $perPage OFFSET $offset";
} elseif(isset($_GET['fikr'])){//Filtre by fikr
  $fikr = $_GET['fikr'];
  $sql = "SELECT datas.id, datas.titre, datas.date, datas.fikr, datas.chemin, fikrs.id as idFikr, fikrs.photo as path_url, fikrs.livre, fikrs.langue, fikrs.ville FROM datas, fikrs WHERE datas.fikr=fikrs.id AND fikrs.id='$fikr'  GROUP BY idFikr LIMIT $perPage OFFSET $offset";
} else {
  $sql = "SELECT datas.id, datas.titre, datas.date, datas.fikr, datas.chemin, fikrs.id as idFikr, fikrs.photo as path_url, fikrs.livre, fikrs.langue, fikrs.ville FROM datas, fikrs WHERE datas.fikr=fikrs.id GROUP BY idFikr LIMIT $perPage OFFSET $offset";
}
$data = Manager::getMultiplesRecords($sql);
?>
<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(public/images/voie4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
        <a href="index.php?p=home">Accueil</a><span class="mx-2 text-white">&bullet;</span> <span class="text-white">A lire et à télécharger à votre guise !</span>
      </div>
    </div>
  </div>
</div> 
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <?php
            if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                  //$sql = "SELECT datas.id, datas.titre, datas.date, datas.fikr, datas.chemin, fikrs.id idFikr, fikrs.photo as path_url, fikrs.titre, fikrs.livre, fikrs.langue, fikrs.ville FROM datas, fikrs WHERE datas.fikr=fikrs.id AND fikrs.id=? AND datas.id!=? LIMIT 2";
                  //$fikr = Manager::getMultiplesRecords($sql, [$value['fikr'], $value['id']]);
                  $fikr = Manager::getData('fikrs', 'id', $value['fikr'])['data'];
                  $langue = Manager::getData('langues', 'id', $value['fikr'])['data'];
                  $ville = Manager::getData('ville', 'id', $fikr['ville'])['data'];
                  // $langue = Manager::getData('langues', 'id', $value['fikr'])['data'];
                  // $ville = Manager::getData('ville', 'id', $fikr['ville'])['data'];
                ?>
                <div class="row">
                  <div class="d-block d-md-flex podcast-entry bg-white mb-5 col-lg-8" data-aos="fade-up">
                    <div class="image"  style="width: 48%; height: 100%; background-image: url('<?= $target.Manager::getData("files", "id", $value['path_url'])['data']['file_url']; ?>');"></div>
                    <div class="text">
                      <h6 class="font-weight-light"><a href="index.php?p=datas&fikr=<?= $value['id']?>"><?= $value['titre']?></a></h6>
                      <div class="text-white mb-3"><span class="text-black-opacity-05"><small>Publié le <?= $value['date']?></small><span class="sep">/</span> <small><a href="index.php?p=audio&langue=<?= $langue['id'];?>">#<?= $langue['titre'];?></small><span class="sep">/</span><small><a href="index.php?p=audio&fikr=<?= $fikr['id'];?>">#<?= $fikr['titre'];?></a></small> <span class="sep">/</span><small><a href="index.php?p=audio&ville=<?= $ville['id'];?>">#<?= $ville['titre'];?></a></small> </span></div>
                      <div class="text-white mb-3"> <a href="<?= $target.Manager::getData("files", "id", $value['chemin'])['data']['file_url'] ?>" download="<?= $value['titre']?>"><i class="fa fa-car"></i>Télécharger</a></span></div>
                      <div class="player">
                        <audio id="player2" preload="metadata" controls style="max-width: 100%">
                          <source src="<?= $target.Manager::getData("files", "id", $value['chemin'])['data']['file_url'] ?>" type="audio/mp3">
                        </audio>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                  
                    <div class="row">
                      <?php  
                        // $sql = "SELECT datas.id, datas.titre, datas.date, datas.fikr, datas.chemin, fikrs.id idFikr, fikrs.photo as path_url FROM datas, fikrs WHERE datas.fikr=fikrs.id AND datas.id!=? LIMIT 2";
                        // $fikr = Manager::getMultiplesRecords($sql, [$value['id']]);
                        $sql = "SELECT * FROM datas WHERE datas.fikr=? AND datas.id!=? LIMIT 2";
                        $fikr = Manager::getMultiplesRecords($sql, [$value['fikr'], $value['id']]);
                        //var_dump($data);die;
                        if (is_array($fikr) || is_object($fikr)) {
                          foreach ($fikr as $value) {?>
                          
                        
                        <div class="d-block podcast-entry bg-white mb-5 col-lg-12" data-aos="fade-up">
                        <h6 class="font-weight-light"><a href="index.php?p=datas&fikr=<?= $value['id']?>"><?= $value['titre']?></a></h6>
                        <div class="player">
                          <audio id="player2" preload="metadata" controls style="width: 100% !important">
                          <source src="<?= $target.Manager::getData("files", "id", $value['chemin'])['data']['file_url']; ?>" type="audio/mp3">
                        </audio>
                          </div>
                        </div>
                       
                        <?php } 
                      }?>
                    </div>
                      
                  </div>
                </div>
                <?php } 
            }
        ?>
      </div>
      <div class="col-lg-2">
        <div class="featured-user  mb-5 mb-lg-0">
          <div class="row">
            <!-- <div class="col-lg-6">
              <h3 class="mb-4">Langues</h3>
              <ul class="list-unstyled">
                <?php
                  $sql = "SELECT langues.id, langues.code, langues.titre, (SELECT COUNT(fikrs.id) FROM fikrs WHERE fikrs.langue=langues.id) as nombre FROM langues";
                  $data = Manager::getMultiplesRecords($sql);
                  //$data = Manager::getData("langues", true)['data'];
                  if (is_array($data) || is_object($data)) {
                      foreach ($data as $value) {
                      ?>
                    <li>
                      <a href="index.php?p=audio&langue=<?= $value['id']?>" class="d-flex align-items-center">
                        <img src="public/images/person_1.jpg" alt="Image" class="img-fluid mr-2">
                        <div class="podcaster">
                          <span class="d-block"><?= $value['titre']?></span>
                          <span class="small"><?= $value['nombre']?> fikrs</span>
                        </div>
                      </a>
                    </li>
                    <?php } 
                  }
                ?>
              </ul>
            </div> -->
            <div class="col-lg-6">
              <h3 class="mb-4">Catégorie de Dourous</h3>
              <ul class="list-unstyled">
                <?php
                  $sql = "SELECT cfikr.id, cfikr.titre, (SELECT COUNT(fikrs.id) FROM fikrs WHERE fikrs.cfikr=cfikr.id) as nombre FROM cfikr";
                  $data = Manager::getMultiplesRecords($sql);
                //$data = Manager::getData("cfikr", true)['data'];
                if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                    ?>
                  <li>
                    <a href="index.php?p=audio&category=<?= $value['id']?>" class="d-flex align-items-center">
                      <!--<img src="public/images/person_1.jpg" alt="Image" class="img-fluid mr-2">-->
                      <div class="podcaster">
                        <span class="d-block"><?= $value['titre']?></span>
                        <span class="small"><?= $value['nombre']?> fikrs</span>
                      </div>
                    </a>
                  </li>
                  <?php } 
                    }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <?php if($currentPage > 1):?>
                  <?php if($currentPage > 2) $link .= '&page=' . ($currentPage - 1);?>
                  <li><a href="<?= $link ?>" class="icon-keyboard_arrow_right">&laquo;</a></li>
                <?php endif; ?>
                <?php
                for ($i = 1; $i < $pages; $i++) {
                  if ($i == $currentPage) {
                    ?>
                    <li class="active"><span><?= $i; ?></span></li>
                    <?php
                  } else {?>
                    <li ><a href="index.php?p=audio&page=<?= $i; ?>"><span><?= $i; ?></span></a></li>
                    <?php  
                  }
                }?>
                <?php if($currentPage < $pages):?>
                  <li><a href="index.php?p=audio&page=<?= $currentPage + 1 ?>" class="icon-keyboard_arrow_left">&raquo;</a></li>
                <?php endif; ?>
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