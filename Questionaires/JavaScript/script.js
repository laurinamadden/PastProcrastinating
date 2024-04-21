// Questionaires JavaScript Page of website - Past Procratinating

// hide buttons below first stage so they will only open as they are called
function hideButtons(){
	// only show the first stage 
	document.getElementById("B2").style.display = "none";	
	document.getElementById("B3").style.display = "none";	
	document.getElementById("B4").style.display = "none";	
	document.getElementById("B5").style.display = "none";	
	document.getElementById("B6").style.display = "none";	
	document.getElementById("L1").style.display = "none";	
	document.getElementById("L2").style.display = "none";	
	document.getElementById("return2").style.display = "none";
}

// declare - true false 
var pickNames = false;

// output 
var msg = ("");
let return2 = ("");

// Testing
console.log(enterWhatWeAreTesting);


// first stage buttons reactions
function B1action(){
	// hide current element/block 
	document.getElementById("B1").style.display = "none";
	// show next element/block
	document.getElementById("B2").style.display = "block";
}

// second stage buttons reactions
function B1action(){
	// hide current element/block 
	document.getElementById("B1").style.display = "none";
	// show next element/block
	document.getElementById("B2").style.display = "block";
}

