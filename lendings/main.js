$('#tb_lendings_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_lending_update: {
                        required: true, 
                        
                    },date_lent_update: {
                        required: true, 
                        
                    },date_returned_update: {
                        required: true, 
                        
                    },id_person_update: {
                        required: true, 
                        
                    },id_good_update: {
                        required: true, 
                        
                    },quantity_update: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_lending_update: {
                        required: true, 
                        
                    },date_lent_update: {
                        required: true, 
                        
                    },date_returned_update: {
                        required: true, 
                        
                    },id_person_update: {
                        required: true, 
                        
                    },id_good_update: {
                        required: true, 
                        
                    },quantity_update: {
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
                    );$('#tb_lendings_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                date_lent_create: {
                        required: true, 
                        
                    },date_returned_create: {
                        required: true, 
                        
                    },id_person_create: {
                        required: true, 
                        
                    },id_good_create: {
                        required: true, 
                        
                    },quantity_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                date_lent_create: {
                        required: true, 
                        
                    },date_returned_create: {
                        required: true, 
                        
                    },id_person_create: {
                        required: true, 
                        
                    },id_good_create: {
                        required: true, 
                        
                    },quantity_create: {
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