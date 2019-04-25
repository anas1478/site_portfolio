<?php


require_once '../connexion/functions.php';
//--------les requette pour l'index front --------------------


//------------------table utilisateur--------------------
$qu=$db->query('SELECT * from utilisateur');
$utilisateur= $qu->fetch(PDO::FETCH_ASSOC);
// ------------------table competences--------------------
$qc=$db->query('SELECT * from competences');
$competences= $qc->fetchAll(PDO::FETCH_ASSOC);
//------------------table experiences--------------------
// $qe=$db->query('SELECT * from '.$xml->table5);
// $experiences= $qe->fetch(PDO::FETCH_ASSOC);
//------------------table titre_cv--------------------
// $qt=$db->query('SELECT * from '.$xml->table6);
// $titre_cv= $qt->fetch(PDO::FETCH_ASSOC);
//------------------table realisations--------------------
$qr=$db->query('SELECT * from realisations');
$realisations= $qr->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>



<!-- recuperation du header en php -->

<?php require_once 'header.php' ?>
<!-- Navigation area -->
<section id="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="logo"><a data-scroll href="#body" class="logo-text"><?=$utilisateur['prenom']?>
                        <?=$utilisateur['nom']?></a></div>
            </div>
            <div class="col-xs-6">
                <div class="nav">
                    <a href="#" data-placement="bottom" title="Menu" class="menu" data-toggle="dropdown"><i
                            class="pe-7s-menu"></i></a>
                    <div class="dropdown-menu">
                        <div class="arrow-up"></div>
                        <ul>
                            <li><a data-scroll href="#body">accueil <i class="pe-7s-home"></i></a><span
                                    class="menu-effect"></span></li>
                            <li><a data-scroll href="#services">Compétences<i class="pe-7s-config"></i></a><span
                                    class="menu-effect"></span></li>
                            <li><a data-scroll href="#portfolio">Réalisations<i class="pe-7s-glasses"></i></a><span
                                    class="menu-effect"></span></li>
                            <li><a data-scroll href="#contact">contact<i class="pe-7s-help1"></i></a><span
                                    class="menu-effect"></span></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Content Area -->

<!-- services section -->

<section id="services" class="service-area">
    <div class="container">
        <h2 class="block_title">Competences</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="services">
                    <div class="service-wrap">
                        <i class="fab fa-html5 fa-4x"></i>
                        <!-- <i class="pe-7s-science pe-dj pe-va"></i> -->
                        <h3><?= $competences[0]['competence']?></h3>
                        <p><?= $competences[0]['niveau']?></p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-sm-6">
                <div class="services">
                    <div class="service-wrap css">
                        <i class="fab fa-css3-alt fa-4x"></i>
                        <h3><?= $competences[1]['competence']?></h3>
                        <p><?= $competences[1]['niveau']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="services">
                    <div class="service-wrap jss">
                        <i class="fab fa-js fa-4x"></i>
                        <h3><?= $competences[2]['competence']?></h3>
                        <p><?= $competences[2]['niveau']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="services">
                    <div class="service-wrap php">
                        <i class="fab fa-php fa-4x"></i>
                        <h3><?= $competences[3]['competence']?></h3>
                        <p><?= $competences[3]['niveau']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- services -->

<!-- Portfolio Area -->

