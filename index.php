<!DOCTYPE HTML!>
<html>
<head>
	<title>VI harjutus</title>
	<meta charset="UTF-8">
</head>
<body>
	<h2>Tingimuslaused</h2>
		<?php 
			$a = 4;
			$b = 5;
			if ($a<$b) {echo "$a on väiksem kui $b";}
			if ($a>$b) {echo "$a on suurem kui $b";}
		?><br>	
		<?php 
			$a = 3;
			$b = 7;
			if ($a==$b) {echo "$a on võrdne $b-ga";}
			elseif ($a>$b) {echo "$a on suurem kui $b";}
			 // Kuna see on tõene, siis väljastatakse see tekst.
			elseif ($a<$b) {echo "$a on väiksem kui $b";}
		?><br>	
		<?php 
			$a = 7;
			$b = 7;
			 // Kuna see on tõene, siis väljastatakse see tekst.
			if ($a==$b) {echo "$a on võrdne $b-ga";}
			elseif ($a>$b) {echo "$a on suurem kui $b";}
			elseif ($a<$b) {echo "$a on väiksem kui $b";}
		?><br>
		<?php 
			$a = 8;
			$b = 7;
			if ($a==$b) {echo "$a on võrdne $b-ga";}
			 // Kuna see on tõene, siis väljastatakse see tekst.
			elseif ($a>$b) {echo "$a on suurem kui $b";}
			elseif ($a<$b) {echo "$a on väiksem kui $b";}
		?><br>
		<?php $age=17; ?>
	<?php $age_limit=18; ?>
	
	<?php 
	if ($age < $age_limit) { 
	echo "Kahjuks olete liiga noor. Te peate olema vähemalt {$age_limit} aastat vana. Tulge " . ($age_limit - $age) . " aasta pärast tagasi"; }
	elseif ($age > $age_limit) {
	echo "Olete piisavalt vana. Tulge edasi!";
	}
	elseif ($age = $age_limit) {
	echo "Olete piisavalt vana. Tulge edasi!";
	}
	
	?>
	
	<?php $a=3 ?><br>
	<?php $b=3 ?><br>
	<?php $c=4 ?><br>
	<?php $d=5 ?><br>
	
	<?php
    if (($a == $b) && ($c > $d)) {
	echo "Mõlemad on õiged";
	}
	elseif ($c > $d) {
	echo "4 on suurem kui viis";
	}
	elseif ($a == $b) {
	echo "3 = 3";
	}
	/*Käivitati kolmas koodiplokk "3=3", kuna kumbki eelnevatest tehetest ei olnud tõene*/
	?> 
<br>
	<?php
    if (($a == $b) || ($c > $d)) {
	echo "Esimene on õige";
	}
	elseif ($c > $d) {
	echo "4 on suurem kui 5";
	}
	elseif ($a == $b) {
	echo "3 = 3";}
	/*Käivitati esimene koodiplokk, kuna üks tehetest on tõene.*/
	?> 
	<br>
	<?php
	if (isset($nothing) == false) {
	echo "False";
	} ?>
	<br>
	<?php if (!isset($nothing) == true){
	echo "True";	
	}
	?>
	
	<h3>Switch</h3>
	
	<?php $current_language="ru" ?>
	
	<?php switch($current_language) {
	case "et":
		echo "Tere! Kuidas sul läheb? ";
		break; 
	case "ru":
		echo "Здравствуйте! Как вы делаете? "; 
		break; 
	case "fi":
		echo "Hei! Miten menee? "; 
		break; 
	default:
		echo "Hello! How are you doing?"; 
		break; 
	}?>
</body>
</html>