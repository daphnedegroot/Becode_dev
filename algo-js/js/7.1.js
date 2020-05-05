/*
    NUMBER GUESSER

    # Generate a integer number between 1 - 100 (don't display the number)
    # Ask the user to enter a number
    # If user number is < random number, display "to low" and ask for a new number
    # If user number is > random number, display "to high" and ask for a new number
    # If user answer correct, display "Well guessed!" and exit game
 */

const readlineSync = require("readline-sync");
//create random number
function randomNum(){
    return Math.floor((Math.random()*100)+1);
}
let rand = randomNum();
console.log(rand);
let userNum = 0;

while (userNum !== rand){
    userNum = parseInt(readlineSync.question("Guess the number? "));
    if (userNum < rand){
        console.log("to low");
    } else if (userNum > rand){
        console.log("to high");
    } else {
        console.log("Well Guessed!");
    }
}









