//Check to see if script is linked properly.
console.log("This script is linked properly!")



function request(){
    // Create a request variable and assign a new XMLHttpRequest object to it
    let request = new XMLHttpRequest();

//open a new connection, using the GET request
    request.open('GET', 'https://aws.random.cat/meow', true);

    request.responseType = 'json';

    request.send();

    request.onload = function(){
        kittens = request.response;
        getImg = document.getElementById('img').src = kittens.file;

        //console.log(kittens);
    }

}

setInterval(request, 2000);
//request();


