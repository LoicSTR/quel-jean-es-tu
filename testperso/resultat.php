<!DOCTYPE html>
<html>
<head>
	<title>Résultat</title>
	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link href="styles.css" rel="stylesheet">

</head>
<body>
<?php

	define ('SERVER','localhost');
	define ('USER','root');
	define ('PASSWORD','root');
	define ('BASE','quiz');
try {
	$connexion = new PDO ("mysql:host=".SERVER.";dbname=".BASE, USER, PASSWORD);
}
catch (Exception $e){
	echo 'erreur'.$e->getMessage();
}

session_start();
	echo $_SESSION['nom']." ".$_SESSION['prenom'];


$requete = "SELECT * FROM utilisateurs WHERE id = '$id' AND mdp = '$mdp'";

$resultat = $connexion->query($requete);

$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);




$jcv = 0;
$jlr = 0;
$jjg = 0;
$jpp = 0;





for ($i=0; $i < 30 ; $i++) { 
	if ($_POST[$i] == 1) {
		$jcv = $jcv + 1;
	}
	if ($_POST[$i] == 2) {
		$jlr = $jlr + 1;
	}
	if ($_POST[$i] == 3) {
		$jjg = $jjg + 1;
	}
	if ($_POST[$i] == 4) {
		$jpp = $jpp + 1;
	}
}

echo "<br>";
/*echo "Nombre de réponses JCV : ".$jcv."<br>";
echo "Nombre de réponses JLR : ".$jlr."<br>";
echo "Nombre de réponses JJG : ".$jjg."<br>";
echo "Nombre de réponses JPP : ".$jpp."<br>";*/

$max = $jcv;
$res = "Jean-Claude Vandamme";
$img = "<img src='jcv.jpeg' class='image'>";

if ($jlr > $max) {
	$max = $jlr;
	$res = "Jean-Luc Reichmann";
	$img = "<img src='jlr.jpeg' class='image'>";
}
if ($jjg > $max) {
	$max = $jjg;
	$res = "Jean-Jacques Goldman";
	$img = "<img src='jjg.jpeg' class='image'>";
}
if ($jpp > $max) {
	$max = $jpp;
	$res = "Jean-Pierre Pernaut";
	$img = "<img src='jpp.jpg' class='image'>";
}

echo "Félicitations ! Vous êtes ".$res;
echo $img;




?>


</body>
</html>