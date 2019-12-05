/*
	Mario Franchi
	Web and Dist Programming
	Fall 2019
	Final Project
*/

var counter = 0;

function login(){
	counter++;
	if(counter == 3){
		document.getElementById("log").disabled = true;
	}
	
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
    
	xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log('Response: ' + this.responseText);
            setStatus(this.responseText)
        }
    };
    xmlhttp.open("POST", "login.php", true);
	xmlhttp.send();
}