$(document).ready(function () {
                        $('#tb_lendings_update').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_lending_update: {
                             required:true
                    },date_lent_update: {
                             required:true
                    },date_returned_update: {
                             required:true
                    },id_person_update: {
                             required:true
                    },id_good_update: {
                             required:true
                    },quantity_update: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_lending_update: {
                        required:'Ingrese Id_lending_update',
                    },date_lent_update: {
                        required:'Seleccione Date_lent_update',
                    },date_returned_update: {
                        required:'Seleccione Date_returned_update',
                    },id_person_update: {
                        required:'Ingrese Id_person_update',
                    },id_good_update: {
                        required:'Ingrese Id_good_update',
                    },quantity_update: {
                        required:'Ingrese Quantity_update',
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
                    );$('#tb_lendings_create').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                date_lent_create: {
                             required:true
                    },date_returned_create: {
                             required:true
                    },id_person_create: {
                             required:true
                    },id_good_create: {
                             required:true
                    },quantity_create: {
                             required:true
                    },
                            },
                            messages:
                            {
                                date_lent_create: {
                        required:'Seleccione Date_lent_create',
                    },date_returned_create: {
                        required:'Seleccione Date_returned_create',
                    },id_person_create: {
                        required:'Ingrese Id_person_create',
                    },id_good_create: {
                        required:'Ingrese Id_good_create',
                    },quantity_create: {
                        required:'Ingrese Quantity_create',
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
                    );$('#tb_lendings_delete').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                id_lending_delete: {
                             required:true
                    },date_lent_delete: {
                             required:true
                    },date_returned_delete: {
                             required:true
                    },id_person_delete: {
                             required:true
                    },id_good_delete: {
                             required:true
                    },quantity_delete: {
                             required:true
                    },
                            },
                            messages:
                            {
                                id_lending_delete: {
                        required:'Ingrese Id_lending_delete',
                    },date_lent_delete: {
                        required:'Seleccione Date_lent_delete',
                    },date_returned_delete: {
                        required:'Seleccione Date_returned_delete',
                    },id_person_delete: {
                        required:'Ingrese Id_person_delete',
                    },id_good_delete: {
                        required:'Ingrese Id_good_delete',
                    },quantity_delete: {
                        required:'Ingrese Quantity_delete',
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
                $('#tb_lendings_update').validate();
            });$('#btn_create').click(function () {
                $('#tb_lendings_create').validate();
            });$('#btn_delete').click(function () {
                $('#tb_lendings_delete').validate();
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
            FullSelect('#id_person_update', 'tb_people_lendings');FullSelect('#id_person_create', 'tb_people_lendings');FullSelect('#id_person_delete', 'tb_people_lendings');FullSelect('#id_good_update', 'tb_goods');FullSelect('#id_good_create', 'tb_goods');FullSelect('#id_good_delete', 'tb_goods');
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
                        id_lending: id
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
                    $('#id_lending_update').val(d[0]['id_lending']);$('#date_lent_update').val(d[0]['date_lent']);$('#date_returned_update').val(d[0]['date_returned']);$('#id_person_update').val(d[0]['id_person']);$('#id_good_update').val(d[0]['id_good']);$('#quantity_update').val(d[0]['quantity']);
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
                        id_lending: $('#id_lending_update').val(),date_lent: $('#date_lent_update').val(),date_returned: $('#date_returned_update').val(),id_person: $('#id_person_update').val(),id_good: $('#id_good_update').val(),quantity: $('#quantity_update').val()
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
                        date_lent: $('#date_lent_create').val(),date_returned: $('#date_returned_create').val(),id_person: $('#id_person_create').val(),id_good: $('#id_good_create').val(),quantity: $('#quantity_create').val()
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
                        id_lending: id
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
                    $('#id_lending_delete').val(d[0]['id_lending']);$('#date_lent_delete').val(d[0]['date_lent']);$('#date_returned_delete').val(d[0]['date_returned']);$('#id_person_delete').val(d[0]['id_person']);$('#id_good_delete').val(d[0]['id_good']);$('#quantity_delete').val(d[0]['quantity']);
                    $('#modal_delete').modal();
                    idDel = d[0]['id_lending'];

                }function _delete(id) {
                    var datos = {
                        id_lending: id
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