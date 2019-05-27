$(document).ready(function() {
    $('#frmModalEmpleados').validate({
        language: 'es',
        errorClass: 'invalid',
        validClass: 'valid',
        rules: {
            Modalid_puesto: {
                required: true
            },
            Modalpuesto: {
                required: true,
                lettersonly: true
            },
            Modalid_empresa: {
                required: true
            },
            Modalid_salario: {
                required: true
            }
        },
        messages: {
            Modalid_puesto: {
                required: 'Seleccione ID'
            },
            Modalpuesto: {
                required: 'Ingrese Puesto',
                lettersonly: 'Solo Acepta Letras'
            },
            Modalid_empresa: {
                required: 'Seleccione Empresa'
            },
            Modalid_salario: {
                required: 'Seleccione Salario'
            }
        },
        honkeyup: false,
        submitHandler: function() {
            $('div.error').hide();
            update();
            $('#modalX').modal('hide');
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

    $('#btnModal').click(function() {
        $('#modalX').modal();
    });
    $('#frmEmpleados').validate({
        language: 'es',
        errorClass: 'invalid',
        validClass: 'valid',
        rules: {
            puesto: {
                required: true,
                lettersonly: true
            },
            id_empresa: {
                required: true
            },
            id_salario: {
                required: true
            }
        },
        messages: {
            puesto: {
                required: 'Ingrese Puesto',
                lettersonly: 'Solo Acepta Letras'
            },
            id_empresa: {
                required: 'Seleccione Empresa'
            },
            id_salario: {
                required: 'Seleccione Salario'
            }
        },
        honkeyup: false,
        submitHandler: function() {
            $('div.error').hide();
            guardar();
            $('#modalRegistro').modal('hide');
        },

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

    $('#FechaNacimiento').datepicker({
        language: 'es'
    });
    $('#ModalFechaNacimiento').datepicker({
        language: 'es'
    });


    $('#btnActualizar').click(function() {
        $('#frmModalEmpleados').validate();
    });
    $('#btnModalRegistro').click(function() {
        $('#modalRegistro').modal();
    });
    $('#btnGuardar').click(function() {
        $('#frmEmpleados').validate();
    });
    $('#btnCancelar').click(cancelar);
    $('#btndelete').click(function() {
        del(idDel);
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
    FullSelect('#id_empresa', 'empresa');
    FullSelect('#id_salario', 'salario');
    FullSelect('#Modalid_empresa', 'empresa');
    FullSelect('#Modalid_salario', 'salario');
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
                            columns: [0, 1, 2, 4, 5, 6]
                        }
                    }, {
                        extend: 'pdf',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        exportOptions: {
                            columns: [0, 1, 2, 4, 5, 6]
                        }
                    },
                    {
                        text: 'Excel',
                        extend: 'excel',
                        exportOptions: {
                            columns: [0, 1, 2, 4, 5, 6]
                        }
                    },
                    {
                        text: 'Imprimir',
                        extend: 'print',
                        exportOptions: {
                            columns: [0, 1, 2, 4, 5, 6]
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

    };
    $('#tblTabla').DataTable(options);
}

function editx(id) {
    var datos = {
        id_puesto: id
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
    $('#Modalid_puesto').val(d[0]['id_puesto']);
    $('#Modalpuesto').val(d[0]['puesto']);
    seleccionarSelect('#Modalid_empresa', d[0]['id_empresa']);
    seleccionarSelect('#Modalid_salario', d[0]['id_salario']);
    $('#modalX').modal();
}

function seleccionarSelect(nameselect, valor) {
    $(nameselect).find('option').each(function(index, element) {
        if (element.value == valor) {
            $(nameselect).val(element.value);
        }
    });
}

function update() {
    var datos = {
        id_puesto: $('#Modalid_puesto').val(),
        puesto: $('#Modalpuesto').val(),
        id_empresa: $('#Modalid_empresa').val(),
        id_salario: $('#Modalid_salario').val()
    };
    $.post('main.php', { action: 'update', dt: datos }, function(e) {
        if (e.error || !e.data) {
            alertas(e.r, 'danger');
        } else {
            alertas('Se ha editado Correctamente', 'success');
            get();
        }
    });
}

function guardar() {
    var datos = {
        puesto: $('#puesto').val(),
        id_empresa: $('#id_empresa').val(),
        id_salario: $('#id_salario').val()
    };
    $.post('main.php', { action: 'set', dt: datos }, function(e) {
        if (e.error || !e.data) {
            alertas(e.r, 'danger');
        } else {
            alertas('Se ha registrado Correctamente', 'success');
            get();
        }
    });
    $('#frmEmpleados')[0].reset();
    return false;
}

function deletex(id) {
    var datos = {
        id_puesto: id
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
    $('#ModalMensaje').val(d[0]['puesto'] + ' ' + d[0]['empresa'] + ' ' + d[0]['salario']);
    $('#modaldelete').modal();
    idDel = d[0]['id_puesto'];

}

function del(id) {
    var datos = {
        id_puesto: id
    };
    $.post('main.php', { action: 'del', dt: datos }, function(e) {
        if (e.error) {
            alertas(e.r, 'danger');
        } else {
            alertas('Registro Eliminado Correctamente', 'success');
            get();
        }
        $('#modaldelete').modal('hide');
    });
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

function alertasprogreso(mensaje, tipo) {
    var notify = $.notify('<strong>' + mensaje + '</strong> No cierre esta página...', {
        allow_dismiss: false,
        showProgressbar: true,
        delay: 1500
    });

    setTimeout(function() {
        notify.update({ 'type': tipo, 'message': '<strong>Éxito</strong> He registro ha sido estado guardado!', 'progress': 25 });
    }, 1000);
}