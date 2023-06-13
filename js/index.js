let a = 0
function myEnterFunction() {
    document.getElementById("+").innerHTML = a+=1;
   
}
let X = 0
function myEnterFunction1() {
    document.getElementById("++").innerHTML = X+=1;
   
}

///////////////////

let b = 0 
function compteur() { 
// b = b+=1;
document.getElementById('nb').innerHTML =  b+=1;

document.getElementById("nb").innerHTML = "100 /  " + b; 
document.getElementById("bn").innerHTML = 700 + b + " / " + (compteur == b , "fois");
}



///////////////////////

$(document).ready(function(){
$("button").click(function(){
$(".ch").css("color", "#d6a200");
});



});


///////////////////////


function mDown(obj) {
    obj.style.backgroundColor = "#d6a200";
    obj.innerHTML = "Continue";
  }
  

  ////////////////////////////////////////////////////////////////
 
 