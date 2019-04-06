<?php 
//configuration 
include "../css1/php/configuratio.php";
$base=connect(); 
//recuperation des donnes 
$nom=$_POST['nom']; 
$Prenom=$_REQUEST['prenom']; 
$numero=$_REQUEST['nom_du_champ']; 
$Genre=$_REQUEST['gender']; 
$Email=$_REQUEST['email']; 
$Date=$_REQUEST['date'];
$nat=$_POST['liste'];
$interet=$_POST['interet'];
$MDP= md5($_REQUEST['password']);
$CMDP=md5($_REQUEST['cpassword']);
//insertion des donnes dans la base
$req=" INSERT INTO formalab (nom , prenom,num,genre,mail,dates, nat ,interet, motdp , con ) VALUES ('$nom' , '$Prenom' , '$Telephone' ,'$Genre','$Email' , '$Date','$nat' ,'$interet' ,'$MDP' ,'$CMDP') ";
//exec : function insert update Delete
//type de retour exec int || bool
//int : nbr de lignes inserèes  || boolean : false en cas d'echec 
$res = $base->exec($req);
if ($res == 1 ) {
    echo "donnees inserees "; }
    else {echo  " verifiez la req";}
?>