$(document).ready(function() {
    $('#tb_users_update').validate({
        language: 'es',
        errorClass: 'invalid',
        validClass: 'valid',
        rules: {
            id_user_update: {
                required: true,

            },
            user_name_update: {
                required: true,

            },
            full_name_update: {
                required: true,

            },
            hashed_pass_update: {
                required: true,

            },
            clean_pass_update: {
                required: true,

            },
        },
        messages: {
            id_user_update: {
                required: true,

            },
            user_name_update: {
                required: true,

            },
            full_name_update: {
                required: true,

            },
            hashed_pass_update: {
                required: true,

            },
            clean_pass_update: {
                required: true,

            },
        },
        honkeyup: false,
        submitHandler: function() {
            $('div.error').hide();
            _update();
        },
        honkeyup: false,
        highlight: function(element, required) {
            $(element).fadeOut(function() {
                $(element).fadeIn();
                $(element).css('border', '2px solid #FDADAF');
            });
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).css('border', '1px solid #CCC');
        }
    });
    $('#tb_users_create').validate({
        language: 'es',
        errorClass: 'invalid',
        validClass: 'valid',
        rules: {
            id_user_create: {
                required: true,

            },
            user_name_create: {
                required: true,

            },
            full_name_create: {
                required: true,

            },
            hashed_pass_create: {
                required: true,

            },
            clean_pass_create: {
                required: true,

            },
        },
        messages: {
            id_user_create: {
                required: true,

            },
            user_name_create: {
                required: true,

            },
            full_name_create: {
                required: true,

            },
            hashed_pass_create: {
                required: true,

            },
            clean_pass_create: {
                required: true,

            },
        },
        honkeyup: false,
        submitHandler: function() {
            $('div.error').hide();
            _create();
        },
        honkeyup: false,
        highlight: function(element, required) {
            $(element).fadeOut(function() {
                $(element).fadeIn();
                $(element).css('border', '2px solid #FDADAF');
            });
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).css('border', '1px solid #CCC');
        }
    });
    $('#tb_users_delete').validate({
        language: 'es',
        errorClass: 'invalid',
        validClass: 'valid',
        rules: {
            id_user_delete: {
                required: true,

            },
            user_name_delete: {
                required: true,

            },
            full_name_delete: {
                required: true,

            },
            hashed_pass_delete: {
                required: true,

            },
            clean_pass_delete: {
                required: true,

            },
        },
        messages: {
            id_user_delete: {
                required: true,

            },
            user_name_delete: {
                required: true,

            },
            full_name_delete: {
                required: true,

            },
            hashed_pass_delete: {
                required: true,

            },
            clean_pass_delete: {
                required: true,

            },
        },
        honkeyup: false,
        submitHandler: function() {
            $('div.error').hide();
            _delete(idDel)();
        },
        honkeyup: false,
        highlight: function(element, required) {
            $(element).fadeOut(function() {
                $(element).fadeIn();
                $(element).css('border', '2px solid #FDADAF');
            });
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).css('border', '1px solid #CCC');
        }
    });
    $('#btnModalCreate').click(function() {
        $('#modal_create').modal();
    });
    $('#btn_update').click(function() {
        $('#tb_users_update').validate();
    });
    $('#btn_create').click(function() {
        $('#tb_users_create').validate();
    });
    $('#btn_delete').click(function() {
        $('#tb_users_delete').validate();
    });

    alertas('Bienvenido', 'info');
    get();
    getSelect();
    getCatalogo();
});

function getCatalogo() {
    var URLactual = window.location.href;
    var catalog = URLactual.split('/')
    document.getElementById('Catalogo').innerHTML = 'Catálogo de ' + catalog[catalog.length - 2];
}

function getSelect() {

}

function get() {
    $.post('main.php', { action: 'get' }, function(e) {
        if (e.error || !e.data) {
            alert(e.r);
        } else {
            setDataTable(e.r.c, e.r.d);
        }
    });
}

function FullSelect(nameselect, tabla) {
    var column = []
    $.post('main.php', { action: 'getselect', dt: tabla }, function(e) {
        if (e.error || !e.data) {
            alert(e.r);
        } else {
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
}

function setDataTable(c, d) {
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
                            columns: [0, 1, 2, 3, 4]
                        }
                    }, {
                        extend: 'pdf',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        text: 'Excel',
                        extend: 'excel',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        text: 'Imprimir',
                        extend: 'print',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
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
        responsive: true,
    };
    $('#tblTabla').DataTable(options);
}

function editx(id) {
    var datos = {
        id_user_update: id
    };
    $.post('main.php', { action: 'consult', dt: datos }, function(e) {
        if (e.error) {
            alertas(e.r, 'danger');
        } else {
            setDatosModal(e.r.d);
        }
    });
    return false;
}

function setDatosModal(d) {
    $('#id_user_update').val(d[0]['id_user']);
    $('#user_name_update').val(d[0]['user_name']);
    $('#full_name_update').val(d[0]['full_name']);
    $('#hashed_pass_update').val(d[0]['hashed_pass']);
    $('#clean_pass_update').val(d[0]['clean_pass']);
    $('#modal_update').modal();
}

function seleccionarSelect(nameselect, valor) {
    $(nameselect).find('option').each(function(index, element) {
        if (element.value == valor) {
            $(nameselect).val(element.value);
        }
    });
}

function _update() {
    var datos = {
        id_user: $('#id_user_update').val(),
        user_name: $('#user_name_update').val(),
        full_name: $('#full_name_update').val(),
        hashed_pass: $('#hashed_pass_update').val(),
        clean_pass: $('#clean_pass_update').val()
    };
    $.post('main.php', { action: 'update', dt: datos }, function(e) {
        if (e.error || !e.data) {
            alertas(e.r, 'danger');
        } else {
            alertas('Se ha editado Correctamente', 'success');
            get();
        }
    });
    $('#tb_users _update')[0].reset();
    return false;
}

function _create() {
    var datos = {
        user_name: $('#user_name_create').val(),
        full_name: $('#full_name_create').val(),
        hashed_pass: $('#hashed_pass_create').val(),
        clean_pass: $('#clean_pass_create').val()
    };
    $.post('main.php', { action: 'set', dt: datos }, function(e) {
        if (e.error || !e.data) {
            alertas(e.r, 'danger');
        } else {
            alertas('Se ha registrado Correctamente', 'success');
            get();
        }
    });
    $('#tb_users _create')[0].reset();
    return false;
}

function deletex(id) {
    var datos = {
        id_user: id
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
var idDel = 0;

function setMensajeModal(d) {
    $('#id_user_delete').val(d[0]['id_user']);
    $('#user_name_delete').val(d[0]['user_name']);
    $('#full_name_delete').val(d[0]['full_name']);
    $('#hashed_pass_delete').val(d[0]['hashed_pass']);
    $('#clean_pass_delete').val(d[0]['clean_pass']);
    $('#modal_delete').modal();
    idDel = d[0]['id_user'];

}

function deletex(id) {
    var datos = {
        id_user: id
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
    $('#tb_users_delete')[0].reset();
    return false;
}

function cancelar(form) {
    $('#' + form)[0].reset();
    var validator = $('#' + form).validate();
    validator.resetForm();
    return false;
}

function alertas(mensaje, tipo) {
    $.notify({
        // options
        message: mensaje
    }, {
        // settings
        type: tipo,
        delay: 1500
    });
}