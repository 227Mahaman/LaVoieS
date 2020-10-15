<?php
$title = "Nos Fikrs";
ob_start();
$target = '';
if ($_SERVER["SERVER_NAME"] == 'localhost') {
  $target = "http://localhost/IslamNiger/";
} else {
  $target = "http:///admin/";
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
$count = Manager::Count('fikrs', 'id');
/**
 * @var perPage variable
 * représentant le nombre d'annonce à afficher par page
 */
$perPage = 3;
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
$link = "index.php?p=fikr";
?>
<div class="site-blocks-cover inner-page-cover bg-light mb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center">
        <a href="#">Les différents conférences, cours, lectures ...</a><!--<span class="mx-2">&bullet;</span> Jun 25, 2020 <span class="mx-2">&bullet;</span> 1:30:20-->
        <h1 class="mb-3">FIKRS</h1>
      </div>
    </div>
  </div>
</div>
<!--<div class="container pt-5 hero">
  <div class="row align-items-center text-center text-md-left">  
  <img src="public/images/voie.jpg" alt="Image" class="img-fluid">
  </div>
</div>-->
    
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="featured-user  mb-5 mb-lg-0">
          <h3 class="mb-4">Villes</h3>
          <ul class="list-unstyled">
            <?php
              $sql = "SELECT ville.id, ville.titre, (SELECT COUNT(fikrs.id) FROM fikrs WHERE fikrs.ville=ville.id) as nombre FROM ville";
              $data = Manager::getMultiplesRecords($sql);
              if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                  ?>
                <li>
                  <a href="index.php?p=fikr&ville=<?= $value['id']?>" class="d-flex align-items-center">
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
        </div>
      </div>
      <div class="col-lg-8">
        <?php
            if(isset($_GET['langue'])){//Filtre by langue
              $langue = $_GET['langue'];
              $sql = "SELECT fikrs.id, fikrs.titre, fikrs.date_ajout, fikrs.ville, fikrs.langue, fikrs.auteur, fikrs.livre, fikrs.photo, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre FROM fikrs WHERE fikrs.langue='$langue'";
            } elseif(isset($_GET['category'])){//Filtre by categorie
              $category = $_GET['category'];
              $sql = "SELECT fikrs.id, fikrs.titre, fikrs.date_ajout, fikrs.ville, fikrs.langue, fikrs.auteur, fikrs.livre, fikrs.photo, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre FROM fikrs WHERE fikrs.cfikr='$category'";
            } elseif(isset($_GET['ville'])){//Filtre by ville
              $ville = $_GET['ville'];
              $sql = "SELECT fikrs.id, fikrs.titre, fikrs.date_ajout, fikrs.ville, fikrs.langue, fikrs.auteur, fikrs.livre, fikrs.photo, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre FROM fikrs WHERE fikrs.ville='$ville'";
            } else {
              $sql = "SELECT fikrs.id, fikrs.titre, fikrs.date_ajout, fikrs.ville, fikrs.langue, fikrs.auteur, fikrs.livre, fikrs.photo, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre FROM fikrs";
            }
            $data = Manager::getMultiplesRecords($sql);
          //var_dump($data);die;
            if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                  $oulema = Manager::getData('auteurs', 'id', $value['auteur'])['data'];
                  $langue = Manager::getData('langues', 'id', $value['langue'])['data'];
                  $ville = Manager::getData('ville', 'id', $value['ville'])['data'];
                ?>
                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                    <div class="image" style="background-image: url('<?= $target.Manager::getData("files", "id", $value['photo'])['data']['file_url']; ?>');"></div>
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
      <div class="col-lg-2">
        <div class="featured-user  mb-5 mb-lg-0">
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
                  <a href="index.php?p=fikr&langue=<?= $value['id']?>" class="d-flex align-items-center">
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
          <hr>
          <h3 class="mb-4">Catégorie de Fikr</h3>
          <ul class="list-unstyled">
            <?php
              $sql = "SELECT cfikr.id, cfikr.titre, (SELECT COUNT(fikrs.id) FROM fikrs WHERE fikrs.cfikr=cfikr.id) as nombre FROM cfikr";
              $data = Manager::getMultiplesRecords($sql);
            //$data = Manager::getData("cfikr", true)['data'];
            if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                ?>
              <li>
                <a href="index.php?p=fikr&category=<?= $value['id']?>" class="d-flex align-items-center">
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
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <?php if($currentPage > 1):?>
                  <?php if($currentPage > 2) $link .= '&page=' . ($currentPage - 1);?>
                  <li><a href="<?= $link ?>" class="icon-keyboard_arrow_right">&laquo; <?= $currentPage - 1 ?></a></li>
                <?php endif; ?>
                <li class="active"><span><?= $currentPage; ?></span></li>
                <?php if($currentPage < $pages):?>
                  <li><a href="index.php?p=fikr&page=<?= $currentPage + 1 ?>" class="icon-keyboard_arrow_left"><?= $currentPage + 1 ?> &raquo;</a></li>
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