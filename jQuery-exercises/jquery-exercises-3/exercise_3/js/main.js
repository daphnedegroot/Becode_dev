$(document).ready(function () {
    //generate random number
    let rand = Math.floor(Math.random()* 100);
    console.log(rand);
    count = 0;

    $('#btn').on('click', function () {
        //get value of users input
        value = Number($('#number').val());
        count++;

        //is number equal to random number
        if (value === rand){
            $('#output').append(value + ' right');
            if (alert('You have guessed ' + count)){

            } else {
                window.location.reload();
            }
            //is number bigger then random number
        } else if (value > rand ){
            $('#output').append(value + ' lower <br>');
            //is number smaller then random number
        } else if (value < rand){
            $('#output').append(value + ' higher <br>');
        }

    });

});