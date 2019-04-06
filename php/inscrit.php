<?php 
//configuration 
include "C:\xampp\htdocs\dos\php\config.php";
$base=connect(); 
//recuperation des donnes 
$nom=$_POST['Nom']; 
$Prenom=$_REQUEST['Prenom']; 
$numero=$_REQUEST['nom_du_champ']; 
$Genre=$_REQUEST['genre']; 
$Email=$_REQUEST['email']; 
$Date=$_REQUEST['date-naissance'];
$nat=$_POST['liste'];
$interet=$_POST['interet'];
$MDP= md5($_REQUEST['password']);
$CMDP=md5($_REQUEST['cpassword']);
//insertion des donnes dans la base
$req=" INSERT INTO insciption (nom , prenom ,tele,genre,email,datenaiss , nationalite ,interet, motdepasse , confirmation ) VALUES ('$nom' , '$Prenom' , '$Telephone' ,'$Genre','$Email' , '$Date','$nat' ,'$interet' ,'$MDP' ,'$CMDP') ";
//exec : function insert update Delete
//type de retour exec int || bool
//int : nbr de lignes inserèes  || boolean : false en cas d'echec 
$res = $base->exec($req);
if ($res == 1 ) {
    echo "donnees inserees "; }
    else {echo  " verifiez la req";}
?>