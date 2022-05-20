<?php
# Start de sessie en importeert het functuins.php bestand voor de functies.
session_start();
include 'functions.php';

# Stopt de POSTs (resultaten) in de huidige sessie van het formulier op de volgende pagina.

$_SESSION["voornaam"] = $_POST["voornaam"];
$_SESSION["achternaam"] = $_POST["achternaam"];
$_SESSION["personeelsnummer"] = $_POST["personeelsnummer"];
$_SESSION["afdeling"] = $_POST["afdeling"];
$_SESSION["familie"] = $_POST["familie"];
?>

<!DOCTYPE html>
<html>

<! -- HTML SPUL -->

	<head>
		<title>Inschrijfformulier</title>
	</head>
<body>

<div class="invoer">
	<form action="test3.php" method="POST">
	
	<table>
        <tr>
			<td>
				Bent u vegetarisch?
			</td>
			<td>
				<select name="vegetarisch">
					<option value="Ja"> Ja </option>
					<option value="Nee"> Nee </option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>
				Komt u met de auto?
			</td>
			<td>
				<input type='hidden' value='Nee' name='auto'>
				<input type = "checkbox" name="auto" value="Ja">
				<label> Ja </label>
			</td>
		</tr>
		
		<tr>
			<td>
				Interesse gebieden
			</td>
			<td>
				
				<! -- Checkboxes met type='hidden', zodat als ze niet geselecteerd worden, hebben ze een standaardwaarde. -->
				
				<input type='hidden' value='Geen' name='actief'>
				<input type = "checkbox" name="actief" value="Actief">
				<label> Actief </label>
				<br>
				<input type='hidden' value='Geen' name='spelletjes'>
				<input type = "checkbox" name="spelletjes" value="Spelletjes">
				<label> Spelletjes </label>
				<br>
				<input type='hidden' value='Geen' name='cultuur'>
				<input type = "checkbox" name="cultuur" value="Cultuur">
				<label> Cultuur </label>
				<br>
				<input type='hidden' value='Geen' name='natuur'>
				<input type = "checkbox" name="natuur" value="Natuur">
				<label> Natuur </label>
			</td>
		</tr>
		
		<tr>
		
					<! -- ALS "Directie" word gekozen bij de afdeling dropdown menu, word een optie getoont voor een taxi -->
		
			<?php			
				if ($_POST['afdeling'] == "Directie"){
					echo '<td>Heeft u een taxi nodig?</td>';
					echo '<input type="hidden" value="Nee" name="taxi">';
					echo '<td> <select name="taxi">';
					echo '<option value="Ja"> Ja </option>';
					echo '<option value="Nee"> Nee </option> </select> </td>';
				} 
			?>
		</tr>
		
		 <tr>
					
					<! -- ALS "Ja" word gekozen bij de familie dropdown menu, word een optie getoont om te familie te beschrijven. -->
					
			<?php			
				if ($_POST['familie'] == "Ja"){
					echo '<td>Beschrijving familieleden</td>';
					echo '<input type="hidden" value="Geen" name="beschrijving">';
					echo '<td> <input type="text" name="beschrijving"> </td>';
				} 
			?>
		</tr>
	</table>
	
	<! -- Submit knop -->
	
	<input type="submit" value="Volgende" name="Volgende">

	</form>

</div>

</body>