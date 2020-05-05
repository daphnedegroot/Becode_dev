const readlineSync = require("readline-sync");

let minNum = parseInt(readlineSync.question("Give in the first number "));
let maxNum = parseInt(readlineSync.question("Give in the second number "));

if(minNum > maxNum) {
	console.error("You don't understand anything");
} else {
	let curNum = parseInt(readlineSync.question("Give in the third number "));
	if((curNum > minNum) && (curNum < maxNum)){
		console.log(curNum);
	}
}







