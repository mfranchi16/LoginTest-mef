<?php
	$enteredUsername = $_GET["user"];
    $enteredPassword = $_GET["pass"];
	
	echo "Its working.";
	
	//Alpha
	if($enteredUsername == 'Alpha Flight' and $enterPassword == 'Kane'){
		$boo = true;
		echo $boo;
	}
	
	//Bravo
	if($enteredUsername == 'Bravo Flight' and $enterPassword == 'Toews'){
		$boo = true;
		echo $boo;
	}
	
	//Charlie
	if($enteredUsername == 'Charlie Flight' and $enterPassword == 'Shaw'){
		$boo = true;
		echo $boo;
	}
	
	//Delta
	if($enteredUsername == 'Delta Flight' and $enterPassword == 'Strome'){
		$boo = true;
		echo $boo;
	}
	
	//POC
	if($enteredUsername == 'POC' and $enterPassword == 'Dach'){
		$boo = true;
		echo $boo;
	}
	
	//Cadre
	if($enteredUsername == 'Cadre' and $enterPassword == 'Saad'){
		$boo = true;
		echo $boo;
	}
?>