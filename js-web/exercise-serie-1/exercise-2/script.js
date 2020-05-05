//Check to see if script is linked properly.
console.log("This script is linked properly!")

// get input values
function calculate(){
    num1 = parseInt(document.getElementById('num1').value);
    num2 = parseInt(document.getElementById('num2').value);
    //document.getElementById('output').innerHTML = num1 + num2;
}

// add sum of values
function add() {
    calculate();
    result = num1 + num2;
    document.getElementById('output').innerHTML = result;
}

//substract sum of values
function sub() {
    calculate();
    result = num1 - num2;
    document.getElementById('output').innerHTML = result;
}

//divide sum of values
function divide() {
    calculate();
    result = num1 / num2;
    document.getElementById('output').innerHTML = result;
}

//multiply sum of values
function multiply() {
    calculate();
    result = num1 * num2;
    document.getElementById('output').innerHTML = result;
}