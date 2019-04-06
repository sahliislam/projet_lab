<?php 
//configuration 
include "..\projet_lab\php\configuration.php";

function connect(){
$server="localhost"; 
$base="isg"; 
$username="root";
$pass="";
try {
    //Code a executer
    $con=new PDO("mysql:host=$server;isgname=$base",$username,$pass);
    return $con;
} catch (PDOException $e )
{ 
    // traitement en cas d'Exception
    die("errrrrrrreeeeeeeeur : " . $e->getMessage());
}
}
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