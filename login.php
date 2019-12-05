<?php
	$username = $password = "";
	
	if(isset($_POST['submit'])){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		if($username == "Alpha" and $password == "Kane"){
			header("Location: Template.html");
		}
		
	}
?>