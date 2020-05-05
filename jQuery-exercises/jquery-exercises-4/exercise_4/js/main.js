$('#form').on('submit', function (e) {
    e.preventDefault();
    let firstname = $('#firstname').val();
    let lastname = $('#lastname').val();
    let dateOfBirth = $('#dateOfBirth').val();
    let placeOfBirth = $('#placeOfBirth').val();
    let work = $('#work').val();
    let company = $('#company').val();

    $('.error').remove();

    //check if firstname is valid
    if (firstname.length < 1) {
        $('#firstname').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /^[a-zA-Z ]+$/;
        var validFirstname = regEx.test(firstname);
        if(!validFirstname){
            $('#firstname').after('<span class="error">Enter a valid firstname</span>');
        }
    }

    //check if lastname is valid
    if (lastname.length < 1) {
        $('#lastname').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /^[a-zA-Z ]+$/;
        var validLastname = regEx.test(lastname);
        if (!validLastname) {
            $('#lastname').after('<span class="error">Enter a valid lastname</span>');
        }
    }

    //check if date is valid
    if(dateOfBirth === "") {
        $('#dateOfBirth').after('<span class="error">Enter a valid date</span>');
    }

    //check if place of birth is valid
    if (placeOfBirth.length < 1) {
        $('#placeOfBirth').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /^[a-zA-Z ]+$/;
        var validplace = regEx.test(placeOfBirth);
        if(!validplace){
            $('#placeOfBirth').after('<span class="error">Enter a valid Place</span>');
        }
    }

    //check if work is valid
    if (work.length < 1) {
        $('#work').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /^[a-zA-Z ]+$/;
        var validWork = regEx.test(work);
        if (!validWork) {
            $('#work').after('<span class="error">Enter a valid job</span>');
        }
    }

    //check if company is valid
    if (company.length < 1) {
        $('#company').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /^[a-zA-Z ]+$/;
        var validCompany = regEx.test(company);
        if (!validCompany) {
            $('#company').after('<span class="error">Enter a valid company</span>');
        }
    }

    //make a sentence
    let name = firstname + " " + lastname + ", ";
    let born = 'Born ' + dateOfBirth + ' in ' + placeOfBirth;
    let working = ' and currently working as a ' + work + ' at ' + company;
    $('#output').html('<h2>' + name + born + working + '</h2>');

});