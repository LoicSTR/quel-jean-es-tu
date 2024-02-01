<!DOCTYPE html>
<html>
<head>
	<title>Démo Quiz</title>
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
	echo $_SESSION['nom']." ".$_SESSION['prenom'];

?>

<br><br>
Choisissez :<br><br>
<form action="resultat.php" method="POST">

<div>

<?php

$requete = "SELECT * FROM questions";
$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);


	foreach ($liste as $element) {

	echo "Q.".$element['id']." - ";
	echo $element['question']."<br>";
	echo '<input type="radio" name="rq"'.$element['id'].' value="1">'.$element['rep_jcv'].'<br>';
	echo '<input type="radio" name="rq"'.$element['id'].' value="2">'.$element['rep_jlr'].'<br>';
	echo '<input type="radio" name="rq"'.$element['id'].' value="3">'.$element['rep_jjg'].'<br>';
	echo '<input type="radio" name="rq"'.$element['id'].' value="4">'.$element['rep_jpp'].'<br><br>';
	
	}


?>

</form>


</body>
</html>