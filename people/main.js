$('#tb_people_lendings_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_person_update: {
                        required: true, 
                        
                    },person_name_update: {
                        required: true, 
                        
                    },card_id_update: {
                        required: true, 
                        
                    },is_lent_to_update: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_person_update: {
                        required: true, 
                        
                    },person_name_update: {
                        required: true, 
                        
                    },card_id_update: {
                        required: true, 
                        
                    },is_lent_to_update: {
                        required: true, 
                        
                    },
                            },
                            honkeyup: false,
                            submitHandler: function () {
                                $('div.error').hide();
                                update();
                            },
                            honkeyup: false,
                            highlight: function (element, required) {
                                $(element).fadeOut(function () {
                                    $(element).fadeIn();
                                    $(element).css('border', '2px solid #FDADAF');
                                });
                            },
                            unhighlight: function (element, errorClass, validClass) {
                                $(element).css('border', '1px solid #CCC');
                            }
                        }
                    );$('#tb_people_lendings_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                person_name_create: {
                        required: true, 
                        
                    },card_id_create: {
                        required: true, 
                        
                    },is_lent_to_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                person_name_create: {
                        required: true, 
                        
                    },card_id_create: {
                        required: true, 
                        
                    },is_lent_to_create: {
                        required: true, 
                        
                    },
                            },
                            honkeyup: false,
                            submitHandler: function () {
                                $('div.error').hide();
                                update();
                            },
                            honkeyup: false,
                            highlight: function (element, required) {
                                $(element).fadeOut(function () {
                                    $(element).fadeIn();
                                    $(element).css('border', '2px solid #FDADAF');
                                });
                            },
                            unhighlight: function (element, errorClass, validClass) {
                                $(element).css('border', '1px solid #CCC');
                            }
                        }
                    );