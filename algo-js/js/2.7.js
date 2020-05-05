const readlineSync = require("readline-sync");

let n = parseInt(readlineSync.question("Enter number "));
let sum = 0;	
let i;

for(count = 1; count <= n; count++){
	i = parseInt(readlineSync.question("Enter a number "));
	sum = sum + i;
}	
console.log(sum);

