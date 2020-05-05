class Circle {

    //define attributes
    constructor(xPos, yPos, radius){
        this.xPos = xPos;
        this.yPos = yPos;
        this.radius = radius;
    }

    // adjust the position of the circle
    move(xOffset, yOffset){
        this.xPos = xOffset;
        this.yPos = yOffset;
    }

    //return the surface of the circle
    get surface(){
        //calculate radius
        return "oppervlakte cirkel: " + Math.PI * (this.radius)**2;

    }

    set surface(changeRadius){
        this.radius = changeRadius;
    }
}

let circle = new Circle(40,10,50);
console.log(circle);
circle.move(20,100);
console.log(circle.surface);
circle.surface = 70;
console.log(circle);