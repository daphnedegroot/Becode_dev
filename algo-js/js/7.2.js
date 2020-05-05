/*
    Fibonacci
*/

let x = 0;
let y = 1;

for (i = 0; i <= 10; i++){
    let z = x + y;
    console.log(z + "");
    x = y;
    y = z;
}