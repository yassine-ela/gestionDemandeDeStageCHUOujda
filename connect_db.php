<?php
try{
$db= new PDO ('mysql:host=localhost;dbname=gestiondemandedestage','root','');

}catch(PDOException $e){
    die('Erreur :' .$e->getMessage());
}


?> 