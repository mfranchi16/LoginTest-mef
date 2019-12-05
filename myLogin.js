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
}