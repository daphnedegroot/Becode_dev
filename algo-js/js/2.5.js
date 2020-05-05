const readlineSync = require("readline-sync");

let question = parseInt(readlineSync.question("What's your favorite number? "));

while(question !== 42){
	question = parseInt(readlineSync.question("Are you sure? Gues again "));
} 
console.log("you won!!");

	
