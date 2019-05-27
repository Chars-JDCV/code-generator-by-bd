$(document).ready(function () {
                        $('#tb_switch_good_depts_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_switch_update: {
                        required: true, 
                        
                    },id_good_update: {
                        required: true, 
                        
                    },id_src_sub_dept_update: {
                        required: true, 
                        
                    },id_dest_sub_dept_update: {
                        required: true, 
                        
                    },date_of_change_update: {
                        required: true, 
                        
                    },reason_for_switch_update: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_switch_update: {
                        required: true, 
                        
                    },id_good_update: {
                        required: true, 
                        
                    },id_src_sub_dept_update: {
                        required: true, 
                        
                    },id_dest_sub_dept_update: {
                        required: true, 
                        
                    },date_of_change_update: {
                        required: true, 
                        
                    },reason_for_switch_update: {
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
                    );$('#tb_switch_good_depts_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_switch_create: {
                        required: true, 
                        
                    },id_good_create: {
                        required: true, 
                        
                    },id_src_sub_dept_create: {
                        required: true, 
                        
                    },id_dest_sub_dept_create: {
                        required: true, 
                        
                    },date_of_change_create: {
                        required: true, 
                        
                    },reason_for_switch_create: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_switch_create: {
                        required: true, 
                        
                    },id_good_create: {
                        required: true, 
                        
                    },id_src_sub_dept_create: {
                        required: true, 
                        
                    },id_dest_sub_dept_create: {
                        required: true, 
                        
                    },date_of_change_create: {
                        required: true, 
                        
                    },reason_for_switch_create: {
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
                    );$('#tb_switch_good_depts_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_switch_delete: {
                        required: true, 
                        
                    },id_good_delete: {
                        required: true, 
                        
                    },id_src_sub_dept_delete: {
                        required: true, 
                        
                    },id_dest_sub_dept_delete: {
                        required: true, 
                        
                    },date_of_change_delete: {
                        required: true, 
                        
                    },reason_for_switch_delete: {
                        required: true, 
                        
                    },
                            },
                            messages:
                            {
                                id_switch_delete: {
                        required: true, 
                        
                    },id_good_delete: {
                        required: true, 
                        
                    },id_src_sub_dept_delete: {
                        required: true, 
                        
                    },id_dest_sub_dept_delete: {
                        required: true, 
                        
                    },date_of_change_delete: {
                        required: true, 
                        
                    },reason_for_switch_delete: {
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
                $('#tb_switch_good_depts_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_switch_good_depts_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_switch_good_depts_delete').validate();
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
            FullSelect('#id_good_update', 'tb_switch_good_depts');FullSelect('#id_good_create', 'tb_switch_good_depts');FullSelect('#id_good_delete', 'tb_switch_good_depts');FullSelect('#id_src_sub_dept_update', 'tb_switch_good_depts');FullSelect('#id_src_sub_dept_create', 'tb_switch_good_depts');FullSelect('#id_src_sub_dept_delete', 'tb_switch_good_depts');FullSelect('#id_dest_sub_dept_update', 'tb_switch_good_depts');FullSelect('#id_dest_sub_dept_create', 'tb_switch_good_depts');FullSelect('#id_dest_sub_dept_delete', 'tb_switch_good_depts');
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
                        id_switch_update: id
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
                    $('#id_switch_update').val(d[0]['id_switch']);$('#id_good_update').val(d[0]['id_good']);$('#id_src_sub_dept_update').val(d[0]['id_src_sub_dept']);$('#id_dest_sub_dept_update').val(d[0]['id_dest_sub_dept']);$('#date_of_change_update').val(d[0]['date_of_change']);$('#reason_for_switch_update').val(d[0]['reason_for_switch']);
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
                        id_switch: $('#id_switch_update').val(),id_good: $('#id_good_update').val(),id_src_sub_dept: $('#id_src_sub_dept_update').val(),id_dest_sub_dept: $('#id_dest_sub_dept_update').val(),date_of_change: $('#date_of_change_update').val(),reason_for_switch: $('#reason_for_switch_update').val()
                    };
                    $.post('main.php', { action: 'update', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha editado Correctamente', 'success');
                            get();
                        }
                    });
                    $('#tb_switch_good_depts _update')[0].reset();
                    return false;
                }function _create() {
                    var datos = {
                        id_good: $('#id_good_create').val(),id_src_sub_dept: $('#id_src_sub_dept_create').val(),id_dest_sub_dept: $('#id_dest_sub_dept_create').val(),date_of_change: $('#date_of_change_create').val(),reason_for_switch: $('#reason_for_switch_create').val()
                    };
                    $.post('main.php', { action: 'set', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha registrado Correctamente', 'success');
                            get();
                        }
                    });
                    $('#tb_switch_good_depts _create')[0].reset();
                    return false;
                }function deletex(id) {
                    var datos = {
                        id_switch: id
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
                    $('#id_switch_delete').val(d[0]['id_switch']);$('#id_good_delete').val(d[0]['id_good']);$('#id_src_sub_dept_delete').val(d[0]['id_src_sub_dept']);$('#id_dest_sub_dept_delete').val(d[0]['id_dest_sub_dept']);$('#date_of_change_delete').val(d[0]['date_of_change']);$('#reason_for_switch_delete').val(d[0]['reason_for_switch']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_switch'];
                
                }function deletex(id) {
                    var datos = {
                        id_switch: id
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
                    $('#tb_switch_good_depts_delete')[0].reset();
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