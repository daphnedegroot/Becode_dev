const readlineSync = require("readline-sync");

let question = parseInt(readlineSync.question("How many random number would you like to see? "));

function rand10(){
	return Math.floor((Math.random()*10)+1);
}

function multiRand(){
	let n = [];
	for(i = 0; i < question; i++){
	n.push(rand10());
	}
	return n;
}

multiRand();
console.log(multiRand());

