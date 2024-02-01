<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
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


	echo "<div class='nom'>".$_SESSION['nom']." ".$_SESSION['prenom']."</div>";
	echo "<div class='contener2'>";


	echo "ok";
?>


<form action="resultat.php" method="POST">


<?php

$requete = "SELECT * FROM questions";
$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);


foreach ($liste as $element) {
	
	echo '<div class="question">';
	echo 'Q.'.$element['id'].' - ';
	echo $element['question'].'<br>';
	echo '</div>';

	echo '<div class="reponse"><input type="radio" name='.$element['id'].' value="1">'.$element['rep_jcv'].'<br></div>';
	echo '<div class="reponse"><input type="radio" name='.$element['id'].' value="2">'.$element['rep_jlr'].'<br></div>';
	echo '<div class="reponse"><input type="radio" name='.$element['id'].' value="3">'.$element['rep_jjg'].'<br></div>';
	echo '<div class="reponse"><input type="radio" name='.$element['id'].' value="4">'.$element['rep_jpp'].'<br><br></div>';

}
?>

<input align="right" type="submit" name="btn" value="Résultat">


</form>
</div>

</body>
</html>