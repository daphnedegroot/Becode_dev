$(document).ready(function () {
    //btn 1: increases the height by 10px, if it is larger than 100px, the height is reset to 10px
    $('#btn1').on('click', function () {
        //check if height is 100px
        if ($('.square').height() === 100){
            //reset height to default
            $('.square').css({"height" : ""});
        } else {
            //increase height 10px
            $('.square').css({"height" : "+=10px"});
        }
    });

    //btn 2: changes the rectangle to green
    $('#btn2').on('click', function () {
       $('.square').css({"backgroundColor" : "#3edd9c"});
    });

    //btn 3: reset the original colors
    $('#btn3').on('click', function () {
        $('.square').css({"backgroundColor" : ""});
    });

    //btn 4: Removes the rectangle
    $('#btn4').on('click', function () {
       $('.square').hide();
    });

    //btn 5: the rectangle appears again
    $('#btn5').on('click', function () {
        $('.square').show();
    });
});