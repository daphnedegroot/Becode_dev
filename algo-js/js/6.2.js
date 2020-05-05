class Retangle {

    constructor(topLeftXPos, topLeftYPos, width, length){
        this.topLeftXPos = topLeftXPos;
        this.topLeftYPos = topLeftYPos;
        this.width = width;
        this.length = length;
    }

    collides(otherRetangle) {
        //return true if
    }
}

let retangle = new Retangle(10,10,400,700);
console.log(retangle);

// if (rect1.x < rect2.x + rect2.width &&
//     rect1.x + rect1.width > rect2.x &&
//     rect1.y < rect2.y + rect2.height &&
//     rect1.height + rect1.y > rect2.y) {
//     // collision detected!
// }