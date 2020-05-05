//Check to see if script is linked properly.
console.log("This script is linked properly!");



function getValues(date){
    //get inserted values
    let d = document.getElementById('day').value;
    let m = document.getElementById('month').value;
    let y = document.getElementById('year').value;

    //calculate age
    date = y + "-" + m + "-" + d;
    let today = new Date();
    let birthDate = new Date(date);
    let age = today.getFullYear() - birthDate.getFullYear();
    let mo = today.getMonth() - birthDate.getMonth();
    if (mo < 0 || (mo === 0 && today.getDate() < birthDate.getDate())) {
        age = age - 1;
    }
    document.getElementById('output').innerHTML = "Your age is " + age;
}

//get all days
function days(){
    day = document.getElementById('day');
    for (i = 1; i <= 31; i++){
        let option = document.createElement('option');
        option.value = i;
        option.innerHTML = i;
        day.append(option);
    }
}

//get all the months
function month(){
    month = document.getElementById('month');
    for (i = 1; i <= 12; i++){
        let option = document.createElement('option');
        option.value = i;
        option.innerHTML = i;
        month.append(option);
    }
}

//get all the year - 1920
function year(){
    year = document.getElementById('year');
    let date = new Date();
    currentYear = date.getFullYear();
    for (i = currentYear; i > 1920; i--){
        let option = document.createElement('option');
        option.value = i;
        option.innerHTML = i;
        year.append(option);
    }
}