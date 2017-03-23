<?php
$bd = passerrelle::connexion();
$sql = 'SELECT *'
        . 'FROM Cabinet';
$sth = $dbh->prepare($sql);
$sth->execute();
var_dump($sth)
?>

