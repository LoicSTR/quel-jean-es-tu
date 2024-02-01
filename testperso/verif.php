<!DOCTYPE html>
<html>
<head>
	<title>CONNEXION</title>
	<link href="styles.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
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

 $id=$_POST['id'];
 $mdp=md5($_POST['mdp']);



$requete = "SELECT * FROM utilisateurs WHERE id = '$id' AND mdp = '$mdp'";

$resultat = $connexion->query($requete);

$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);



if (count($liste)==1){
	foreach($liste as $element) {
		echo "<div class='contener2'><div class='bienvenue'>Bonjour ".$element['prenom']." ".$element['nom']."<br>";
		echo "Vous vous êtes connecté avec succès ! <br><br></div>";
		echo "<div><a href='accueil.php'>Continuer la navigation</a></div></div>";

		$nom = $element['nom'];
		$prenom = $element['prenom'];
		$statut = $element['statut'];

		$_SESSION['nom']=$nom;
		$_SESSION['prenom']=$prenom;
		$_SESSION['statut']=$statut;
	}
}
else {
	echo "<div id=bienvenue>Erreur de connexion <br></div>";
	echo "<div><a href='index.php'>Retourner à la page de connexion</a></div>";
}



?>

</body>
</html>