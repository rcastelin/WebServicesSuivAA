<?php
include 'passerrelle.php';
$idvisiteur = $_GET['id'];
$bd = passerrelle::connexion();
$sql = 'select c.cab_id_Cabinet,c.cab_nom_Cabinet,c.cab_numRue_Cabinet,c.cab_nomRue_Cabinet,c.cab_cp_Cabinet,c.cab_ville_Cabinet 
    from Cabinet c INNER join Medecin m 
on c.cab_id_Cabinet =m.cab_id_Cabinet
INNER join Personne p 
on m.personne_id_Personne = p.id
where p.id = \''.$idvisiteur.'\'';
$sth = $bd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute();
$value = $sth->fetchAll();
var_dump($value);
?>

