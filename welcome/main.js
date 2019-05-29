$(document).ready(function() {
    $('#btn_tables').click(function() {
        create_document_table();
    });
    $('#btn_columns').click(function() {
        create_document_table();
    });
    alertas('Welcome', 'info');
    get_database();
});

$("#databases").change(function() {
    get_tables();
});
$("#tables").change(function() {
    get_columns();
});
$('#option').click(function() {
    if ($(this).is(':checked')) {
        $("#colums_name").removeClass("d-none")
        $("#btn_tables").addClass("d-none")
        $("#btn_columns").removeClass("d-none")
    } else {
        $("#colums_name").addClass("d-none")
        $("#btn_tables").removeClass("d-none")
        $("#btn_columns").addClass("d-none")
            //return confirm("Are you sure?");
    }
});

function get_database() {
    $.post('main.php', { action: 'get' }, function(e) {
        if (e.error || !e.data) {
            alertas(e.r, 'danger');
        } else {
            $('#databases').empty();
            for (let index = 0; index < e.r.c.length; index++) {
                var o = new Option(e.r.c[index]['Database'], e.r.c[index]['Database']);
                $('#databases').append(o);
            }
        }
    });
}

function get_tables() {
    var datos = {
        TABLE_SCHEMA: $('#databases').val()
    };
    $.post('main.php', { action: 'gettable', dt: datos }, function(e) {
        if (e.error || !e.data) {
            alertas(e.r, 'danger');
        } else {
            $('#tables').empty();
            for (let index = 0; index < e.r.c.length; index++) {
                var o = new Option(e.r.c[index]['TABLE_NAME'], e.r.c[index]['TABLE_NAME']);
                $('#tables').append(o);
            }
        }
    });
}

function get_columns() {
    var datos = {
        database: $('#databases').val(),
        table: $('#tables').val()
    };
    $.post('main.php', { action: 'getcolumns', dt: datos }, function(e) {
        if (e.error || !e.data) {
            alertas(e.r, 'danger');
        } else {
            $('#columns').empty();
            for (let index = 0; index < e.r.c.length; index++) {
                var o = new Option(e.r.c[index]['Field'], e.r.c[index]['Field']);
                $('#columns').append(o);
            }
        }
    });
}

function create_document_table() {
    var datos = {
        database: $('#databases').val(),
        table: $('#tables').val()
    };
    console.log(datos)
    $.post('main.php', { action: 'create_document_table', dt: datos }, function(e) {
        console.log(e)
        if (e.error || !e.data) {
            alertas(e.r, 'danger');
        } else {
            alertas('Create Success', 'success');
        }
    });
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