//Check to see if script is linked properly.
console.log("This script is linked properly!")

const img = document.getElementById('cookie');
const output = document.getElementById('output');
const btn = document.getElementById('btn');
const btn2 = document.getElementById('btn2');
let multiplyer = 0;
let price = 50;

function clickCookie() {
    count = 0;

    img.onclick = function() {
        //increment count
        count += 2 ** multiplyer;
        // output how many clicks
        output.innerHTML = "Total clicks: " + count + "<br>";

        if (count >= 50){
            btn.style.display = "block";
        }

        if (count >= 100) {
            btn2.style.display = "block";
        }
        //remove classlist
        img.classList.remove('bump');

        //triggering reflow (without this it won't work);
        img.offsetWidth = img.offsetWidth;

        //add classlist
        img.classList.add('bump');
    }
}

function addMulti(){
    count -= price;
    output.innerHTML = "Total clicks: " + count + "<br>";
    multiplyer++;
    btn.style.display = "none";
    price *= 1.5;
}





