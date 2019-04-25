<html class="no-js"> 
    <head>
        <title><?=$utilisateur['prenom']?> <?=$utilisateur['nom']?></title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font_icon/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/font_icon/css/helper.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500|Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,100|Titillium+Web:400,200,300italic,300,200italic' rel='stylesheet' type='text/css'>

        <script src="assets/js/modernizr.js"></script>

    </head>
    <body id="body">
 <header id="header">
            <p class="text-right"><a href="../connexion/login.php" class="admin">admin</a></p>
            <div class="center text-center">
                <h1 class="bigheadline"><?=$utilisateur['prenom']?> <?=$utilisateur['nom']?></h1>
                <h4 class="subheadline"><?=$utilisateur['description']?></h4>
                <div id="player">
                <iframe  class="card"  id='dzplayer' dztype='dzplayer' src='https://www.deezer.com/plugins/player?type=playlist&id=4412309342&format=classic&color=007FEB&autoplay=false&playlist=true&width=700&height=240' scrolling='no' frameborder='0' style='border:none; overflow:hidden;' width='350' height='280' allowTransparency='true'></iframe>
                </div>
            </div><!-- social -->
            </div>
            <div class="bottom">
                <a data-scroll href="#navigation" class="scrollDown animated pulse" id="scrollToContent"><i class="pe-7s-angle-down-circle pe-va"></i></a>
            </div>
        </header>

     