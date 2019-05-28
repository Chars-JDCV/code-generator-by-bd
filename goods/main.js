$(document).ready(function () {
                        $('#tb_goods_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_good_update: {
                             required:true
                    },id_sub_departament_update: {
                             required:true
                    },short_good_name_update: {
                             required:true
                    },full_good_name_update: {
                             required:true
                    },good_description_update: {
                             required:true
                    },good_brand_update: {
                             required:true
                    },good_model_update: {
                             required:true
                    },sibisep_serial_code_update: {
                             required:true
                    },good_value_update: {
                             required:true
                    },date_update: {
                             required:true
                    },good_exists_update: {
                             required:true
                    },quantity_update: {
                             required:true
                    },is_unregistered_update: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_good_update: {
                        required:'Ingrese Id_good_update',
                    },id_sub_departament_update: {
                        required:'Ingrese Id_sub_departament_update',
                    },short_good_name_update: {
                        required:'Ingrese Short_good_name_update',
                    },full_good_name_update: {
                        required:'Ingrese Full_good_name_update',
                    },good_description_update: {
                        required:'Ingrese Good_description_update',
                    },good_brand_update: {
                        required:'Ingrese Good_brand_update',
                    },good_model_update: {
                        required:'Ingrese Good_model_update',
                    },sibisep_serial_code_update: {
                        required:'Ingrese Sibisep_serial_code_update',
                    },good_value_update: {
                        required:'Ingrese Good_value_update',
                    },date_update: {
                        required:'Seleccione Date_update',
                    },good_exists_update: {
                        required:'Ingrese Good_exists_update',
                    },quantity_update: {
                        required:'Ingrese Quantity_update',
                    },is_unregistered_update: {
                        required:'Ingrese Is_unregistered_update',
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
                    );$('#tb_goods_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_sub_departament_create: {
                             required:true
                    },short_good_name_create: {
                             required:true
                    },full_good_name_create: {
                             required:true
                    },good_description_create: {
                             required:true
                    },good_brand_create: {
                             required:true
                    },good_model_create: {
                             required:true
                    },sibisep_serial_code_create: {
                             required:true
                    },good_value_create: {
                             required:true
                    },date_create: {
                             required:true
                    },good_exists_create: {
                             required:true
                    },quantity_create: {
                             required:true
                    },is_unregistered_create: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_sub_departament_create: {
                        required:'Ingrese Id_sub_departament_create',
                    },short_good_name_create: {
                        required:'Ingrese Short_good_name_create',
                    },full_good_name_create: {
                        required:'Ingrese Full_good_name_create',
                    },good_description_create: {
                        required:'Ingrese Good_description_create',
                    },good_brand_create: {
                        required:'Ingrese Good_brand_create',
                    },good_model_create: {
                        required:'Ingrese Good_model_create',
                    },sibisep_serial_code_create: {
                        required:'Ingrese Sibisep_serial_code_create',
                    },good_value_create: {
                        required:'Ingrese Good_value_create',
                    },date_create: {
                        required:'Seleccione Date_create',
                    },good_exists_create: {
                        required:'Ingrese Good_exists_create',
                    },quantity_create: {
                        required:'Ingrese Quantity_create',
                    },is_unregistered_create: {
                        required:'Ingrese Is_unregistered_create',
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
                    );$('#tb_goods_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_good_delete: {
                             required:true
                    },id_sub_departament_delete: {
                             required:true
                    },short_good_name_delete: {
                             required:true
                    },full_good_name_delete: {
                             required:true
                    },good_description_delete: {
                             required:true
                    },good_brand_delete: {
                             required:true
                    },good_model_delete: {
                             required:true
                    },sibisep_serial_code_delete: {
                             required:true
                    },good_value_delete: {
                             required:true
                    },date_delete: {
                             required:true
                    },good_exists_delete: {
                             required:true
                    },quantity_delete: {
                             required:true
                    },is_unregistered_delete: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_good_delete: {
                        required:'Ingrese Id_good_delete',
                    },id_sub_departament_delete: {
                        required:'Ingrese Id_sub_departament_delete',
                    },short_good_name_delete: {
                        required:'Ingrese Short_good_name_delete',
                    },full_good_name_delete: {
                        required:'Ingrese Full_good_name_delete',
                    },good_description_delete: {
                        required:'Ingrese Good_description_delete',
                    },good_brand_delete: {
                        required:'Ingrese Good_brand_delete',
                    },good_model_delete: {
                        required:'Ingrese Good_model_delete',
                    },sibisep_serial_code_delete: {
                        required:'Ingrese Sibisep_serial_code_delete',
                    },good_value_delete: {
                        required:'Ingrese Good_value_delete',
                    },date_delete: {
                        required:'Seleccione Date_delete',
                    },good_exists_delete: {
                        required:'Ingrese Good_exists_delete',
                    },quantity_delete: {
                        required:'Ingrese Quantity_delete',
                    },is_unregistered_delete: {
                        required:'Ingrese Is_unregistered_delete',
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
                $('#tb_goods_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_goods_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_goods_delete').validate();
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
            FullSelect('#id_sub_departament_update', 'tb_goods');FullSelect('#id_sub_departament_create', 'tb_goods');FullSelect('#id_sub_departament_delete', 'tb_goods');
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
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12]
                                }
                            }, {
                                extend: 'pdf',
                                orientation: 'landscape',
                                pageSize: 'LEGAL',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12]
                                }
                            },
                            {
                                text: 'Excel',
                                extend: 'excel',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12]
                                }
                            },
                            {
                                text: 'Imprimir',
                                extend: 'print',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12]
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
                        id_good: id
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
                    $('#id_good_update').val(d[0]['id_good']);$('#id_sub_departament_update').val(d[0]['id_sub_departament']);$('#short_good_name_update').val(d[0]['short_good_name']);$('#full_good_name_update').val(d[0]['full_good_name']);$('#good_description_update').val(d[0]['good_description']);$('#good_brand_update').val(d[0]['good_brand']);$('#good_model_update').val(d[0]['good_model']);$('#sibisep_serial_code_update').val(d[0]['sibisep_serial_code']);$('#good_value_update').val(d[0]['good_value']);$('#date_update').val(d[0]['date']);$('#good_exists_update').val(d[0]['good_exists']);$('#quantity_update').val(d[0]['quantity']);$('#is_unregistered_update').val(d[0]['is_unregistered']);
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
                        id_good: $('#id_good_update').val(),id_sub_departament: $('#id_sub_departament_update').val(),short_good_name: $('#short_good_name_update').val(),full_good_name: $('#full_good_name_update').val(),good_description: $('#good_description_update').val(),good_brand: $('#good_brand_update').val(),good_model: $('#good_model_update').val(),sibisep_serial_code: $('#sibisep_serial_code_update').val(),good_value: $('#good_value_update').val(),date: $('#date_update').val(),good_exists: $('#good_exists_update').val(),quantity: $('#quantity_update').val(),is_unregistered: $('#is_unregistered_update').val()
                    };
                    $.post('main.php', { action: 'update', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha editado Correctamente', 'success');
                            get();
                        }
                    });
                    $('#tb_goods _update')[0].reset();
                    return false;
                }function _create() {
                    var datos = {
                        id_sub_departament: $('#id_sub_departament_create').val(),short_good_name: $('#short_good_name_create').val(),full_good_name: $('#full_good_name_create').val(),good_description: $('#good_description_create').val(),good_brand: $('#good_brand_create').val(),good_model: $('#good_model_create').val(),sibisep_serial_code: $('#sibisep_serial_code_create').val(),good_value: $('#good_value_create').val(),date: $('#date_create').val(),good_exists: $('#good_exists_create').val(),quantity: $('#quantity_create').val(),is_unregistered: $('#is_unregistered_create').val()
                    };
                    $.post('main.php', { action: 'set', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha registrado Correctamente', 'success');
                            get();
                        }
                    });
                    $('#tb_goods _create')[0].reset();
                    return false;
                }function deletex(id) {
                    var datos = {
                        id_good: id
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
                    $('#id_good_delete').val(d[0]['id_good']);$('#id_sub_departament_delete').val(d[0]['id_sub_departament']);$('#short_good_name_delete').val(d[0]['short_good_name']);$('#full_good_name_delete').val(d[0]['full_good_name']);$('#good_description_delete').val(d[0]['good_description']);$('#good_brand_delete').val(d[0]['good_brand']);$('#good_model_delete').val(d[0]['good_model']);$('#sibisep_serial_code_delete').val(d[0]['sibisep_serial_code']);$('#good_value_delete').val(d[0]['good_value']);$('#date_delete').val(d[0]['date']);$('#good_exists_delete').val(d[0]['good_exists']);$('#quantity_delete').val(d[0]['quantity']);$('#is_unregistered_delete').val(d[0]['is_unregistered']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_good'];

                }function _delete(id) {
                    var datos = {
                        id_good: id
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
                    $('#tb_goods_delete')[0].reset();
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