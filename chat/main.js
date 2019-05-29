$(document).ready(function () {
                        $('#tb_chat_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_update: {
                             required:true
                    },sender_update: {
                             required:true
                    },addressee_update: {
                             required:true
                    },msg_update: {
                             required:true
                    },date_update: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_update: {
                        required:'Ingrese Id_update',
                    },sender_update: {
                        required:'Ingrese Sender_update',
                    },addressee_update: {
                        required:'Ingrese Addressee_update',
                    },msg_update: {
                        required:'Ingrese Msg_update',
                    },date_update: {
                        required:'Seleccione Date_update',
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
                    );$('#tb_chat_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                sender_create: {
                             required:true
                    },addressee_create: {
                             required:true
                    },msg_create: {
                             required:true
                    },date_create: {
                             required:true
                    },
                            },
                            messages:
                            {
                                sender_create: {
                        required:'Ingrese Sender_create',
                    },addressee_create: {
                        required:'Ingrese Addressee_create',
                    },msg_create: {
                        required:'Ingrese Msg_create',
                    },date_create: {
                        required:'Seleccione Date_create',
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
                    );$('#tb_chat_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_delete: {
                             required:true
                    },sender_delete: {
                             required:true
                    },addressee_delete: {
                             required:true
                    },msg_delete: {
                             required:true
                    },date_delete: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_delete: {
                        required:'Ingrese Id_delete',
                    },sender_delete: {
                        required:'Ingrese Sender_delete',
                    },addressee_delete: {
                        required:'Ingrese Addressee_delete',
                    },msg_delete: {
                        required:'Ingrese Msg_delete',
                    },date_delete: {
                        required:'Seleccione Date_delete',
                    },
                            },
                            honkeyup: false,
                            submitHandler: function () {
                                $('div.error').hide();
                                _delete(idDel);
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
                $('#tb_chat_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_chat_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_chat_delete').validate();
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
                                    columns: [0,1,2,3,4]
                                }
                            }, {
                                extend: 'pdf',
                                orientation: 'landscape',
                                pageSize: 'LEGAL',
                                exportOptions: {
                                    columns: [0,1,2,3,4]
                                }
                            },
                            {
                                text: 'Excel',
                                extend: 'excel',
                                exportOptions: {
                                    columns: [0,1,2,3,4]
                                }
                            },
                            {
                                text: 'Imprimir',
                                extend: 'print',
                                exportOptions: {
                                    columns: [0,1,2,3,4]
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
                        id: id
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
                    $('#id_update').val(d[0]['id']);$('#sender_update').val(d[0]['sender']);$('#addressee_update').val(d[0]['addressee']);$('#msg_update').val(d[0]['msg']);$('#date_update').val(d[0]['date']);
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
                        id: $('#id_update').val(),sender: $('#sender_update').val(),addressee: $('#addressee_update').val(),msg: $('#msg_update').val(),date: $('#date_update').val()
                    };
                    $.post('main.php', { action: 'update', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha editado Correctamente', 'success');
                            get();
                            $('#modal_update').modal('hide');
                        }
                    });
                    
                    return false;
                }function _create() {
                    var datos = {
                        sender: $('#sender_create').val(),addressee: $('#addressee_create').val(),msg: $('#msg_create').val(),date: $('#date_create').val()
                    };
                    $.post('main.php', { action: 'set', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha registrado Correctamente', 'success');
                            get();
                            $('#modal_create').modal('hide');
                        }
                    });
                    
                    return false;
                }function deletex(id) {
                    var datos = {
                        id: id
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
                    $('#id_delete').val(d[0]['id']);$('#sender_delete').val(d[0]['sender']);$('#addressee_delete').val(d[0]['addressee']);$('#msg_delete').val(d[0]['msg']);$('#date_delete').val(d[0]['date']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id'];

                }function _delete(id) {
                    var datos = {
                        id: id
                    };
                    $.post('main.php', { action: 'del', dt: datos }, function(e) {
                        if (e.error) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Registro Eliminado Correctamente', 'success');
                            $('#modal_delete').modal('hide');
                            get();
                        }
                    });
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