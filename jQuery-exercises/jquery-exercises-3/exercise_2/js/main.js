let count = 0;

$(document).ready(function () {
    $('#number').html(0);

    $('#btn1').on('click', function () {
       count++;
        $('#number').html(count);
    });

    $('#btn2').on('click', function () {
        count--;
        $('#number').html(count);
    });
});