<?php

# Hier heb ik een functie gemaakt van de array met opties voor de afdeling dropdown menu. In principe echoed hij gewoon een variabele met alle opties erin.

function dropdown(){
        $afdeling = array("Accountants", "Receptie", "HRM", "Belastingsadviseurs", "Administratie", "Directie");
        $options='afdeling';
        echo '<select name="'.$options.'">';
        foreach ($afdeling as $value){
            echo '<option value="'.$value.'" required>'.$value.' </option>';

        }
    }


# Hier heb ik een functie gemaakt van het bold maken van het resultaat uit de familie beschrijving.
# ALS de waarde van beschrijving gelijk is aan "Niet aanwezig" (oftewel hij heeft geen waarde gekregen op pagina 2, dus is omgezet naar die waarde), echoed hij de waarde met bold tags er omheen.
		
function bold() {
	if ($_SESSION['beschrijving'] == "Niet aanwezig") {
		echo $_SESSION['beschrijving'];
	} else {
		echo "<b>";
		echo $_SESSION['beschrijving'];
		echo "</b>";
	}	
}	
?>


