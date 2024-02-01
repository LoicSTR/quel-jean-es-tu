<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<link href="styles.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>


<?php

session_start();




if ($_SESSION['statut'] == 'membre' OR $_SESSION['statut'] == 'admin'){

	echo "<div class='contener2'><div class='bienvenue'>".$_SESSION['nom']." ".$_SESSION['prenom']."<br></div>";

	if ($_SESSION['statut'] == 'membre') {
		echo "Je suis un membre<br>";
	}
	else {
		echo "Je suis un admin<br>";
		echo "<a href='admin.php'>Page Admin</a><br>";
	}
	echo "<div id='link'><a href='quiz.php'>Accéder au quiz</a><br>";
	echo "<a href='mes_resultat.php'>Accéder aux résultats</a><br></div></div>";
}
else {

 echo "Bonjour <br>";
 echo "<a href='quiz_demo.php'>Tester la démo</a><br>";
 echo "<a href='index.php'>Se connecter</a></div>";

}


?>


</body>
</html>