$('#form').on('submit', function (e) {
    e.preventDefault();
    let display_name = $('#display-name').val();
    let password = $('#pass').val();
    let pass_confirm = $('#pass-confirm').val();
    let email = $('#email').val();



    $('.error').remove();

    //check if display_name is valid
    if (display_name.length < 5) {
        $('#display-name').css({"border" : "1px solid red"});
    } else {
        var regEx = /^[a-zA-Z ]+$/;
        var validFirstname = regEx.test(display_name);
        if(!validFirstname){
            $('#display-name').css({"border" : "1px solid red"});
        } else if (validFirstname) {
            $('#display-name').css({"border" : "1px solid green"});
        }
    }

    //check if password is valid
    if (password.length < 5) {
        $('#pass').css({"border" : "1px solid red"});
    } else {
        var regEx = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.)/;
        var validPass = regEx.test(password);
        if (!validPass){
            $('#pass').css({"border" : "1px solid red"});

        } else if (validPass) {
            $('#pass').css({"border" : "1px solid green"});
        }
    }

    //check if confirm password is valid & === to password
    if (pass_confirm.length < 5) {
        $('#pass-confirm').css({"border" : "1px solid red"});
    } else if (pass_confirm !== password) {
        $('#pass-confirm').css({"border" : "1px solid red"});
    } else {
        $('#pass-confirm').css({"border" : "1px solid green"});
    }

    //check if email is valid
    if (email.length < 5) {
        $('#email').css({"border" : "1px solid red"});
    } else {
        var regEx = /^([a-zA-Z0-9_. -+])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
            $('#email').css({"border" : "1px solid red"});
        } else if (validEmail){
            $('#email').css({"border" : "1px solid green"});
        }
    }
});
