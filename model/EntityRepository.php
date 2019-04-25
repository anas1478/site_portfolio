<?php
namespace model;
// Dans ce ficher nous allons faire les connexion a la BDD (SELECT, INSERT, REMPLACE, DELETE) les fonctions sont aussi dans le CONTROLLER
class EntityRepository
{
    private $db;
    //data base
    public $table;
    public function getDb() // méthode permettant d'instancier la classe PDO et de créer un objet
    {
        if (!$this->db) // seulement si $this->db n'est pas rempli, il n'y a pas de connexion alors on la construit
        {
            //------------------------ CONNEXION AVEC LE XML ET A LA BDD ------------------------
            try {
                $xml = simplexml_load_file('app/config.xml'); //simplexml_load_file transforme mon fichier XML en objet
                // echo '<pre>'; var_dump($xml); echo '</pre>';
                $this->table = $xml->table; // on associe le nom de la table du fichier XML a la propriété de la classe, cette propriété nous servira pour toute nos requetes SQL (INSERT INTO $this->table)
                try 
                    //------------------------ CONNEXION AVEC LA BDD ------------------------
                { 
                    $this->db = new \PDO("mysql:dbname=".$xml->db . ";host=" . $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION)); // Connexion a la BDD, si jamais on change de BDD nous n'aurons pas besoin de modifier ce code, c'est un code genéric, c'est le ficher config.xml que l'on modifira
                    // echo '<pre>'; var_dump($this->db); echo '</pre>';
                    // echo '<pre>'; print_r(get_class_methods($this->db)); echo '</pre>';

                } 
                catch (\PDOException $e) { // on entre ici en cas de mauvaise connexion a la BDD
                    die('Problème de connexion BDD' . $e->getMessage());
                }
            } 
            catch (\PDOException $e) {
                die('Problème de fichier XML manquant'. $e->getMessage());
            }
        }
        return $this->db; // on retourne la connexion
    }

      //------------------------------------- RECOLTE LES DONNEES des champs/colonne ------------------------------------
    

      public function getFields()
      // recolter les données des champs/colonne de la table, 
      {
          $q = $this->getDb()->query("DESC $this->table"); // DESC : decription de la table
          $r = $q->fetchALL(\PDO::FETCH_ASSOC);
          
          return array_splice($r,1); 
         
      }
  
  /************ AFFICHE TOUT ... ************/
      public function selectAll()
      {
          $q = $this->getDb()->query("SELECT * FROM " . $this->table); // selectionner toute une table, 
          $r = $q->fetchAll(\PDO::FETCH_ASSOC);
          return $r;
      }
//  addslashes();

  /************ AJOUTER ET MODIFIER (REMPLACE si id est n'est pas nul) ************/
      public function save()
      {
        // addslashes($q);
        // $r=file_get_contents($_POST);
        // pg_escape_string($r);
      
          $id = isset($_GET['id']) ? $_GET['id'] : 'NULL'; // verifie si id n'est pas nul pour ajouter ou motifier
          $q = $this->getDB()->query('REPLACE INTO ' . $this->table . '(id'. '_' . $this->table . ',' .  implode(',', array_keys($_POST)). ') VALUES (' . $id . ',' . "'"  . implode("','",$_POST) . "'" . ')');
        //   pg_escape_string($id);
        //   addslashes($_POST);
       
        
      }
  
    
  /************ AFFICHER UN .... ************/
      public function select($id) // Méthode permetant de recuperer les données d'un Vehicule via id
      {
          $q = $this->getDb()->query("SELECT * FROM " . $this->table . " WHERE id".'_'. $this->table . "=" . $id);
          $r = $q->fetch(\PDO::FETCH_ASSOC);
          return $r;
      }
  
  /************ SUPPRIMER ************/
      public function delete($id)
      {
          $q = $this->getDb()->query("DELETE FROM " . $this->table . " WHERE id".'_' . $this->table. '=' .$id);
      }

  /************ image ************/
      public function image()
      {
        $q = $this->getDb()->query("SELECT avatar FROM " . $this->table . " WHERE id".'_'. $this->table . "=" . $id);
        $r = $q->fetch(\PDO::FETCH_ASSOC);
        return $r;;
      }
  }



$a = new EntityRepository; 
$a->getDb();


