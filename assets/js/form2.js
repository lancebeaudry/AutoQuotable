$(document).ready(function () {
    'use strict';
    // Contact Form
    $('#notify').click(function (e) {
        
        //Stop form submission & check the validation
        e.preventDefault();
        
        $.post("assets/php/form.php", $("#contact-form").serialize(), function (result) {
 //Check the result set from contact.php file.
            if (result == 'sent') {
 //If the email is sent successfully, remove these areas
                $('#submit-area').remove();
                $('#contact-form').remove();
                $('#contact-title').remove();
                $('html, body').animate({ scrollTop: 0 }, 'slow');
 //Display the success message
                $('#success-form').fadeIn(500);
            } else {
 //Display the error message
                $('#fail-form').fadeIn(500);
 // Enable the submit button again
                $('#notify').removeAttr('disabled').attr('value', 'Retry');
            }
        });
    });
    
    // Pro Sign Up Form
    $('#submit-pro-form').click(function (e) {
        
        //Stop form submission & check the validation
        e.preventDefault();
        
        $.post("assets/php/sign-up-form.php", $("#pro-sign-up").serialize(), function (result) {
 //Check the result set from contact.php file.
            if (result == 'sent') {
 //If the email is sent successfully, remove the form, scroll up,
                $('#pro-sign-up').remove();
                $('html, body').animate({ scrollTop: 0 }, 'slow');
                $('h1#quote-title').html("Thanks for filling out the form. We will be in touch soon.");
                $(".modal-dialog").css({"marginTop": "50px"});
 //Display the success message
                $('.alert-success').fadeIn(500);
            } else {
 //Display the error message
                $('.alert-warning').fadeIn(500);
 // Enable the submit button again
                $('#submit-pro-form').removeAttr('disabled').attr('value', 'Retry');
            }
        });
    });
});