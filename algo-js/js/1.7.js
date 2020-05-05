const readlineSync = require("readline-sync");

let size = readlineSync.question("What is your shoe size? ");
let birth = readlineSync.question("What is your birthyear? ");
let sum =(((((size * 2) + 5) * 50) - birth) + 1766);

console.log(sum);
