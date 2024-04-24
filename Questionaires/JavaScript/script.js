// Questionaires JavaScript Page of website - Past Procratinating

// hide buttons below first stage so they will only open as they are called
function hideButtons(){
	// only show the first stage 
	document.getElementById("B2S").style.display = "none";	
	document.getElementById("B3S").style.display = "none";	
	document.getElementById("B2L").style.display = "none";	
	document.getElementById("B3L").style.display = "none";	
	document.getElementById("B4L").style.display = "none";	
	//document.getElementById("L1").style.display = "none";	
	//document.getElementById("L2").style.display = "none";	
	document.getElementById("return2").style.display = "none";
}

// declare - true false 
var shortTask = false;
var longTask = false;

// output 
var msg = ("");
let return2 = ("");

// Testing
console.log(shortTask);


// first stage buttons reactions
function B1option1(){
	shortTask = true;
    B1actionS();
}

function B1actionS(){
    // hide current element/block 
	document.getElementById("B1").style.display = "none";
	// show next element/block
	document.getElementById("B2S").style.display = "block";
}

function B1option2(){
	longTask = true;
    B1actionL();
}

function B1actionL(){
    // hide current element/block 
	document.getElementById("B1").style.display = "none";
	// show next element/block
	document.getElementById("B2L").style.display = "block";
}

// Second stage buttons reactions - Short Task
function B2Soption1(){
	// hide current element/block 
	document.getElementById("B1").style.display = "none";
	// show next element/block
	document.getElementById("B2S").style.display = "block";
}

function B2Soption1(){
	// hide current element/block 
	document.getElementById("B1").style.display = "none";
	// show next element/block
	document.getElementById("B2S").style.display = "block";
}








// This function creates output to user and sends it to HTML
function advice2user(){
	// creating output to user
	output= msg;
	// output sent to index.html file
	document.getElementById("return2").innerHTML+=output;
}

// decide - if statements 
function decide(){

}

// Information to return to users and sills in msg
function smallTask1(){
    msg=("Think about the time you have spent putting off the task and the amount of time it would have taken to do the task. Would you be better off if you just started on the task now?");
}

function smallTask2(){
    msg=("It can be more stressful to put off a task, than doing it. Go start on that task you have been putting off.");
}

function smallTask3(){
    msg=("Mind over matter. Without thinking about the task, just get up and go do it.");
}

function largeTask1(){
    msg=("Larger tasks can be broken down into smaller tasks. Starting on one of the smaller tasks and completing it can give you the motivation to start working on the next small task sooner.");
}

function largeTask2(){
    msg=("If you break down larger tasks into smaller goals. Each goal that you reach can give you the encouragement to keep going. Making a large task feel a lot more achievable.");
}

function info0(){
    msg=("Think about the task and ask yourself why do I want or need to do this task? Then ask how will I feel when the task is complete?");
}

function info1(){
    msg=("Getting started on a task can be the hardest part. Give it a go and try to get started. You'll surprise yourself.");
}

function info2(){
    msg=("Avoiding a task can lead to negitive feelings that impact other parts of our lives and our self esteem. Try to do a task you have been putting off and see. It can boost your mood and reduce the amount of stress you are feeling.");
}

function info3(){
    msg=("Lists can be great to break down larger tasks into smaller goals, however be aware that making a list can also be a way to procrastinate. If you are making a list, try to make them short term achievable tasks.");
}

function info4(){
    msg=("");
}

// jQuery to hide and show text at top of game page - edited show time from 2000 to 800
$( "#hider" ).click(function() {
    $( "span:last-child" ).hide( "fast", function() {
      // Use arguments.callee so we don't need a named function
      $( this ).prev().hide( "fast", arguments.callee );
    });
  });
  $( "#shower" ).click(function() {
    $( "span" ).show( 800 );
  });