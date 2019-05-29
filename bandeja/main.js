$(document).ready(function () {
                        $('#tb_bandeja_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_bandeja_update: {
                             required:true
                    },id_empleadoenvia_update: {
                             required:true
                    },id_empleadorecibe_update: {
                             required:true
                    },asunto_update: {
                             required:true
                    },cuerpo_update: {
                             required:true
                    },fecha_envio_update: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_bandeja_update: {
                        required:'Ingrese Id_bandeja_update',
                    },id_empleadoenvia_update: {
                        required:'Ingrese Id_empleadoenvia_update',
                    },id_empleadorecibe_update: {
                        required:'Ingrese Id_empleadorecibe_update',
                    },asunto_update: {
                        required:'Ingrese Asunto_update',
                    },cuerpo_update: {
                        required:'Ingrese Cuerpo_update',
                    },fecha_envio_update: {
                        required:'Seleccione Fecha_envio_update',
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
                    );$('#tb_bandeja_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_empleadoenvia_create: {
                             required:true
                    },id_empleadorecibe_create: {
                             required:true
                    },asunto_create: {
                             required:true
                    },cuerpo_create: {
                             required:true
                    },fecha_envio_create: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_empleadoenvia_create: {
                        required:'Ingrese Id_empleadoenvia_create',
                    },id_empleadorecibe_create: {
                        required:'Ingrese Id_empleadorecibe_create',
                    },asunto_create: {
                        required:'Ingrese Asunto_create',
                    },cuerpo_create: {
                        required:'Ingrese Cuerpo_create',
                    },fecha_envio_create: {
                        required:'Seleccione Fecha_envio_create',
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
                    );$('#tb_bandeja_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_bandeja_delete: {
                             required:true
                    },id_empleadoenvia_delete: {
                             required:true
                    },id_empleadorecibe_delete: {
                             required:true
                    },asunto_delete: {
                             required:true
                    },cuerpo_delete: {
                             required:true
                    },fecha_envio_delete: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_bandeja_delete: {
                        required:'Ingrese Id_bandeja_delete',
                    },id_empleadoenvia_delete: {
                        required:'Ingrese Id_empleadoenvia_delete',
                    },id_empleadorecibe_delete: {
                        required:'Ingrese Id_empleadorecibe_delete',
                    },asunto_delete: {
                        required:'Ingrese Asunto_delete',
                    },cuerpo_delete: {
                        required:'Ingrese Cuerpo_delete',
                    },fecha_envio_delete: {
                        required:'Seleccione Fecha_envio_delete',
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
                $('#tb_bandeja_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_bandeja_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_bandeja_delete').validate();
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
            FullSelect('#id_empleadoenvia_update', '');FullSelect('#id_empleadoenvia_create', '');FullSelect('#id_empleadoenvia_delete', '');FullSelect('#id_empleadorecibe_update', '');FullSelect('#id_empleadorecibe_create', '');FullSelect('#id_empleadorecibe_delete', '');
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
                                    columns: [0,1,2,3,4,5]
                                }
                            }, {
                                extend: 'pdf',
                                orientation: 'landscape',
                                pageSize: 'LEGAL',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5]
                                }
                            },
                            {
                                text: 'Excel',
                                extend: 'excel',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5]
                                }
                            },
                            {
                                text: 'Imprimir',
                                extend: 'print',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5]
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
                        id_bandeja: id
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
                    $('#id_bandeja_update').val(d[0]['id_bandeja']);$('#id_empleadoenvia_update').val(d[0]['id_empleadoenvia']);$('#id_empleadorecibe_update').val(d[0]['id_empleadorecibe']);$('#asunto_update').val(d[0]['asunto']);$('#cuerpo_update').val(d[0]['cuerpo']);$('#fecha_envio_update').val(d[0]['fecha_envio']);
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
                        id_bandeja: $('#id_bandeja_update').val(),id_empleadoenvia: $('#id_empleadoenvia_update').val(),id_empleadorecibe: $('#id_empleadorecibe_update').val(),asunto: $('#asunto_update').val(),cuerpo: $('#cuerpo_update').val(),fecha_envio: $('#fecha_envio_update').val()
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
                        id_empleadoenvia: $('#id_empleadoenvia_create').val(),id_empleadorecibe: $('#id_empleadorecibe_create').val(),asunto: $('#asunto_create').val(),cuerpo: $('#cuerpo_create').val(),fecha_envio: $('#fecha_envio_create').val()
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
                        id_bandeja: id
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
                    $('#id_bandeja_delete').val(d[0]['id_bandeja']);$('#id_empleadoenvia_delete').val(d[0]['id_empleadoenvia']);$('#id_empleadorecibe_delete').val(d[0]['id_empleadorecibe']);$('#asunto_delete').val(d[0]['asunto']);$('#cuerpo_delete').val(d[0]['cuerpo']);$('#fecha_envio_delete').val(d[0]['fecha_envio']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_bandeja'];

                }function _delete(id) {
                    var datos = {
                        id_bandeja: id
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