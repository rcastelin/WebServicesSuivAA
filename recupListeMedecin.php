<?php
include 'passerrelle.php';
$idCabinet = $_GET['idCabinet'];
$bd = passerrelle::connexion();
$sql = 'SELECT * '
        . 'FROM Medecin '
        . 'WHERE cab_id_Cabinet='.$idCabinet;
$sth = $bd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute();
$value = $sth->fetchAll();
var_dump($value);
?>
