<?php
include 'passerrelle.php';
$rdv = $_GET['visit_rendezvous'];
$ha = $_GET['visit_heure_arrivee'];
$he = $_GET['visit_heure_entretien'];
$hd = $_GET['visit_heure_depart'];
$date = $_GET['visit_date'];
$bd = passerrelle::connexion();
$sql = 'INSERT INTO Visite(visit_rendezvous,visit_heure_arrivee,visit_heure_entretien,visit_heure_depart,visit_date)'
        . 'VALUES ('.$rdv.','.$ha.','.$he.','.$hd.','.$date.')';
$sth = $dbh->prepare($sql);
$sth->execute();

?>