//Check to see if script is linked properly.
console.log("This script is linked properly!");

//resize images
function resize(){
    let image = document.getElementById('img2');
    image.style.width = "500px";
    image.style.height = "500px";

}

let img = document.getElementById('img');
//load all images
let images = ["adorable-animal-animal-photography-248280.jpg",       "adorable-animal-animal-photography-774731.jpg",
    "adorable-animal-animal-world-209037.jpg",
    "adorable-animal-anxious-669015.jpg",
    "adorable-animal-baby-1472999.jpg",
    "adorable-animal-beautiful-208805.jpg",
    "adorable-animal-blur-617278.jpg",
    "adorable-animal-cat-320014.jpg",
    "adorable-animal-cat-730896.jpg",
    "animal-black-and-white-cat-193255.jpg",
    "animal-cat-eyes-33537.jpg",
    "animal-cat-face-close-up-416160.jpg"];
//set counter
let i = 0;

function slider() {
    //check length
    if (i < images.length - 1) {
        //increment
        i++;
    } else {
        i = 1;
    }
    //display images to html
    img.innerHTML = "<img id='img2' class='responsive' src=" + images[i] + ">";

}

//set timer to 1 sec
setInterval(slider, 1000);

window.onload(resize());



