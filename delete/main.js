$(document).ready(function () {
                        $('#tb_delete_goods_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_delete_update: {
                             required:true
                    },id_good_update: {
                             required:true
                    },date_of_deletion_update: {
                             required:true
                    },id_sub_dept_update: {
                             required:true
                    },value_deleted_good_update: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_delete_update: {
                        required:'Ingrese Id_delete_update',
                    },id_good_update: {
                        required:'Ingrese Id_good_update',
                    },date_of_deletion_update: {
                        required:'Seleccione Date_of_deletion_update',
                    },id_sub_dept_update: {
                        required:'Ingrese Id_sub_dept_update',
                    },value_deleted_good_update: {
                        required:'Ingrese Value_deleted_good_update',
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
                    );$('#tb_delete_goods_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_good_create: {
                             required:true
                    },date_of_deletion_create: {
                             required:true
                    },id_sub_dept_create: {
                             required:true
                    },value_deleted_good_create: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_good_create: {
                        required:'Ingrese Id_good_create',
                    },date_of_deletion_create: {
                        required:'Seleccione Date_of_deletion_create',
                    },id_sub_dept_create: {
                        required:'Ingrese Id_sub_dept_create',
                    },value_deleted_good_create: {
                        required:'Ingrese Value_deleted_good_create',
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
                    );$('#tb_delete_goods_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_delete_delete: {
                             required:true
                    },id_good_delete: {
                             required:true
                    },date_of_deletion_delete: {
                             required:true
                    },id_sub_dept_delete: {
                             required:true
                    },value_deleted_good_delete: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_delete_delete: {
                        required:'Ingrese Id_delete_delete',
                    },id_good_delete: {
                        required:'Ingrese Id_good_delete',
                    },date_of_deletion_delete: {
                        required:'Seleccione Date_of_deletion_delete',
                    },id_sub_dept_delete: {
                        required:'Ingrese Id_sub_dept_delete',
                    },value_deleted_good_delete: {
                        required:'Ingrese Value_deleted_good_delete',
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
                $('#tb_delete_goods_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_delete_goods_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_delete_goods_delete').validate();
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
            FullSelect('#id_good_update', 'tb_goods');FullSelect('#id_good_create', 'tb_goods');FullSelect('#id_good_delete', 'tb_goods');FullSelect('#id_sub_dept_update', 'tb_sub_departaments');FullSelect('#id_sub_dept_create', 'tb_sub_departaments');FullSelect('#id_sub_dept_delete', 'tb_sub_departaments');
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
                        id_delete: id
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
                    $('#id_delete_update').val(d[0]['id_delete']);$('#id_good_update').val(d[0]['id_good']);$('#date_of_deletion_update').val(d[0]['date_of_deletion']);$('#id_sub_dept_update').val(d[0]['id_sub_dept']);$('#value_deleted_good_update').val(d[0]['value_deleted_good']);
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
                        id_delete: $('#id_delete_update').val(),id_good: $('#id_good_update').val(),date_of_deletion: $('#date_of_deletion_update').val(),id_sub_dept: $('#id_sub_dept_update').val(),value_deleted_good: $('#value_deleted_good_update').val()
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
                        id_good: $('#id_good_create').val(),date_of_deletion: $('#date_of_deletion_create').val(),id_sub_dept: $('#id_sub_dept_create').val(),value_deleted_good: $('#value_deleted_good_create').val()
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
                        id_delete: id
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
                    $('#id_delete_delete').val(d[0]['id_delete']);$('#id_good_delete').val(d[0]['id_good']);$('#date_of_deletion_delete').val(d[0]['date_of_deletion']);$('#id_sub_dept_delete').val(d[0]['id_sub_dept']);$('#value_deleted_good_delete').val(d[0]['value_deleted_good']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_delete'];

                }function _delete(id) {
                    var datos = {
                        id_delete: id
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