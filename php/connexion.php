    
<?php 
//configuration 
$_connection=mysqli_connect("localhost","root","","isg");

//recuperation des donnes 
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$req= " SELECT * FROM insciption where ( (email='$email' ) AND (motdepasse='$pass'))";
$result = $_connection->query($req);
if ( $result <=0  ) {
echo "introuvable";
}
?>