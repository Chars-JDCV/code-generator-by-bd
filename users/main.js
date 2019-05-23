$('#tb_users_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_user_update: {
                        required: true, 
                        
                    },user_name_update: {
                        required: true, 
                        
                    },full_name_update: {
                        required: true, 
                        
                    },hashed_pass_update: {
                        required: true, 
                        
                    },clean_pass_update: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_user_update: {
                        required: true, 
                        
                    },user_name_update: {
                        required: true, 
                        
                    },full_name_update: {
                        required: true, 
                        
                    },hashed_pass_update: {
                        required: true, 
                        
                    },clean_pass_update: {
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
                    );$('#tb_users_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                user_name_create: {
                        required: true, 
                        
                    },full_name_create: {
                        required: true, 
                        
                    },hashed_pass_create: {
                        required: true, 
                        
                    },clean_pass_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                user_name_create: {
                        required: true, 
                        
                    },full_name_create: {
                        required: true, 
                        
                    },hashed_pass_create: {
                        required: true, 
                        
                    },clean_pass_create: {
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