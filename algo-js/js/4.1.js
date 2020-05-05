const readlineSync = require("readline-sync");

let width = readlineSync.question("Give in the width ?");
let length = readlineSync.question("Give in the length ? ");

function calcSurface(width, length) {
	return (width * length);
}

console.log(calcSurface(width,length));
