<?php
$title = "Annonce";
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
//$count = Manager::Count('annonces', 'id');
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
$pages = ceil($annonces['0']['total']/$perPage);
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
$link = "index.php?p=annonce";
?>

<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('public/images/voie4.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
    <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white">Annonces</h1>
        <a href="index.php?p=home">Accueil</a><span class="mx-2 text-white">&bullet;</span> <span class="text-white">Article.</span>
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
                    <?php
                        $data = Manager::getData("annonces", 'type_annonce', 'Annonce', true)['data'];
                        if (is_array($data) || is_object($data)) {
                            foreach ($data as $value) {
                            ?>
                            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                                <div class="image" style="background-image: url('<?= $target.Manager::getData("files", "id", $value['photo'])['data']['file_url']; ?>');"></div>
                                <div class="text">
                                    <h3 class="font-weight-light"><a href="index.php?p=article&id=<?= $value['id']?>"><?= $value['titre']?></a></h3>
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
                                    <?php if($currentPage > 1):?>
                                    <?php if($currentPage > 2) $link .= '&page=' . ($currentPage - 1);?>
                                    <li><a href="<?= $link ?>" class="icon-keyboard_arrow_right">&laquo; <?= $currentPage - 1 ?></a></li>
                                    <?php endif; ?>
                                    <li class="active"><span><?= $currentPage; ?></span></li>
                                    <?php if($currentPage < $pages):?>
                                    <li><a href="index.php?p=annonce&page=<?= $currentPage + 1 ?>" class="icon-keyboard_arrow_left"><?= $currentPage + 1 ?> &raquo;</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
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