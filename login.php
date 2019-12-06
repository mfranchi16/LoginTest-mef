<?php
	$username = $password = "";
	
	if(isset($_POST['submit'])){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		
		//Alpha Flight
		if($username == "Alpha" and $password == "Kane"){
			header("Location: Template.html");
		}
		//Bravo Flight
		if($username == "Bravo" and $password == "Toews"){
			header("Location: Template.html");
		}
		//Charlie Flight
		if($username == "Charlie" and $password == "Shaw"){
			header("Location: Template.html");
		}
		//Delta Flight
		if($username == "Delta" and $password == "Saad"){
			header("Location: Template.html");
		}
		//POC
		if($username == "POC" and $password == "Strome"){
			header("Location: Template.html");
		}
		//Cadre
		if($username == "Cadre" and $password == "Crawford"){
			header("Location: Template.html");
		}
		
	}
?>