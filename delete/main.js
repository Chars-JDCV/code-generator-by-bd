$('#tb_delete_goods_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_delete_update: {
                        required: true, 
                        
                    },id_good_update: {
                        required: true, 
                        
                    },date_of_deletion_update: {
                        required: true, 
                        
                    },id_sub_dept_update: {
                        required: true, 
                        
                    },value_deleted_good_update: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_delete_update: {
                        required: true, 
                        
                    },id_good_update: {
                        required: true, 
                        
                    },date_of_deletion_update: {
                        required: true, 
                        
                    },id_sub_dept_update: {
                        required: true, 
                        
                    },value_deleted_good_update: {
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
                    );$('#tb_delete_goods_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_good_create: {
                        required: true, 
                        
                    },date_of_deletion_create: {
                        required: true, 
                        
                    },id_sub_dept_create: {
                        required: true, 
                        
                    },value_deleted_good_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_good_create: {
                        required: true, 
                        
                    },date_of_deletion_create: {
                        required: true, 
                        
                    },id_sub_dept_create: {
                        required: true, 
                        
                    },value_deleted_good_create: {
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