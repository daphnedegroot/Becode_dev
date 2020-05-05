//Check to see if script is linked properly.
console.log("This script is linked properly!")


function changePosition() {
    button = document.getElementById('btn');
    min = 200;
    max = 600;
    newWidth = Math.floor(Math.random() * (max - min + 1)) + min;
    newHeight = Math.floor(Math.random() * (max - min + 1)) + min;
    button.style.position = "absolute";
    button.style.left = newWidth + "px";
    button.style.right = newWidth + "px";
    button.style.top = newHeight + "px";
    button.style.bottom = newHeight + "px";
}
