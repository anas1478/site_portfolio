<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awseome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>
 <style>
  body{
    background-image: url("front/assets/images/bg.jpg");
   background-size:100%;
     height:100%;
  }
 
 </style>

  <body>
    
    <!--Navbar Bootstrap  -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-info bg-info">
        
      
        <a class="navbar-brand" href="realisations.php">Réalisations</a>
        <a class="navbar-brand" href="competences.php">Compétences</a>
        <a class="navbar-brand" href="utilisateur.php">Utilisateur</a>
        <a class="navbar-brand" href="connexion/login.php">Déconnexion</a>
        <a class="navbar-brand" href="front/index.php">Mon site</a>
        
    </nav>

    <div class="container col-12">
        <h1 class="display-4 text-center mt-4 text-muted"><?= $title ?></h1> <hr>
        <?= $content ?> 
    </div>

    <!-- <footer class="bg-dark text-left text-white p-2">
        &copy; 2019 - Anas YOUSFI.
    </footer> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  </body>
</html>