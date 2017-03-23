<?php

class passerrelle {
      public static function connexion() {
         $domain="192.168.20.2";
         $bdd = "gsbapplifrais";
         $login = "root";
         $mdp = "mysql";
        try {   
            $DB = new PDO('mysql:host='.$domain.';port=3306;dbname='.$bdd.';charset=UTF8;',$login,$mdp);
            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
        die('Erreur : '. $e->getMessage());
        }
            return $DB;
        }
    }

