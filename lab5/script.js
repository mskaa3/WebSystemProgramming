let minNum = 0;
let maxNum = 10000;
// global variables
while (!name) {
    var name = prompt("What is your name");

}
//pop up window that appears when opening the webpage. It's nt inside a function so will appear anyway
//we enter the name and validate if it starts with big letter
if (name.charAt(0) === name.charAt(0).toUpperCase()) {
    document.write("Welcome to our webpage " + name);
} else {
    name = prompt("Enter again, Name should start with uppercase letter");
    if (name.charAt(0) === name.charAt(0).toUpperCase()) {
        document.write("Welcome to our webpage " + name);
    }
}

document.write("<br>");
document.write("Nice to see you in here");
document.write("<br>");

//randomly generated number, not inside a function so appears every time on the website
document.writeln("Your randomly generated number");
document.write("<br>");

min = Math.ceil(minNum);
max = Math.floor(maxNum);
document.write(Math.floor(Math.random() * (max - min)) + min);

//function called by the button, than the pop up window appears
function msg() {
    window.alert("Here goes window.alert");
}

//function called by two buttons, finds element called para(text ) and changes it's color to a chosen one
function changeColor(newColor) {
    var elem = document.getElementById('para');
    elem.style.color = newColor;
}
//function called by clicking on the text with number to round to the floor
function floor(num) {
    window.alert(Math.floor(num));
}

//function which parses a string to a number, depending on the format 
//we got a number or NaN if its not possible to validate a string
//Funciton called by buttons with numbers
function parse(x) {
    switch (parseInt(x) || isNaN(parseInt(x))) {
        case true:
            //different alert(pop up window) for NaN
            window.alert("Uuuppssss, sth went wrong, you got the Nan as a parseInt result!");
            break;
        default:
            window.alert("Parse result is " + parseInt(x));
    }
}
//same as previous but parses to float
function parseF(x) {
    switch (parseFloat(x) || isNaN(parseFloat(x))) {
        case true:
            window.alert("Uuuppssss, sth went wrong, you got the Nan as a parseFloat result!");
            break;
        default:
            window.alert("Parse result is " + parseFloat(x));
    }
}

// var myButton = document.getElementById("myButton");

// myButton.addEventListener("click", function testing() {
//     document.getElementById("text").innerText = "Hello World!";
// });



function dowhile() {
    let result = " ";
    let count = 0;
    do {
        count = count + 1;
        resault = count + result;
    } while (count < 2);
    window.alert("Result of the do while functione is " + result);
}

function forloop() {
    const company = ["IBM", "APPLE", "VOLVO", "and others"];
    var result = " ";
    for (let i = 0; i < company.length; i++) {
        resault += company[i] + "<br>";
    }
    document.getElementById("test").innerHTML = result;
}

function mynewbutton() {
    document.getElementById("button").addEventListener("click", function() {
        document.getElementById("newtext").innerHTML = "some text";
    });
}