$(document).ready(function () {
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
                                _update();
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
                                id_person_create: {
                        required: true, 
                        
                    },person_name_create: {
                        required: true, 
                        
                    },card_id_create: {
                        required: true, 
                        
                    },is_lent_to_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_person_create: {
                        required: true, 
                        
                    },person_name_create: {
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
                                _create();
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
                    );$('#tb_people_lendings_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_person_delete: {
                        required: true, 
                        
                    },person_name_delete: {
                        required: true, 
                        
                    },card_id_delete: {
                        required: true, 
                        
                    },is_lent_to_delete: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_person_delete: {
                        required: true, 
                        
                    },person_name_delete: {
                        required: true, 
                        
                    },card_id_delete: {
                        required: true, 
                        
                    },is_lent_to_delete: {
                        required: true, 
                        
                    },
                            },
                            honkeyup: false,
                            submitHandler: function () {
                                $('div.error').hide();
                                _delete(idDel)();
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
                        $('#btnModalCreate').click(function() {
                            $('#modal_create').modal();
                        });
                        $('#btn_update').click(function () {
                $('#tb_people_lendings_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_people_lendings_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_people_lendings_delete').validate();
            });
                        
                        alertas('Bienvenido', 'info');
                        get();
                        getSelect();
                        getCatalogo();
                    });function getCatalogo() {
                                var URLactual = window.location.href;
                                var catalog = URLactual.split('/')
                                document.getElementById('Catalogo').innerHTML='Catálogo de '+ catalog[catalog.length -2];
                            }function getSelect() {
            
        }function get() {
                        $.post('main.php', { action: 'get' }, function (e) {
                            if (e.error || !e.data) {
                                alert(e.r);
                            }
                            else {
                                setDataTable(e.r.c, e.r.d);
                            }
                        });
                    }function FullSelect(nameselect, tabla) {
                                var column = []
                                $.post('main.php', { action: 'getselect', dt: tabla }, function (e) {
                                    if (e.error || !e.data) {
                                        alert(e.r);
                                    }
                                    else {
                                        console.log(e)
                                        column.push(e.r.c[0]['data'])
                                        column.push(e.r.c[0]['title'])
                                        setSelect(e.r.d, nameselect, column);
                                    }
                                });
                            }
                            function setSelect(array, nameselect, column) {
            array.forEach(element => {
                var o = new Option(element[column[1]], element[column[0]]);
                $(nameselect).append(o);
            });
        }function setDataTable(c, d) {
                    var options = {
                        dom: 'Bfrtip',
                        buttons: [{
                            extend: 'collection',
                            text: 'Control',
                            orientation: 'landscape',
                            buttons: [{
                                text: 'Copiar',
                                extend: 'copy',
                                exportOptions: {
                                    columns: [0,1,2,3]
                                }
                            }, {
                                extend: 'pdf',
                                orientation: 'landscape',
                                pageSize: 'LEGAL',
                                exportOptions: {
                                    columns: [0,1,2,3]
                                }
                            },
                            {
                                text: 'Excel',
                                extend: 'excel',
                                exportOptions: {
                                    columns: [0,1,2,3]
                                }
                            },
                            {
                                text: 'Imprimir',
                                extend: 'print',
                                exportOptions: {
                                    columns: [0,1,2,3]
                                }
                            }
                            ]
                        },
                        {
                            extend: 'colvis',
                            text: 'Visor de columnas',
                            collectionLayout: 'fixed three-column'
                        }
                        ],
                        autoWidth: true,
                        columns: c,
                        data: d,
                        destroy: true,
                        language: {
                            sProcessing: 'Procesando...',
                            sLengthMenu: 'Mostrar _MENU_ registros',
                            sZeroRecords: 'No se encontraron resultados',
                            sEmptyTable: 'Ningún dato disponible en esta tabla',
                            sInfo: 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
                            sInfoEmpty: 'Mostrando registros del 0 al 0 de un total de 0 registros',
                            sInfoFiltered: '(filtrado de un total de _MAX_ registros)',
                            sInfoPostFix: '',
                            sSearch: 'Buscar:',
                            sUrl: '',
                            sInfoThousands: ',',
                            sLoadingRecords: 'Cargando...',
                            oPaginate: {
                                sFirst: 'Primero',
                                sLast: 'Último',
                                sNext: 'Siguiente',
                                sPrevious: 'Anterior'
                            },
                            oAria: {
                                sSortAscending: ': Activar para ordenar la columna de manera ascendente',
                                sSortDescending: ': Activar para ordenar la columna de manera descendente'
                            }
                        },
                        select: true,
                        responsive:true,
                    };
                    $('#tblTabla').DataTable(options);
                }function editx(id) {
                    var datos = {
                        id_person_update: id
                    };
                    $.post('main.php', { action: 'consult', dt: datos }, function(e) {
                        if (e.error) {
                            alertas(e.r, 'danger');
                        } else {
                            setDatosModal(e.r.d);
                        }
                    });
                    return false;
                }function setDatosModal(d) {
                    $('#id_person_update').val(d[0]['id_person']);$('#person_name_update').val(d[0]['person_name']);$('#card_id_update').val(d[0]['card_id']);$('#is_lent_to_update').val(d[0]['is_lent_to']);
                    $('#modal_update').modal();
                }
                
                function seleccionarSelect(nameselect, valor) {
                    $(nameselect).find('option').each(function(index, element) {
                        if (element.value == valor) {
                            $(nameselect).val(element.value);
                        }
                    });
                }function _update() {
                    var datos = {
                        id_person: $('#id_person_update').val(),person_name: $('#person_name_update').val(),card_id: $('#card_id_update').val(),is_lent_to: $('#is_lent_to_update').val()
                    };
                    $.post('main.php', { action: 'update', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha editado Correctamente', 'success');
                            get();
                        }
                    });
                    $('#tb_people_lendings _update')[0].reset();
                    return false;
                }function _create() {
                    var datos = {
                        person_name: $('#person_name_create').val(),card_id: $('#card_id_create').val(),is_lent_to: $('#is_lent_to_create').val()
                    };
                    $.post('main.php', { action: 'set', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha registrado Correctamente', 'success');
                            get();
                        }
                    });
                    $('#tb_people_lendings _create')[0].reset();
                    return false;
                }function deletex(id) {
                    var datos = {
                        id_person: id
                    };
                    $.post('main.php', { action: 'consult', dt: datos }, function(e) {
                        if (e.error) {
                            alertas(e.r, 'danger');
                        } else {
                            setMensajeModal(e.r.d);
                        }
                    });
                    return false;
                }
                var idDel = 0;function setMensajeModal(d) {
                    $('#id_person_delete').val(d[0]['id_person']);$('#person_name_delete').val(d[0]['person_name']);$('#card_id_delete').val(d[0]['card_id']);$('#is_lent_to_delete').val(d[0]['is_lent_to']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_person'];
                
                }function deletex(id) {
                    var datos = {
                        id_person: id
                    };
                    $.post('main.php', { action: 'del', dt: datos }, function(e) {
                        if (e.error) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Registro Eliminado Correctamente', 'success');
                            get();
                        }
                        $('#modal_delete').modal('hide');
                    });
                    $('#tb_people_lendings_delete')[0].reset();
                    return false;
                }function cancelar(form) {
                    $('#' + form)[0].reset();
                    var validator = $('#' + form).validate();
                    validator.resetForm();
                    return false;   
                }function alertas(mensaje, tipo) {
                    $.notify({
                        // options
                        message: mensaje
                    }, {
                        // settings
                        type: tipo,
                        delay: 1500
                    });
                }