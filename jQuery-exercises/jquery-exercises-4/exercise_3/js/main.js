$('#form').on('submit', function (e) {
    e.preventDefault();
    let firstname = $('#firstname').val();
    let lastname = $('#lastname').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    // console.log(firstname);
    // console.log(lastname);
    // console.log(email);
    // console.log(phone);

    $('.error').remove();

    if (firstname.length < 1) {
        $('#firstname').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /^[a-zA-Z ]+$/;
        var validFirstname = regEx.test(firstname);
        if(!validFirstname){
            $('#firstname').after('<span class="error">Enter a valid firstname</span>');
        }
    }
    if (lastname.length < 1) {
        $('#lastname').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /^[a-zA-Z ]+$/;
        var validLastname = regEx.test(lastname);
        if (!validLastname) {
            $('#lastname').after('<span class="error">Enter a valid lastname</span>');
        }
    }
    if (email.length < 1) {
        $('#email').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /^([a-zA-Z0-9_. -+])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
            $('#email').after('<span class="error">Enter a valid email</span>');
        }
    }
    if (phone.length < 10) {
        $('#phone').after('<span class="error">This field is required</span>');
    } else {
        var regEx = /[0-9\-\(\)\s ]+/;
        var validPhone = regEx.test(phone);
        if (!validPhone){
            $('#phone').after('<span class="error">Enter a valid phone number</span>')
        }
    }
});

