const readlineSync = require("readline-sync");

let num1 = readlineSync.question("Give in a decimal number");
let num2 = readlineSync.question("Give in a second decimal number");
let total = parseInt(num1) * parseFloat(num2);

console.log("Your output is " + total);
