let readlineSync = require("readline-sync");

let name = readlineSync.question("What's your name?");
let firstName = readlineSync.question("What's your firstname?");
let city = readlineSync.question("What city do you live in?");
let total = "Welkom " + firstName + " " + name +  " from " + city;

console.log(total);

