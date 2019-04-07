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
}}
?>