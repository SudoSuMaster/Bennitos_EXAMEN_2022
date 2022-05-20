<?php
# Start de sessie en importeert het functions.php bestand voor de functies.
session_start();
include 'functions.php';
?>

<!DOCTYPE html>
<html>

<! -- HTML SPUL -->

	<head>
		<title>Inschrijfformulier</title>
	</head>
<body>

<div class="invoer">
	<form action="test2.php" method="POST">
	
	<table>
        <tr>
			<td>
				Voornaam
			</td>
			<td>
				<input type = "text" name="voornaam" required>
			</td>
		</tr>
		
		<tr>
			<td>
				Achternaam
			</td>
			<td>
				<input type = "text" name="achternaam" required>
			</td>
		</tr>
		
		<tr>
			<td>
				Personeelsnummer
			</td>
			<td>
				<input type = "text" name="personeelsnummer" required>
			</td>
		</tr>
		
		<tr>
			<td>
				Afdeling
			</td>
			<td>
					<?php
					
					# Functie voor de opties van de "afdeling" dropdown menu
					
						dropdown()
					
					?>
			</td>
		</tr>
		
		 <tr>
			<td>
				Komt familie mee?
			</td>
			<td>
				<input type='hidden' value='Dood!' name='familie'>
				<select name="familie">
					<option value="Ja"> Ja </option>
					<option value="Nee"> Nee </option>
				</select>
			</td>
		</tr>
	</table>
	
	<input type="submit" value="Volgende" name="Volgende">

	</form>

</div>

</body>