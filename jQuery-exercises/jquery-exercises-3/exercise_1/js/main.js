let count = 0;

$(document).ready(function () {
    $('#btn').on('click', function () {
        count++;
        html = 'Times Clicked: '
        $('#output').html(html + count);
    });
});