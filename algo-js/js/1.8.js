
const readlineSync = require("readline-sync");

let name = readlineSync.question("What is your name? ");
let favColor = readlineSync.question("What is your favorite color? ");
let favPet = readlineSync.question("What is your favorite pet? ");
let food = readlineSync.question("What is food do you love to eat? ");
let total = "When " + name + " is coming home from a long day at school, and find his " + favPet + " wearing his favorite " + favColor + " sweater, and he is eating " + food + "."; 
console.log(total);
