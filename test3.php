<?php
session_start();
include 'functions.php';

# Verbindt met de database

$mysqli = new mysqli('localhost', 'root', '', 'inschrijfformulier') or die(mysqli_error($mysqli));

$_SESSION["vegetarisch"] = $_POST["vegetarisch"];
$_SESSION["auto"] = $_POST["auto"];
$_SESSION["actief"] = $_POST["actief"];
$_SESSION["spelletjes"] = $_POST["spelletjes"];
$_SESSION["cultuur"] = $_POST["cultuur"];
$_SESSION["natuur"] = $_POST["natuur"];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Inschrijfformulier</title>
	</head>
<body>
<?php

# Laat de resultaten van de formulieren in deze sessie zien

echo "<label> Voornaam: </label>";
echo $_SESSION['voornaam'];
echo "<br>";

echo "<label> Achternaam: </label>";
echo $_SESSION['achternaam'];
echo "<br>";

echo "<label> Personeelsnummer: </label>";
echo $_SESSION['personeelsnummer'];
echo "<br>";

echo "<label> Afdeling: </label>";
echo $_SESSION['afdeling'];
echo "<br>";

echo "<label> Familie: </label>";
echo $_SESSION['familie'];
echo "<br>";

# ALS $_POST['beschrijving'] een waarde heeft, word hij in de session gezet. Als hij geen waarde heeft, word de waarde van $_SESSION['beschrijving'] gelijk aan "Niet aanwezig".

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (isset($_POST['beschrijving'])) {
		$_SESSION['beschrijving'] = $_POST['beschrijving'];
	} else {
		$_SESSION['beschrijving'] = "Niet aanwezig";
	}
}

# Hier word de bold() functie opgeroepen.

echo "<label> <B> Familie beschrijving: </B> </label>";
echo bold();
echo "<br>";

echo "<label> Vegetarisch: </label>";
echo $_SESSION['vegetarisch'];
echo "<br>";

echo "<label> Met de auto: </label>";
echo $_SESSION['auto'];
echo "<br>";

echo "<label> Interesse 1: </label>";
echo $_SESSION['actief'];
echo "<br>";

echo "<label> Interesse 2: </label>";
echo $_SESSION['spelletjes'];
echo "<br>";

echo "<label> Interesse 3: </label>";
echo $_SESSION['cultuur'];
echo "<br>";

echo "<label> Interesse 4: </label>";
echo $_SESSION['natuur'];

# Als een waarde voor "taxi" is gecreert, voert hij het volgende commando uit: ALS de POST van taxi en de POST van auto Ja zijn, word er een lijn getoont met contactgegevens. 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (isset($_POST['taxi'])) {
		if ($_POST['taxi'] == "Ja" and $_POST['auto'] == "Ja"){ 
			echo "<br> <br> Neem contact op voor vervoer: +3140741071";
			} 
	} 
}

# Hier word alle data in de database geplaatst.

if(isset($_POST['Volgende']))
	{
	$voornaam = $_SESSION['voornaam'];
	$achternaam = $_SESSION['achternaam'];
	$personeelsnummer = $_SESSION['personeelsnummer'];
	$afdeling = $_SESSION['afdeling'];
	$familie = $_SESSION['familie'];
	$vegetarisch = $_SESSION['vegetarisch'];
	$auto = $_SESSION['auto'];
	$actief = $_SESSION['actief'];
	$spelletjes = $_SESSION['spelletjes'];
	$cultuur = $_SESSION['cultuur'];
	$natuur = $_SESSION['natuur'];
	$taxi = $_SESSION['taxi'];
	$beschrijving = $_SESSION['beschrijving'];
	
	$mysqli->query("INSERT INTO inschrijfformulier (voornaam, achternaam, personeelsnummer, afdeling, familie, vegetarisch, auto, interesse1, interesse2, interesse3, interesse4) VALUES('$voornaam', '$achternaam', '$personeelsnummer', '$afdeling', '$beschrijving', '$vegetarisch', '$auto', '$actief', '$spelletjes', '$cultuur', '$natuur')") or
			die($mysqli->error);
	}

?>



<form action="test1.php">
	<input type="submit" value="Terug naar het begin">
</form>


</body>