$(document).ready(function () {
                        $('#tb_instalaciones_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_instalacion_update: {
                             required:true
                    },nocontrato_update: {
                             required:true
                    },noorden_update: {
                             required:true
                    },noordenrec_update: {
                             required:true
                    },id_actividad_update: {
                             required:true
                    },fotofolio_update: {
                             required:true
                    },id_empleado_update: {
                             required:true
                    },fecharegistro_update: {
                             required:true
                    },pagoanttec_update: {
                             required:true
                    },id_ciudad_update: {
                             required:true
                    },id_empresa_update: {
                             required:true
                    },fechaasignacion_update: {
                             required:true
                    },id_estado_update: {
                             required:true
                    },motivo_update: {
                             required:true
                    },rgu_update: {
                             required:true
                    },pagoantmon_update: {
                             required:true
                    },semana_update: {
                             required:true
                    },fotoniveles_update: {
                             required:true
                    },fotoalcance_update: {
                             required:true
                    },fotovelocidad_update: {
                             required:true
                    },fotopotencia_update: {
                             required:true
                    },monitor_update: {
                             required:true
                    },fecharecableado_update: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_instalacion_update: {
                        required:'Ingrese Id_instalacion_update',
                    },nocontrato_update: {
                        required:'Ingrese Nocontrato_update',
                    },noorden_update: {
                        required:'Ingrese Noorden_update',
                    },noordenrec_update: {
                        required:'Ingrese Noordenrec_update',
                    },id_actividad_update: {
                        required:'Ingrese Id_actividad_update',
                    },fotofolio_update: {
                        required:'Ingrese Fotofolio_update',
                    },id_empleado_update: {
                        required:'Ingrese Id_empleado_update',
                    },fecharegistro_update: {
                        required:'Seleccione Fecharegistro_update',
                    },pagoanttec_update: {
                        required:'Ingrese Pagoanttec_update',
                    },id_ciudad_update: {
                        required:'Ingrese Id_ciudad_update',
                    },id_empresa_update: {
                        required:'Ingrese Id_empresa_update',
                    },fechaasignacion_update: {
                        required:'Seleccione Fechaasignacion_update',
                    },id_estado_update: {
                        required:'Ingrese Id_estado_update',
                    },motivo_update: {
                        required:'Ingrese Motivo_update',
                    },rgu_update: {
                        required:'Ingrese Rgu_update',
                    },pagoantmon_update: {
                        required:'Ingrese Pagoantmon_update',
                    },semana_update: {
                        required:'Ingrese Semana_update',
                    },fotoniveles_update: {
                        required:'Ingrese Fotoniveles_update',
                    },fotoalcance_update: {
                        required:'Ingrese Fotoalcance_update',
                    },fotovelocidad_update: {
                        required:'Ingrese Fotovelocidad_update',
                    },fotopotencia_update: {
                        required:'Ingrese Fotopotencia_update',
                    },monitor_update: {
                        required:'Ingrese Monitor_update',
                    },fecharecableado_update: {
                        required:'Seleccione Fecharecableado_update',
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
                    );$('#tb_instalaciones_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                nocontrato_create: {
                             required:true
                    },noorden_create: {
                             required:true
                    },noordenrec_create: {
                             required:true
                    },id_actividad_create: {
                             required:true
                    },fotofolio_create: {
                             required:true
                    },id_empleado_create: {
                             required:true
                    },fecharegistro_create: {
                             required:true
                    },pagoanttec_create: {
                             required:true
                    },id_ciudad_create: {
                             required:true
                    },id_empresa_create: {
                             required:true
                    },fechaasignacion_create: {
                             required:true
                    },id_estado_create: {
                             required:true
                    },motivo_create: {
                             required:true
                    },rgu_create: {
                             required:true
                    },pagoantmon_create: {
                             required:true
                    },semana_create: {
                             required:true
                    },fotoniveles_create: {
                             required:true
                    },fotoalcance_create: {
                             required:true
                    },fotovelocidad_create: {
                             required:true
                    },fotopotencia_create: {
                             required:true
                    },monitor_create: {
                             required:true
                    },fecharecableado_create: {
                             required:true
                    },
                            },
                            messages:
                            {
                                nocontrato_create: {
                        required:'Ingrese Nocontrato_create',
                    },noorden_create: {
                        required:'Ingrese Noorden_create',
                    },noordenrec_create: {
                        required:'Ingrese Noordenrec_create',
                    },id_actividad_create: {
                        required:'Ingrese Id_actividad_create',
                    },fotofolio_create: {
                        required:'Ingrese Fotofolio_create',
                    },id_empleado_create: {
                        required:'Ingrese Id_empleado_create',
                    },fecharegistro_create: {
                        required:'Seleccione Fecharegistro_create',
                    },pagoanttec_create: {
                        required:'Ingrese Pagoanttec_create',
                    },id_ciudad_create: {
                        required:'Ingrese Id_ciudad_create',
                    },id_empresa_create: {
                        required:'Ingrese Id_empresa_create',
                    },fechaasignacion_create: {
                        required:'Seleccione Fechaasignacion_create',
                    },id_estado_create: {
                        required:'Ingrese Id_estado_create',
                    },motivo_create: {
                        required:'Ingrese Motivo_create',
                    },rgu_create: {
                        required:'Ingrese Rgu_create',
                    },pagoantmon_create: {
                        required:'Ingrese Pagoantmon_create',
                    },semana_create: {
                        required:'Ingrese Semana_create',
                    },fotoniveles_create: {
                        required:'Ingrese Fotoniveles_create',
                    },fotoalcance_create: {
                        required:'Ingrese Fotoalcance_create',
                    },fotovelocidad_create: {
                        required:'Ingrese Fotovelocidad_create',
                    },fotopotencia_create: {
                        required:'Ingrese Fotopotencia_create',
                    },monitor_create: {
                        required:'Ingrese Monitor_create',
                    },fecharecableado_create: {
                        required:'Seleccione Fecharecableado_create',
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
                    );$('#tb_instalaciones_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_instalacion_delete: {
                             required:true
                    },nocontrato_delete: {
                             required:true
                    },noorden_delete: {
                             required:true
                    },noordenrec_delete: {
                             required:true
                    },id_actividad_delete: {
                             required:true
                    },fotofolio_delete: {
                             required:true
                    },id_empleado_delete: {
                             required:true
                    },fecharegistro_delete: {
                             required:true
                    },pagoanttec_delete: {
                             required:true
                    },id_ciudad_delete: {
                             required:true
                    },id_empresa_delete: {
                             required:true
                    },fechaasignacion_delete: {
                             required:true
                    },id_estado_delete: {
                             required:true
                    },motivo_delete: {
                             required:true
                    },rgu_delete: {
                             required:true
                    },pagoantmon_delete: {
                             required:true
                    },semana_delete: {
                             required:true
                    },fotoniveles_delete: {
                             required:true
                    },fotoalcance_delete: {
                             required:true
                    },fotovelocidad_delete: {
                             required:true
                    },fotopotencia_delete: {
                             required:true
                    },monitor_delete: {
                             required:true
                    },fecharecableado_delete: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_instalacion_delete: {
                        required:'Ingrese Id_instalacion_delete',
                    },nocontrato_delete: {
                        required:'Ingrese Nocontrato_delete',
                    },noorden_delete: {
                        required:'Ingrese Noorden_delete',
                    },noordenrec_delete: {
                        required:'Ingrese Noordenrec_delete',
                    },id_actividad_delete: {
                        required:'Ingrese Id_actividad_delete',
                    },fotofolio_delete: {
                        required:'Ingrese Fotofolio_delete',
                    },id_empleado_delete: {
                        required:'Ingrese Id_empleado_delete',
                    },fecharegistro_delete: {
                        required:'Seleccione Fecharegistro_delete',
                    },pagoanttec_delete: {
                        required:'Ingrese Pagoanttec_delete',
                    },id_ciudad_delete: {
                        required:'Ingrese Id_ciudad_delete',
                    },id_empresa_delete: {
                        required:'Ingrese Id_empresa_delete',
                    },fechaasignacion_delete: {
                        required:'Seleccione Fechaasignacion_delete',
                    },id_estado_delete: {
                        required:'Ingrese Id_estado_delete',
                    },motivo_delete: {
                        required:'Ingrese Motivo_delete',
                    },rgu_delete: {
                        required:'Ingrese Rgu_delete',
                    },pagoantmon_delete: {
                        required:'Ingrese Pagoantmon_delete',
                    },semana_delete: {
                        required:'Ingrese Semana_delete',
                    },fotoniveles_delete: {
                        required:'Ingrese Fotoniveles_delete',
                    },fotoalcance_delete: {
                        required:'Ingrese Fotoalcance_delete',
                    },fotovelocidad_delete: {
                        required:'Ingrese Fotovelocidad_delete',
                    },fotopotencia_delete: {
                        required:'Ingrese Fotopotencia_delete',
                    },monitor_delete: {
                        required:'Ingrese Monitor_delete',
                    },fecharecableado_delete: {
                        required:'Seleccione Fecharecableado_delete',
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
                $('#tb_instalaciones_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_instalaciones_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_instalaciones_delete').validate();
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
            FullSelect('#id_actividad_update', 'tb_actividad');FullSelect('#id_actividad_create', 'tb_actividad');FullSelect('#id_actividad_delete', 'tb_actividad');FullSelect('#id_empleado_update', 'tb_empleados');FullSelect('#id_empleado_create', 'tb_empleados');FullSelect('#id_empleado_delete', 'tb_empleados');FullSelect('#id_ciudad_update', 'tb_ciudades');FullSelect('#id_ciudad_create', 'tb_ciudades');FullSelect('#id_ciudad_delete', 'tb_ciudades');FullSelect('#id_empresa_update', 'tb_empresas');FullSelect('#id_empresa_create', 'tb_empresas');FullSelect('#id_empresa_delete', 'tb_empresas');FullSelect('#id_estado_update', 'tb_estados');FullSelect('#id_estado_create', 'tb_estados');FullSelect('#id_estado_delete', 'tb_estados');
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
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22]
                                }
                            }, {
                                extend: 'pdf',
                                orientation: 'landscape',
                                pageSize: 'LEGAL',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22]
                                }
                            },
                            {
                                text: 'Excel',
                                extend: 'excel',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22]
                                }
                            },
                            {
                                text: 'Imprimir',
                                extend: 'print',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22]
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
                        id_instalacion: id
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
                    $('#id_instalacion_update').val(d[0]['id_instalacion']);$('#nocontrato_update').val(d[0]['nocontrato']);$('#noorden_update').val(d[0]['noorden']);$('#noordenrec_update').val(d[0]['noordenrec']);$('#id_actividad_update').val(d[0]['id_actividad']);$('#fotofolio_update').val(d[0]['fotofolio']);$('#id_empleado_update').val(d[0]['id_empleado']);$('#fecharegistro_update').val(d[0]['fecharegistro']);$('#pagoanttec_update').val(d[0]['pagoanttec']);$('#id_ciudad_update').val(d[0]['id_ciudad']);$('#id_empresa_update').val(d[0]['id_empresa']);$('#fechaasignacion_update').val(d[0]['fechaasignacion']);$('#id_estado_update').val(d[0]['id_estado']);$('#motivo_update').val(d[0]['motivo']);$('#rgu_update').val(d[0]['rgu']);$('#pagoantmon_update').val(d[0]['pagoantmon']);$('#semana_update').val(d[0]['semana']);$('#fotoniveles_update').val(d[0]['fotoniveles']);$('#fotoalcance_update').val(d[0]['fotoalcance']);$('#fotovelocidad_update').val(d[0]['fotovelocidad']);$('#fotopotencia_update').val(d[0]['fotopotencia']);$('#monitor_update').val(d[0]['monitor']);$('#fecharecableado_update').val(d[0]['fecharecableado']);
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
                        id_instalacion: $('#id_instalacion_update').val(),nocontrato: $('#nocontrato_update').val(),noorden: $('#noorden_update').val(),noordenrec: $('#noordenrec_update').val(),id_actividad: $('#id_actividad_update').val(),fotofolio: $('#fotofolio_update').val(),id_empleado: $('#id_empleado_update').val(),fecharegistro: $('#fecharegistro_update').val(),pagoanttec: $('#pagoanttec_update').val(),id_ciudad: $('#id_ciudad_update').val(),id_empresa: $('#id_empresa_update').val(),fechaasignacion: $('#fechaasignacion_update').val(),id_estado: $('#id_estado_update').val(),motivo: $('#motivo_update').val(),rgu: $('#rgu_update').val(),pagoantmon: $('#pagoantmon_update').val(),semana: $('#semana_update').val(),fotoniveles: $('#fotoniveles_update').val(),fotoalcance: $('#fotoalcance_update').val(),fotovelocidad: $('#fotovelocidad_update').val(),fotopotencia: $('#fotopotencia_update').val(),monitor: $('#monitor_update').val(),fecharecableado: $('#fecharecableado_update').val()
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
                        nocontrato: $('#nocontrato_create').val(),noorden: $('#noorden_create').val(),noordenrec: $('#noordenrec_create').val(),id_actividad: $('#id_actividad_create').val(),fotofolio: $('#fotofolio_create').val(),id_empleado: $('#id_empleado_create').val(),fecharegistro: $('#fecharegistro_create').val(),pagoanttec: $('#pagoanttec_create').val(),id_ciudad: $('#id_ciudad_create').val(),id_empresa: $('#id_empresa_create').val(),fechaasignacion: $('#fechaasignacion_create').val(),id_estado: $('#id_estado_create').val(),motivo: $('#motivo_create').val(),rgu: $('#rgu_create').val(),pagoantmon: $('#pagoantmon_create').val(),semana: $('#semana_create').val(),fotoniveles: $('#fotoniveles_create').val(),fotoalcance: $('#fotoalcance_create').val(),fotovelocidad: $('#fotovelocidad_create').val(),fotopotencia: $('#fotopotencia_create').val(),monitor: $('#monitor_create').val(),fecharecableado: $('#fecharecableado_create').val()
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
                        id_instalacion: id
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
                    $('#id_instalacion_delete').val(d[0]['id_instalacion']);$('#nocontrato_delete').val(d[0]['nocontrato']);$('#noorden_delete').val(d[0]['noorden']);$('#noordenrec_delete').val(d[0]['noordenrec']);$('#id_actividad_delete').val(d[0]['id_actividad']);$('#fotofolio_delete').val(d[0]['fotofolio']);$('#id_empleado_delete').val(d[0]['id_empleado']);$('#fecharegistro_delete').val(d[0]['fecharegistro']);$('#pagoanttec_delete').val(d[0]['pagoanttec']);$('#id_ciudad_delete').val(d[0]['id_ciudad']);$('#id_empresa_delete').val(d[0]['id_empresa']);$('#fechaasignacion_delete').val(d[0]['fechaasignacion']);$('#id_estado_delete').val(d[0]['id_estado']);$('#motivo_delete').val(d[0]['motivo']);$('#rgu_delete').val(d[0]['rgu']);$('#pagoantmon_delete').val(d[0]['pagoantmon']);$('#semana_delete').val(d[0]['semana']);$('#fotoniveles_delete').val(d[0]['fotoniveles']);$('#fotoalcance_delete').val(d[0]['fotoalcance']);$('#fotovelocidad_delete').val(d[0]['fotovelocidad']);$('#fotopotencia_delete').val(d[0]['fotopotencia']);$('#monitor_delete').val(d[0]['monitor']);$('#fecharecableado_delete').val(d[0]['fecharecableado']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_instalacion'];

                }function _delete(id) {
                    var datos = {
                        id_instalacion: id
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