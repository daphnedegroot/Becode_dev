let expenses = 18;
let insurance = 7;
let contributions = 5;

let total = expenses + insurance + contributions;

$('#btn').on('click', function () {
    //get value salary
    salary = Number($('#salary').val());

    //get value gender
    gender = $('#gender').val();

    //get value children
    children = Number($('#children').val());

    if (children === 3){
        total -= 1;
    } else if (children === 4){
        total -= 2;
    }

    if (gender === "woman") {
        total -= 2;
    }

    //calculate all costs
    sum = salary - ((salary/100) * total);
    //console.log(total);
    //console.log(sum);
    $('#output').html('<h3>Youre salary would be &euro;' + sum + '</h3>');
    total = expenses + insurance + contributions;
});

