$(document).ready(function() {


    $("#frmlogin").validate({
        language: "es",
        errorClass: "invalid",
        validClass: "valid",
        rules: {
            user_name: {
                required: true,
            },
            clean_pass: {
                required: true
            }
        },
        messages: {
            user_name: {
                required: 'Ingrese Usuario'
            },
            clean_pass: {
                required: 'Ingrese Password'
            }
        },
        honkeyup: true,
        submitHandler: function() {
            $("div.error").hide();
            $('#frmlogin').get(0).submit();
        },

        highlight: function(element, required) {
            $(element).fadeOut(function() {
                $(element).fadeIn();
                $(element).css('border', '2px solid #FDADAF');
            });

        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).css('border', '1px solid #CCC');
        }
    });
});

$("#btnEnviar").click(function() {
    $("#frmlogin").validate();
});