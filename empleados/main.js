$(document).ready(function () {
                        $('#tb_empleados_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_empleado_update: {
                             required:true
                    },identificador_update: {
                             required:true
                    },nombre_update: {
                             required:true
                    },direccion_update: {
                             required:true
                    },id_ciudad_update: {
                             required:true
                    },id_empresa_update: {
                             required:true
                    },user_update: {
                             required:true
                    },password_update: {
                             required:true
                    },passw_update: {
                             required:true
                    },id_privilegio_update: {
                             required:true
                    },foto_update: {
                             required:true
                    },activo_update: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_empleado_update: {
                        required:'Ingrese Id_empleado_update',
                    },identificador_update: {
                        required:'Ingrese Identificador_update',
                    },nombre_update: {
                        required:'Ingrese Nombre_update',
                    },direccion_update: {
                        required:'Ingrese Direccion_update',
                    },id_ciudad_update: {
                        required:'Ingrese Id_ciudad_update',
                    },id_empresa_update: {
                        required:'Ingrese Id_empresa_update',
                    },user_update: {
                        required:'Ingrese User_update',
                    },password_update: {
                        required:'Ingrese Password_update',
                    },passw_update: {
                        required:'Ingrese Passw_update',
                    },id_privilegio_update: {
                        required:'Ingrese Id_privilegio_update',
                    },foto_update: {
                        required:'Ingrese Foto_update',
                    },activo_update: {
                        required:'Ingrese Activo_update',
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
                    );$('#tb_empleados_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                identificador_create: {
                             required:true
                    },nombre_create: {
                             required:true
                    },direccion_create: {
                             required:true
                    },id_ciudad_create: {
                             required:true
                    },id_empresa_create: {
                             required:true
                    },user_create: {
                             required:true
                    },password_create: {
                             required:true
                    },passw_create: {
                             required:true
                    },id_privilegio_create: {
                             required:true
                    },foto_create: {
                             required:true
                    },activo_create: {
                             required:true
                    },
                            },
                            messages:
                            {
                                identificador_create: {
                        required:'Ingrese Identificador_create',
                    },nombre_create: {
                        required:'Ingrese Nombre_create',
                    },direccion_create: {
                        required:'Ingrese Direccion_create',
                    },id_ciudad_create: {
                        required:'Ingrese Id_ciudad_create',
                    },id_empresa_create: {
                        required:'Ingrese Id_empresa_create',
                    },user_create: {
                        required:'Ingrese User_create',
                    },password_create: {
                        required:'Ingrese Password_create',
                    },passw_create: {
                        required:'Ingrese Passw_create',
                    },id_privilegio_create: {
                        required:'Ingrese Id_privilegio_create',
                    },foto_create: {
                        required:'Ingrese Foto_create',
                    },activo_create: {
                        required:'Ingrese Activo_create',
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
                    );$('#tb_empleados_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_empleado_delete: {
                             required:true
                    },identificador_delete: {
                             required:true
                    },nombre_delete: {
                             required:true
                    },direccion_delete: {
                             required:true
                    },id_ciudad_delete: {
                             required:true
                    },id_empresa_delete: {
                             required:true
                    },user_delete: {
                             required:true
                    },password_delete: {
                             required:true
                    },passw_delete: {
                             required:true
                    },id_privilegio_delete: {
                             required:true
                    },foto_delete: {
                             required:true
                    },activo_delete: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_empleado_delete: {
                        required:'Ingrese Id_empleado_delete',
                    },identificador_delete: {
                        required:'Ingrese Identificador_delete',
                    },nombre_delete: {
                        required:'Ingrese Nombre_delete',
                    },direccion_delete: {
                        required:'Ingrese Direccion_delete',
                    },id_ciudad_delete: {
                        required:'Ingrese Id_ciudad_delete',
                    },id_empresa_delete: {
                        required:'Ingrese Id_empresa_delete',
                    },user_delete: {
                        required:'Ingrese User_delete',
                    },password_delete: {
                        required:'Ingrese Password_delete',
                    },passw_delete: {
                        required:'Ingrese Passw_delete',
                    },id_privilegio_delete: {
                        required:'Ingrese Id_privilegio_delete',
                    },foto_delete: {
                        required:'Ingrese Foto_delete',
                    },activo_delete: {
                        required:'Ingrese Activo_delete',
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
                $('#tb_empleados_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_empleados_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_empleados_delete').validate();
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
            FullSelect('#id_ciudad_update', 'tb_ciudades');FullSelect('#id_ciudad_create', 'tb_ciudades');FullSelect('#id_ciudad_delete', 'tb_ciudades');FullSelect('#id_empresa_update', 'tb_empresas');FullSelect('#id_empresa_create', 'tb_empresas');FullSelect('#id_empresa_delete', 'tb_empresas');FullSelect('#id_privilegio_update', 'tb_privilegios');FullSelect('#id_privilegio_create', 'tb_privilegios');FullSelect('#id_privilegio_delete', 'tb_privilegios');
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
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11]
                                }
                            }, {
                                extend: 'pdf',
                                orientation: 'landscape',
                                pageSize: 'LEGAL',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11]
                                }
                            },
                            {
                                text: 'Excel',
                                extend: 'excel',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11]
                                }
                            },
                            {
                                text: 'Imprimir',
                                extend: 'print',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11]
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
                        id_empleado: id
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
                    $('#id_empleado_update').val(d[0]['id_empleado']);$('#identificador_update').val(d[0]['identificador']);$('#nombre_update').val(d[0]['nombre']);$('#direccion_update').val(d[0]['direccion']);$('#id_ciudad_update').val(d[0]['id_ciudad']);$('#id_empresa_update').val(d[0]['id_empresa']);$('#user_update').val(d[0]['user']);$('#password_update').val(d[0]['password']);$('#passw_update').val(d[0]['passw']);$('#id_privilegio_update').val(d[0]['id_privilegio']);$('#foto_update').val(d[0]['foto']);$('#activo_update').val(d[0]['activo']);
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
                        id_empleado: $('#id_empleado_update').val(),identificador: $('#identificador_update').val(),nombre: $('#nombre_update').val(),direccion: $('#direccion_update').val(),id_ciudad: $('#id_ciudad_update').val(),id_empresa: $('#id_empresa_update').val(),user: $('#user_update').val(),password: $('#password_update').val(),passw: $('#passw_update').val(),id_privilegio: $('#id_privilegio_update').val(),foto: $('#foto_update').val(),activo: $('#activo_update').val()
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
                        identificador: $('#identificador_create').val(),nombre: $('#nombre_create').val(),direccion: $('#direccion_create').val(),id_ciudad: $('#id_ciudad_create').val(),id_empresa: $('#id_empresa_create').val(),user: $('#user_create').val(),password: $('#password_create').val(),passw: $('#passw_create').val(),id_privilegio: $('#id_privilegio_create').val(),foto: $('#foto_create').val(),activo: $('#activo_create').val()
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
                        id_empleado: id
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
                    $('#id_empleado_delete').val(d[0]['id_empleado']);$('#identificador_delete').val(d[0]['identificador']);$('#nombre_delete').val(d[0]['nombre']);$('#direccion_delete').val(d[0]['direccion']);$('#id_ciudad_delete').val(d[0]['id_ciudad']);$('#id_empresa_delete').val(d[0]['id_empresa']);$('#user_delete').val(d[0]['user']);$('#password_delete').val(d[0]['password']);$('#passw_delete').val(d[0]['passw']);$('#id_privilegio_delete').val(d[0]['id_privilegio']);$('#foto_delete').val(d[0]['foto']);$('#activo_delete').val(d[0]['activo']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_empleado'];

                }function _delete(id) {
                    var datos = {
                        id_empleado: id
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