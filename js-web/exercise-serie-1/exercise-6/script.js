//Check to see if script is linked properly.
console.log("This script is linked properly!");


let images = ["adorable-animal-animal-photography-248280.jpg",
    "adorable-animal-animal-photography-774731.jpg",
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
console.log(typeof images);

function showImages(){
    let image = document.getElementById('img');
    image.innerHTML = " ";

    for (i = 0; i < images.length; i++) {
        // create the image element
        imageElement = document.createElement('img');
        imageElement.setAttribute('src', images[i]);
        imageElement.className = "responsive";
        // append the element to the container
        image.append(imageElement);
    }
}

function shuffle(){
    showImages();
    for (i = images.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        temp = images[i];
        images[i] = images[j];
        images[j] = temp;
    }
}








