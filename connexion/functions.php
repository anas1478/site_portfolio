<?php

session_start();
//connexion a la base de donne

function connect($host, $database, $user, $password){
   
    return new PDO("mysql:host=$host; dbname=$database", $user, $password);
}

$db = connect('localhost', 'portfolio', ' 	
root', '');



// $db = new PDO('mysql:host=localhost; dbname=portfolio", root, "" ') 






//connection pour verifier l'admin
function connexion($pseudo, $mdp) {
    global $db;
    // echo "SELECT pseudo FROM $xml->table where pseudo=$pseudo and mdp=$mdp";
    $query = $db->query("SELECT pseudo FROM utilisateur where pseudo='$pseudo' and mdp='$mdp'");
    // var_dump($query);
    return $query->fetch(PDO::FETCH_ASSOC);
}


function redirection($url) {
    header("location: $url");
}
function error($msg){
    echo'
    <div class="alert alert-danger text-center" role="alert">
      '.$msg.'
    </div>';
}
function nonConecter(){
    if(!$_SESSION['pseudo']){
        redirection('connexion/login.php');
    }
}