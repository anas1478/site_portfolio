<?php  
require_once 'functions.php';
extract($_POST); // $_POST['pseudo'] <==> $pseudo

if($_POST && connexion($pseudo, $mdp)) { //si pseudo et mdp ok alors go admin
   
  $_SESSION['pseudo'] = $pseudo;
  redirection("../utilisateur.php");
 

}
elseif($_POST && !connexion($pseudo, $mdp)) { //si mdp ou pseudo faux alert et destruction d'une session eventuelle
    
 
      session_destroy();
 
  
    

    echo "
    
    <script>
 

    var cardHeader = document.querySelector('.card-header');

    cardHeader.innerHTML = '".error('pseudo ou mot de passe incorrect !')."'

    </script>
    
    ";
}

else{ //else me permet de detrure la session l'orsque j'arrive sur la page par exemple apres avoir apuyer dur deconnexion dans le "dashboard"

    session_destroy();

}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<style>
body{
  background-image: url('../front/assets/images/W_2014_365.jpg');
  width:100%;
  background-repeat: no-repeat;

}

</style>
<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5 d-flex flex-row">
      <div class="card-header p-3 mt-1"><span>CONNEXION ADMIN</span>  <br>  <a href="../front/index.php" class="btn btn-secondary p-1">revenir au site</a></div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <div class="form-label-group">
              <input name="pseudo" type="text" id="inputEmail" class="form-control" placeholder="pseudo" required="required" autofocus="autofocus">
              <label for="inputEmail">pseudo</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="mdp" type="password" id="inputPassword" class="form-control" placeholder="mot de passe" required="required">
              <label for="inputPassword">mot de passe</label>
            </div>
          </div>
         
          <button type="submit" class="btn btn-primary btn-block">CONNEXION</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
