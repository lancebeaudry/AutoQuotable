$(document).ready(function () {
    'use strict';
        
    // when the file is changed then add the file name to the button 
    $('#img-input').bind('change', function () {
        var filename = $(this).val().split('\\').pop();
        $('#img-btn').html(filename);
        return false;
    });
    
    //Close popout on form click/button click
    $('body').on('click', function (e) {
        //did not click a popover toggle, or icon in popover toggle, or popover
        if ($(e.target).data('toggle') !== 'popover'
            && $(e.target).parents('[data-toggle="popover"]').length === 0
            && $(e.target).parents('.popover.in').length === 0) { 
            $('[data-toggle="popover"]').popover('hide');
        }
    });
    $('#popover').bind('click', function () {
        $('.input-group-addon').click();
        return false;
    });
    
    // Add "Remove" title to x close
    
    $('.fileinput-remove').append('<p id="remove">Remove</p>');
            
    $('#email-form').on('submit', function () {
        return false;
    });
        
    $('#submit').on('click', function (e) {
        
        e.stopPropagation();
        var emailPattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
                
        var name = $('#photoUpload-name').val();
        var email = $('#photoUpload-email').val();
        var vin = $('#photoUpload-vin').val();
        var textarea = $('#photoUpload-textarea').val();
        var img = $('#img-input').val();
        var phone = $('#photoUpload-phone').val();
        var zip = $('#zip-on-form').val();
        
            
        // construct the FormData object and append the various fields
        var formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('vin', vin);
        formData.append('zip', zip);
        formData.append('phone', phone);
        formData.append('textarea', textarea);
        formData.append('photo', $('#file-1')[0].files[0]);
        
        
        $.ajax({
            url: "assets/php/contact.php",
            data: formData,
            processData: false, // jquery should not process this data as it is prepared by the FormData Object already
            cache: false,
            contentType: false,
            method: 'POST',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (data) {
            if ( data == 'ok') {
                    $('#fail').hide();
                    $('#success').show();
                    $('#success-dialog').show();
                    $('.form').remove();
                    $(".modal-dialog").css({"marginTop": "50px"});
                    $('.loading').remove();
                    $('h1#quote-title').html('Congratulations. You are on your way to saving time and money on your auto body repair needs.');
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    $('.terms').remove();
                } else {
                    $('#success').hide();
                    $('#fail').html("An error occurred while sending your message.").show();
                }
            }
        });
        // return false to stop the form submission
        return false;
    });
});