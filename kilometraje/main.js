$(document).ready(function () {
                        $('#tb_kilometraje_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_kilometraje_update: {
                             required:true
                    },id_empleado_update: {
                             required:true
                    },id_vehiculo_update: {
                             required:true
                    },kilometrajei_update: {
                             required:true
                    },kilometrajef_update: {
                             required:true
                    },fechaki_update: {
                             required:true
                    },fechakf_update: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_kilometraje_update: {
                        required:'Ingrese Id_kilometraje_update',
                    },id_empleado_update: {
                        required:'Ingrese Id_empleado_update',
                    },id_vehiculo_update: {
                        required:'Ingrese Id_vehiculo_update',
                    },kilometrajei_update: {
                        required:'Ingrese Kilometrajei_update',
                    },kilometrajef_update: {
                        required:'Ingrese Kilometrajef_update',
                    },fechaki_update: {
                        required:'Seleccione Fechaki_update',
                    },fechakf_update: {
                        required:'Seleccione Fechakf_update',
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
                    );$('#tb_kilometraje_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_empleado_create: {
                             required:true
                    },id_vehiculo_create: {
                             required:true
                    },kilometrajei_create: {
                             required:true
                    },kilometrajef_create: {
                             required:true
                    },fechaki_create: {
                             required:true
                    },fechakf_create: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_empleado_create: {
                        required:'Ingrese Id_empleado_create',
                    },id_vehiculo_create: {
                        required:'Ingrese Id_vehiculo_create',
                    },kilometrajei_create: {
                        required:'Ingrese Kilometrajei_create',
                    },kilometrajef_create: {
                        required:'Ingrese Kilometrajef_create',
                    },fechaki_create: {
                        required:'Seleccione Fechaki_create',
                    },fechakf_create: {
                        required:'Seleccione Fechakf_create',
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
                    );$('#tb_kilometraje_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_kilometraje_delete: {
                             required:true
                    },id_empleado_delete: {
                             required:true
                    },id_vehiculo_delete: {
                             required:true
                    },kilometrajei_delete: {
                             required:true
                    },kilometrajef_delete: {
                             required:true
                    },fechaki_delete: {
                             required:true
                    },fechakf_delete: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_kilometraje_delete: {
                        required:'Ingrese Id_kilometraje_delete',
                    },id_empleado_delete: {
                        required:'Ingrese Id_empleado_delete',
                    },id_vehiculo_delete: {
                        required:'Ingrese Id_vehiculo_delete',
                    },kilometrajei_delete: {
                        required:'Ingrese Kilometrajei_delete',
                    },kilometrajef_delete: {
                        required:'Ingrese Kilometrajef_delete',
                    },fechaki_delete: {
                        required:'Seleccione Fechaki_delete',
                    },fechakf_delete: {
                        required:'Seleccione Fechakf_delete',
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
                $('#tb_kilometraje_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_kilometraje_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_kilometraje_delete').validate();
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
            FullSelect('#id_empleado_update', 'tb_empleados');FullSelect('#id_empleado_create', 'tb_empleados');FullSelect('#id_empleado_delete', 'tb_empleados');FullSelect('#id_vehiculo_update', 'tb_vehiculos');FullSelect('#id_vehiculo_create', 'tb_vehiculos');FullSelect('#id_vehiculo_delete', 'tb_vehiculos');
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
                                    columns: [0,1,2,3,4,5,6]
                                }
                            }, {
                                extend: 'pdf',
                                orientation: 'landscape',
                                pageSize: 'LEGAL',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6]
                                }
                            },
                            {
                                text: 'Excel',
                                extend: 'excel',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6]
                                }
                            },
                            {
                                text: 'Imprimir',
                                extend: 'print',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6]
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
                        id_kilometraje: id
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
                    $('#id_kilometraje_update').val(d[0]['id_kilometraje']);$('#id_empleado_update').val(d[0]['id_empleado']);$('#id_vehiculo_update').val(d[0]['id_vehiculo']);$('#kilometrajei_update').val(d[0]['kilometrajei']);$('#kilometrajef_update').val(d[0]['kilometrajef']);$('#fechaki_update').val(d[0]['fechaki']);$('#fechakf_update').val(d[0]['fechakf']);
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
                        id_kilometraje: $('#id_kilometraje_update').val(),id_empleado: $('#id_empleado_update').val(),id_vehiculo: $('#id_vehiculo_update').val(),kilometrajei: $('#kilometrajei_update').val(),kilometrajef: $('#kilometrajef_update').val(),fechaki: $('#fechaki_update').val(),fechakf: $('#fechakf_update').val()
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
                        id_empleado: $('#id_empleado_create').val(),id_vehiculo: $('#id_vehiculo_create').val(),kilometrajei: $('#kilometrajei_create').val(),kilometrajef: $('#kilometrajef_create').val(),fechaki: $('#fechaki_create').val(),fechakf: $('#fechakf_create').val()
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
                        id_kilometraje: id
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
                    $('#id_kilometraje_delete').val(d[0]['id_kilometraje']);$('#id_empleado_delete').val(d[0]['id_empleado']);$('#id_vehiculo_delete').val(d[0]['id_vehiculo']);$('#kilometrajei_delete').val(d[0]['kilometrajei']);$('#kilometrajef_delete').val(d[0]['kilometrajef']);$('#fechaki_delete').val(d[0]['fechaki']);$('#fechakf_delete').val(d[0]['fechakf']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_kilometraje'];

                }function _delete(id) {
                    var datos = {
                        id_kilometraje: id
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