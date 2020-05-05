//Check to see if script is linked properly.
console.log("This script is linked properly!")



// Create a request variable and assign a new XMLHttpRequest object to it
let request = new XMLHttpRequest();

//open a new connection, using the GET request
request.open('GET', 'https://api.punkapi.com/v2/beers', true);

request.responseType = 'json';

request.send();

request.onload = function(){
    beer = request.response;

    beer.forEach(beer => {
        //create bootstrap card and loop through API
        const row = document.getElementById('row');

        //create div card
        const div = document.createElement('div');
        div.setAttribute('class', 'card col-md-4');

        //create img card
        const img = document.createElement('img');
        img.setAttribute('class', 'card-img-top');
        img.src = beer.image_url;

        //create div card-body
        const div2 = document.createElement('div');
        div2.setAttribute('class', 'card-body');

        //create card title
        const h5 = document.createElement('h5');
        h5.setAttribute('class', 'card-title');
        h5.innerHTML = beer.name;

        //create card-subtitle
        const h6 = document.createElement('h6');
        h6.setAttribute('class', 'card-subtitle');
        h6.innerHTML = beer.tagline;

        //create card-text
        const p = document.createElement('p');
        p.setAttribute('class', 'card-text text-muted');
        p.innerHTML = beer.first_brewed;

        row.append(div);
        div.append(img);
        div.append(div2);
        div2.append(h5);
        div2.append(h6);
        div2.append(p);
    });
}
