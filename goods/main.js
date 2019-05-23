$('#tb_goods_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_good_update: {
                        required: true, 
                        
                    },id_sub_departament_update: {
                        required: true, 
                        
                    },short_good_name_update: {
                        required: true, 
                        
                    },full_good_name_update: {
                        required: true, 
                        
                    },good_description_update: {
                        required: true, 
                        
                    },good_brand_update: {
                        required: true, 
                        
                    },good_model_update: {
                        required: true, 
                        
                    },sibisep_serial_code_update: {
                        required: true, 
                        
                    },good_value_update: {
                        required: true, 
                        
                    },date_update: {
                        required: true, 
                        
                    },good_exists_update: {
                        required: true, 
                        
                    },quantity_update: {
                        required: true, 
                        
                    },is_unregistered_update: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_good_update: {
                        required: true, 
                        
                    },id_sub_departament_update: {
                        required: true, 
                        
                    },short_good_name_update: {
                        required: true, 
                        
                    },full_good_name_update: {
                        required: true, 
                        
                    },good_description_update: {
                        required: true, 
                        
                    },good_brand_update: {
                        required: true, 
                        
                    },good_model_update: {
                        required: true, 
                        
                    },sibisep_serial_code_update: {
                        required: true, 
                        
                    },good_value_update: {
                        required: true, 
                        
                    },date_update: {
                        required: true, 
                        
                    },good_exists_update: {
                        required: true, 
                        
                    },quantity_update: {
                        required: true, 
                        
                    },is_unregistered_update: {
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
                    );$('#tb_goods_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_sub_departament_create: {
                        required: true, 
                        
                    },short_good_name_create: {
                        required: true, 
                        
                    },full_good_name_create: {
                        required: true, 
                        
                    },good_description_create: {
                        required: true, 
                        
                    },good_brand_create: {
                        required: true, 
                        
                    },good_model_create: {
                        required: true, 
                        
                    },sibisep_serial_code_create: {
                        required: true, 
                        
                    },good_value_create: {
                        required: true, 
                        
                    },date_create: {
                        required: true, 
                        
                    },good_exists_create: {
                        required: true, 
                        
                    },quantity_create: {
                        required: true, 
                        
                    },is_unregistered_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_sub_departament_create: {
                        required: true, 
                        
                    },short_good_name_create: {
                        required: true, 
                        
                    },full_good_name_create: {
                        required: true, 
                        
                    },good_description_create: {
                        required: true, 
                        
                    },good_brand_create: {
                        required: true, 
                        
                    },good_model_create: {
                        required: true, 
                        
                    },sibisep_serial_code_create: {
                        required: true, 
                        
                    },good_value_create: {
                        required: true, 
                        
                    },date_create: {
                        required: true, 
                        
                    },good_exists_create: {
                        required: true, 
                        
                    },quantity_create: {
                        required: true, 
                        
                    },is_unregistered_create: {
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