<section id="portfolio" class="portfolio-area">
    <div class="container">
        <h2 class="block_title">Réalisations</h2>
        <div class="row port cs-style-3 h-50">

            <?php foreach($realisations as $realisation => $valeur) : ?>
            <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                <figure class="h-25">
                    <div class="img-card"
                        style="background: url('<?=$realisations[$realisation]['photo']?>') no-repeat;background-size: cover; background-position: center 0">
                    </div>
                    <!-- <img class="img-card h-25" src="<?php//$realisations[$realisation]['photo']?>" alt="réalisations"> -->

                    <figcaption>
                        <h3><?=$realisations[$realisation]['titre']?></h3>
                        <span><?=$realisations[$realisation]['description']?></span>
                        <a href="details.php?action=voir&id=<?=$realisations[$realisation]['id_realisations']?>"
                            class="button">voir</a>
                    </figcaption>
                </figure>
            </div>
            <?php endforeach ?>
        </div>
        <div class="col-xs-12">            
                <div  type="submit" class="btn-center"><a href="../facture/"class="big button">facture en JS</a></div>
            </div>
      <!-- telecharger mon cv -->
            <div class="col-xs-12">            
                <div  type="submit" class="btn-center"><a href="../img/CV.pdf" download="CV.pdf"  class="big button">Mon CV</a></div>
            </div>
        



        
    </div><!-- container -->
</section><!-- portfolio -->
<div id="bordure1" style="width:100%;"></div>

<!-- Testimonial Area -->

<section id="testimonial" class="testimonial-area">
    <div class="container">
        <h2 class="block_title">Témoignage</h2>
        <div class="row">
            <div class="col-xs-12">
            </div>
            <div id="testimonial-container" class="col-xs-12">
                <div class="testimonila-block">
                    <img src="../img/logo.jpg" alt="clients" class="selfshot">
                    <p>"Apprenant fort sympathique, travailleur, toujours prêt à aider les autres."</p>
                    <strong>Sandra Hérisson.
                    </strong>
                    <br>
                    <small>formatrice au PoleS</small>
                </div>
            </div>
        </div>
    </div><!-- container -->
</section><!-- testimonial -->

<!-- Contact Area -->

<section id="contact" class="mapWrap">
    <div id="bordure2" style="width:100%;"></div>

    <div id="contact-area">
        <div class="container">
            <h2 class="block_title">infos</h2>
            <div class="row">
                <div class="col-xs-12">
                </div>
                <div class="col-sm-6">
                    <div class="moreDetails">
                        <h2 class="con-title">à propos</h2>
                        <p> <?=$utilisateur['apropos']?> </p>
                        <ul class="address">
                            <li><i class="pe-7s-map-marker"></i><span> <?=$utilisateur['ville']?>,<br>
                                    <?=$utilisateur['pays']?></span></li>
                            <li><i class="pe-7s-mail"></i><span> <?=$utilisateur['email']?></span></li>
                            <li><i class="pe-7s-phone"></i><span> <?=$utilisateur['telephone']?></span></li>
                            <li><i class="pe-7s-global"></i><span><a href="www.anasyousfi.fr">
                                        <?=$utilisateur['site_web']?></a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h2 class="con-title">Contactez moi</h2>
                    <?php 
                    //  traiter les notifications
                    if(isset($_GET['message'])) {
                        if($_GET['message'] == 'success') echo "<p class='text-success'>Message envoye!</p>";
                        if($_GET['message'] == 'error') echo "<p class='text-danger'>Impossible d'envoyer le message!</p>";
                    }
                    ?>
                    <form role="form" action="mail.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user" id="user_name"
                                placeholder="Enter votre nom">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="your_email"
                                placeholder="Enter votre email">
                        </div>
                        <div class="form-group">
                            <textarea name="InputMessage" name="msg" id="user_message" class="form-control" rows="5"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn medium">envoyer</button>
                    </form>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- contact-area -->
    <div id="social">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="scoialinks">
                        <li class="normal-txt">Me Contacter</li>
                        <li class="social-icons"><a class="facebook"
                                href="https://www.facebook.com/anas.yousfi.3" target _blank></a></li>
                        <li class="social-icons"><a class="" href="https://github.com/anas1478" target _blank><i
                                    class="fab fa-github fa-4x" id="git"></i></a></li>
                        <li class="social-icons"><a class="linkedin" href="https://www.linkedin.com/in/anas-yousfi-a59b41172/" target _blank></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- social -->
</section><!-- contact -->

<!-- recuperation du footer en php -->
<?php
        require_once 'footer.php'; 
        ?>