$(document).ready(function () {
    $('h2').fadeOut(5000);
    $(document).keydown(function(e){
        switch (e.which){
            case 37: //left arrow key
                $(".square").css({
                    left: "-=50"
                });
                break;
            case 38: //up arrow key
                $(".square").css({
                    top: "-=50"
                });
                break;
            case 39: //right arrow key
                $(".square").css({
                    left: "+=50"
                });
                break;
            case 40: //bottom arrow key
                $(".square").css({
                    top: "+=50"
                });
                break;
        }
    });
});