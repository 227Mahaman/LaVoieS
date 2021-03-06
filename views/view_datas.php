<?php
$title = "Audio des fikrs";
ob_start();
$target = '';
if ($_SERVER["SERVER_NAME"] == 'localhost') {
    $target = "http://localhost/IslamNiger/";
} else {
    $target = "http://admin/";
}
if(isset($_GET['fikr'])){
    $id = $_GET['fikr'];
    $sql = "SELECT datas.id, datas.titre, datas.date, datas.fikr, datas.chemin, (SELECT fikrs.photo FROM fikrs WHERE datas.fikr=fikrs.id) as path_url FROM datas WHERE datas.fikr='$id'";
    //$data = Manager::getData('datas', 'id', $id)['data'];
    $data = Manager::getMultiplesRecords($sql);
} else {
    $data = Manager::getData('datas', true)['data'];
}
$fikr = Manager::getData('fikrs', 'id', $id)['data'];
$oulema = Manager::getData('auteurs', 'id', $fikr['auteur'])['data'];
/**
 * @var currentPage variable
 * représente la page courante
 * si elle est égale à 0, on lui attribue 1
 */
// $currentPage = (int)($_GET['page'] ?? 1);
// if($currentPage <= 0){
//     throw new Exception("Numéro de page invalide");
    
// }
/**
 * @var count variable
 * contient le nombre total d'annonce
 */
//$count = Manager::Count('datas', 'id');
/**
 * @var perPage variable
 * représentant le nombre d'annonce à afficher par page
 */
//$perPage = 3;
/**
 * @var pages variable
 * @param count
 * @param perPage
 * le nombre de page 
 */
// $pages = ceil($count['total']/$perPage);
// if ($currentPage > $pages){
//     throw new Exception("Cette page n'existe pas");
// }
/**
 * @var offset variable
 */
//$offset = $perPage * ($currentPage - 1);
/**
 * @var link variable
 * lien de pagination
 */
//$link = "index.php?p=datas";
?>
<div class="site-blocks-cover inner-page-cover bg-light mb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center">
        <a href="#">Les fichiers audios du fikr</a><!--<span class="mx-2">&bullet;</span> Jun 25, 2020 <span class="mx-2">&bullet;</span> 1:30:20-->
        <h1 class="mb-3"><?= $fikr['titre']?></h1>
        <h1 class="mb-2">Shaykh <?= $oulema['nom']?></h1>
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
      <div class="col-lg-9">
        <?php
            if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                  //$fikr = Manager::getData('fikrs', 'id', $value['fikr'])['data'];
                ?>
                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                    <div class="image" style="background-image: url('<?= $target.Manager::getData("files", "id", $value['path_url'])['data']['file_url']; ?>');"></div>
                    <div class="text">
                        <h3 class="font-weight-light"><a href="index.php?p=datas&fikr=<?= $value['id']?>"><?= $value['titre']?>, <?= $fikr['titre'];?></a></h3>
                        <div class="text-white mb-3"><span class="text-black-opacity-05"><small>Publié le <?= $value['date']?></small> <span class="sep">/</span><a href="<?= $target.Manager::getData("files", "id", $value['chemin'])['data']['file_url'] ?>" download="<?= $value['titre']?>"><i class="fa fa-car"></i>Télécharger</a></span></div>
                        <div class="player">
                            <audio id="player2" preload="metadata" controls loop style="max-width: 100%" download>
                            <source src="<?= $target.Manager::getData("files", "id", $value['chemin'])['data']['file_url'] ?>" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <?php } 
            }
        ?>
      </div>
      <div class="col-lg-3">
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
                <?//php if($currentPage > 1):?>
                  <?//php if($currentPage > 2) $link .= '&page=' . ($currentPage - 1);?>
                  <li><a href="<?//= $link ?>" class="icon-keyboard_arrow_right">&laquo; <?//= $currentPage - 1 ?></a></li>
                <?//php endif; ?>
                <li class="active"><span><?//= $currentPage; ?></span></li>
                <?//php if($currentPage < $pages):?>
                  <li><a href="index.php?p=datas&page=<?//= $currentPage + 1 ?>" class="icon-keyboard_arrow_left"><?//= $currentPage + 1 ?> &raquo;</a></li>
                <?//php endif; ?>
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