const readlineSync = require("readline-sync");

let question = parseInt(readlineSync.question("How many random number would you like to see? "));
//Get random numbers between 1-10
function rand10(){
        return Math.floor((Math.random()*10)+1);
}

//Generate random numbers with rand10() and push in empty array
function multiRand(){
    let n=[];
        for(i = 0; i < question; i++){
        n.push(rand10());
        }
    return n;
}

//Get min number of array
function min(n){
	 return Math.min.apply(null, n);
}

//Get max number of array
function max(n){
	return Math.max.apply(null, n);
}

//Get average of array
function average(n){
    let sum = 0;
	//addition of array
	for(i = 0; i < n.length; i++){
		sum += n[i];
	}
	return sum / n.length;

}


let array = multiRand();
console.log(array);

console.log(min(array));

console.log(max(array));

console.log(average(array));
