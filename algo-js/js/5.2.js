const readlineSync = require("readline-sync");

//set empty object
let object = {
    "name" : "",
    "year" : "",
    "cast" : [

    ]
};

//set value to 0;
let i = 0;

function askTvSerie(){
    object.name = readlineSync.question("Name of tv serie? ");
    object.year = readlineSync.question("The release date? ");
    //repeat question
    do {
        i++;
        object.cast[i] = readlineSync.question("Names of the cast members? ");

        //check if field is empty then stop
    }while( object.cast[i] !== "");
    object.cast.splice(i, 1);
    object.cast.splice(0, 1);
    return object;
}

console.log(askTvSerie(object));
