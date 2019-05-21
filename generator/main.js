$(document).ready(function() {



});

$("#btngenerator").click(function() {
    $.post('main.php', { action: 'generate' }, function(e) {
        if (e.error || !e.data) {
            alert(e.r);
        } else {
            setDataTable(e.r.c, e.r.d);
        }
    });
});