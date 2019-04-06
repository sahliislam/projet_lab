<?php
function connect(){
$serveur="localhost";
$base="formalab";
$username="root";
$pass="";
try{
    //code..
    $con= new PDO("mysql:host=$serveur;formalabname=$base",$username,$pass);

    return $con;
}catch (PDOException $e){
    //exception..
    die("ERROR:".$e->getMessage());
}}
?>