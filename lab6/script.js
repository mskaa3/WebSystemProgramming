let mynum=1;
let finalscore=0;
var lastColourID;
function show() {
    if(mynum==1){
        //alert asking the usr if he wants to play
    var answer = window.confirm("Do you want to play?");
    
    if (answer) {
       
        mynum++;
        createBoxes();
        }
    }
    else {
        //some code
    }
}
var colors = [
    "rgb(255, 215, 0)", 
    // yellow
    "rgb(255, 140, 0)",
    // orange
    "rgb(255, 20, 147)",
    // mana sth
    "rgb(255, 182,193)",
    // pink
    "rgb(0, 100, 0)"
    // green
];

// Creating boxes and assigning them id's and colours in order
function createBoxes(){
    var cont = document.getElementById("mybox");
 
            for(var i = 1; i <6; ++i){
            var div = document.createElement("div");
            div.setAttribute("class", "square");
            div.setAttribute("id", "div" + i);
            // adding function whiile clicking on them
            div.addEventListener("click", dissapear);
            
            cont.appendChild(div);
            div.style.backgroundColor = colors[i-1]
            
            }
        }
// function that makes squares dissapear when you click
function dissapear(){
    lastColourID=this.id;
    // if the colour is not yellow, than click is enough
    if(lastColourID!="div1"){
    this.style.display="none";
    finalscore++;
    document.getElementById('scoreNum').innerHTML = finalscore; 
    // if the colour is yellow, than we need to press also ctrl
    }else{
        if (window.event.ctrlKey) {
            this.style.display="none";
            finalscore++;
            document.getElementById('scoreNum').innerHTML = finalscore; 
            
        }
    }
}
//functiion that compares the input first letter with the colour. If its correct, it adds points 
function doSomething(elem,event) {
    //if we press enter after writing in the input box the function is called, enter code is 13
    if (event.keyCode == 13) {
     

    var x;
    x = document.getElementById("fname").value;

    
    if (x.toLowerCase().charAt(0)=='y'&&lastColourID=="div1") {
        finalscore++;
         document.getElementById('scoreNum').innerHTML = finalscore; 
    } else if (x.toLowerCase().charAt(0)=='o'&&lastColourID=="div2"){
        finalscore++;
         document.getElementById('scoreNum').innerHTML = finalscore; 
    } else if (x.toLowerCase().charAt(0)=='m'&&lastColourID=="div3"){
        finalscore++;
         document.getElementById('scoreNum').innerHTML = finalscore; 
    }else if (x.toLowerCase().charAt(0)=='p'&&lastColourID=="div4"){
        finalscore++;
         document.getElementById('scoreNum').innerHTML = finalscore; 
    }else if (x.toLowerCase().charAt(0)=='g'&&lastColourID=="div5"){
        finalscore++;
         document.getElementById('scoreNum').innerHTML = finalscore; 
    }
   }
   //clearing out input box
   elem.value = "";
   //if you reach maximum score you are informed about that
   if(finalscore==10){
    document.getElementById('final').innerHTML = "YOU JUST SCORED MAXIMUM NUMBER OF POINTS"; 
}
}

