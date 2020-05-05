function factorialize(a) {
    //if number is < then 0
    if(a < 0) {
        return -1;
        //if number is 0, facotorial is 1
    } else if(a == 0){
        return 1;
        //else call the recusive procedures
    } else {
        return (a * factorialize(a -1));
    }
}
console.log(factorialize(5));