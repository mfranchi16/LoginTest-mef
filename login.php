<?php
	$enteredUsername = $_GET["user"];
    $enteredPassword = $_GET["pass"];
	
	echo $enteredUsername;
	echo $enteredPassword;
	
	//Alpha
	if($enteredUsername == 'Alpha Flight' and $enteredPassword == 'Kane'){
		$boo = true;
		echo $boo;
	}
	
	//Bravo
	if($enteredUsername == 'Bravo Flight' and $enteredPassword == 'Toews'){
		$boo = true;
		echo $boo;
	}
	
	//Charlie
	if($enteredUsername == 'Charlie Flight' and $enteredPassword == 'Shaw'){
		$boo = true;
		echo $boo;
	}
	
	//Delta
	if($enteredUsername == 'Delta Flight' and $enteredPassword == 'Strome'){
		$boo = true;
		echo $boo;
	}
	
	//POC
	if($enteredUsername == 'POC' and $enteredPassword == 'Dach'){
		$boo = true;
		echo $boo;
	}
	
	//Cadre
	if($enteredUsername == 'Cadre' and $enteredPassword == 'Saad'){
		$boo = true;
		echo $boo;
	}
?>