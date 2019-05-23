$('#tb_sub_departaments_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_sub_dept_update: {
                        required: true, 
                        
                    },short_sub_dept_name_update: {
                        required: true, 
                        
                    },sub_dept_name_update: {
                        required: true, 
                        
                    },id_departament_update: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_sub_dept_update: {
                        required: true, 
                        
                    },short_sub_dept_name_update: {
                        required: true, 
                        
                    },sub_dept_name_update: {
                        required: true, 
                        
                    },id_departament_update: {
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
                    );$('#tb_sub_departaments_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                short_sub_dept_name_create: {
                        required: true, 
                        
                    },sub_dept_name_create: {
                        required: true, 
                        
                    },id_departament_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                short_sub_dept_name_create: {
                        required: true, 
                        
                    },sub_dept_name_create: {
                        required: true, 
                        
                    },id_departament_create: {
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