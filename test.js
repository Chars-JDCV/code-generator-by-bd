$('#tb_chiefs_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_chief_update: { required: true, }, id_title_update: { required: true, }, chief_name_update: { required: true, }, },
    messages: { id_chief_update: { required: true, }, id_title_update: { required: true, }, chief_name_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_delete_goods_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_delete_update: { required: true, }, id_good_update: { required: true, }, date_of_deletion_update: { required: true, }, id_sub_dept_update: { required: true, }, value_deleted_good_update: { required: true, }, },
    messages: { id_delete_update: { required: true, }, id_good_update: { required: true, }, date_of_deletion_update: { required: true, }, id_sub_dept_update: { required: true, }, value_deleted_good_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_departaments_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_departament_update: { required: true, }, short_dept_name_update: { required: true, }, full_dept_name_update: { required: true, }, id_chief_update: { required: true, }, },
    messages: { id_departament_update: { required: true, }, short_dept_name_update: { required: true, }, full_dept_name_update: { required: true, }, id_chief_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_goods_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_good_update: { required: true, }, id_sub_departament_update: { required: true, }, short_good_name_update: { required: true, }, full_good_name_update: { required: true, }, good_description_update: { required: true, }, good_brand_update: { required: true, }, good_model_update: { required: true, }, sibisep_serial_code_update: { required: true, }, good_value_update: { required: true, }, date_update: { required: true, }, good_exists_update: { required: true, }, quantity_update: { required: true, }, is_unregistered_update: { required: true, }, },
    messages: { id_good_update: { required: true, }, id_sub_departament_update: { required: true, }, short_good_name_update: { required: true, }, full_good_name_update: { required: true, }, good_description_update: { required: true, }, good_brand_update: { required: true, }, good_model_update: { required: true, }, sibisep_serial_code_update: { required: true, }, good_value_update: { required: true, }, date_update: { required: true, }, good_exists_update: { required: true, }, quantity_update: { required: true, }, is_unregistered_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_lendings_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_lending_update: { required: true, }, date_lent_update: { required: true, }, date_returned_update: { required: true, }, id_person_update: { required: true, }, id_good_update: { required: true, }, quantity_update: { required: true, }, },
    messages: { id_lending_update: { required: true, }, date_lent_update: { required: true, }, date_returned_update: { required: true, }, id_person_update: { required: true, }, id_good_update: { required: true, }, quantity_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_people_lendings_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_person_update: { required: true, }, person_name_update: { required: true, }, card_id_update: { required: true, }, is_lent_to_update: { required: true, }, },
    messages: { id_person_update: { required: true, }, person_name_update: { required: true, }, card_id_update: { required: true, }, is_lent_to_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_sub_departaments_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_sub_dept_update: { required: true, }, short_sub_dept_name_update: { required: true, }, sub_dept_name_update: { required: true, }, id_departament_update: { required: true, }, },
    messages: { id_sub_dept_update: { required: true, }, short_sub_dept_name_update: { required: true, }, sub_dept_name_update: { required: true, }, id_departament_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_switch_good_depts_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_switch_update: { required: true, }, id_good_update: { required: true, }, id_src_sub_dept_update: { required: true, }, id_dest_sub_dept_update: { required: true, }, date_of_change_update: { required: true, }, reason_for_switch_update: { required: true, }, },
    messages: { id_switch_update: { required: true, }, id_good_update: { required: true, }, id_src_sub_dept_update: { required: true, }, id_dest_sub_dept_update: { required: true, }, date_of_change_update: { required: true, }, reason_for_switch_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_titles_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_title_update: { required: true, }, title_update: { required: true, }, },
    messages: { id_title_update: { required: true, }, title_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});

$('#tb_users_update').validate({
    language: 'es',
    errorClass: 'invalid',
    validClass: 'valid',
    rules: { id_user_update: { required: true, }, user_name_update: { required: true, }, full_name_update: { required: true, }, hashed_pass_update: { required: true, }, clean_pass_update: { required: true, }, },
    messages: { id_user_update: { required: true, }, user_name_update: { required: true, }, full_name_update: { required: true, }, hashed_pass_update: { required: true, }, clean_pass_update: { required: true, }, },
    honkeyup: false,
    submitHandler: function() {
        $('div.error').hide();
        update();
    },
    honkeyup: false,
    highlight: function(element, required) {
        $(element).fadeOut(function() {
            $(element).fadeIn();
            $(element).css('border', '2px solid #FDADAF');
        });
    },
    unhighlight: function(element, errorClass, validClass) { $(element).css('border', '1px solid #CCC'); }
});