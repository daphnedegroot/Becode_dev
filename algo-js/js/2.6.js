const readlineSync = require("readline-sync");

let question = parseInt(readlineSync.question("Enter a number between 1-7 "));

if (question === 1) {
	console.log("Monday");
} else if (question === 2) {
	console.log("Tuesday");
} else if (question === 3) {
	console.log("Wednesday");
} else if (question === 4) {
	console.log("Thursday");
} else if (question === 5) {
	console.log("Friday");
} else if (question === 6) {
	console.log("Saturday");
} else if(question === 7) {
	console.log("Sunday");
} else {
	console.log("Something went wrong!");
}
