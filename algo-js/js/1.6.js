const readlineSync = require("readline-sync");

let num1 = readlineSync.question("Give in the first number? ");
let num2 = readlineSync.question("Give in the second number? ");
let total = num1% num2;

console.log(total);
