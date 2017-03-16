<?php

class passerrelle {
   
   function connexion(){
   $domain="localhost";
   $bdd = "gsb";
   $login = "root";
   $mdp = "mysql";
   $DB = new PDO('mysql:host='.$domain.';port=3306;dbname='.$bdd.';charset=UTF8;',$login,$mdp)
   return $DB
   }
   
}
