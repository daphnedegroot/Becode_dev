// make function for the distance between point a en point b
function calcDistance(x1, y1, x2, y2) {
    //calculate the x-as
    let x = x1 - x2;
    //calculate the y-as
    let y = y1 - y2;
    // squareroot
    let c = Math.pow(x,2) + Math.pow(y,2);
    c = Math.sqrt(c, 2);
    return c;
}

console.log(calcDistance(1,1,2,2));
console.log(calcDistance(1,1,3,1));
console.log(calcDistance(4,1,1,1));
console.log(calcDistance(-2,2,2,-2));

/*
Point A = [1, 1], point B = [2, 2] => 1.41
Point A = [1, 1], point B = [3, 1] => 2
Point A = [4, 1], point B = [1, 1] => 3
Point A = [-2, 2], point B = [2, -2] => 5.65
*/