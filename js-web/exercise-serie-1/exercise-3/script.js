//Check to see if script is linked properly.
console.log("This script is linked properly!")


//get values of form input
function getInput(){
    //get all values
    vilainName = document.getElementById('vilainName').value;
    power = document.getElementById('power').value;
    motivation = document.getElementById('motivation').value;
    plan = document.getElementById('plan').value;
}

function reset(){
    document.getElementById('form').reset();
}

function hideForm(){
    //hide form when input values been submitted
    if (document.getElementById('form').style.display === 'block'){
        document.getElementById('form').style.display ='none';
    }
    //get input values
    getInput();
    // show input
    document.getElementById('output').innerHTML ='<h1>My Super Evil Story</h1><br>' + '<h5>My super name:</h5> ' + vilainName + '<br>' + ' <h5>My super power:</h5>' + power + '<br>' + '<h5>My motivation: </h5>' + motivation + '<br>' + '<h5>My evil plan:</h5>' + plan;
    return false;
}