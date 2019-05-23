$('#tb_departaments_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_departament_update: {
                        required: true, 
                        
                    },short_dept_name_update: {
                        required: true, 
                        
                    },full_dept_name_update: {
                        required: true, 
                        
                    },id_chief_update: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_departament_update: {
                        required: true, 
                        
                    },short_dept_name_update: {
                        required: true, 
                        
                    },full_dept_name_update: {
                        required: true, 
                        
                    },id_chief_update: {
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
                    );$('#tb_departaments_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                short_dept_name_create: {
                        required: true, 
                        
                    },full_dept_name_create: {
                        required: true, 
                        
                    },id_chief_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                short_dept_name_create: {
                        required: true, 
                        
                    },full_dept_name_create: {
                        required: true, 
                        
                    },id_chief_create: {
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