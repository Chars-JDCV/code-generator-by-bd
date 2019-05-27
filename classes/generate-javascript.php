<?php
header("Content-Type: text/html; charset=utf-8");
class generate_javascript
{

    private $form_code;
    public function generate_code_javascript($columns,$table)
    {
        $document = "";
        $documentReady = $this->get_documentReady($columns,$table);
        $documentReady = $documentReady . $this->get_method_catalog();
        $documentReady = $documentReady . $this->get_method_getSelect($columns,$table);
        $documentReady = $documentReady . $this->get_method_get();
        $documentReady = $documentReady . $this->get_method_FullSelect();
        $documentReady = $documentReady . $this->get_method_setSelect();
        $documentReady = $documentReady . $this->get_datatable($columns);
        $documentReady = $documentReady . $this->get_editx($columns);
        $documentReady = $documentReady . $this->get_setDatosModal($columns);
        $documentReady = $documentReady . $this->get_update($columns,$table);
        $documentReady = $documentReady . $this->get_create($columns,$table);
        $documentReady = $documentReady . $this->get_deletex($columns);
        $documentReady = $documentReady . $this->get_setMensajeModal($columns);
        $documentReady = $documentReady . $this->get_delete($columns,$table);
        $documentReady = $documentReady . $this->get_cancel();
        $documentReady = $documentReady . $this->get_alert();
        $document = $documentReady;
        //formatt
        /*
            $documentReady
            {
                $validation*
                $datapicker*
                $botones*
                alertas('Bienvenido', 'info');*
                get();*
                getSelect();*
                getCatalogo();*
            }
            $getCatalogo*
            $setSelect*
            $get*
            $FullSelect*
            $setSelect*
            $setDataTable*
            $editx*
            $setDatosModal*
            $update*
            $save*
            $deletex*
            $setMensajeModal*
            $cancel*
            $alertas*
        */
        $this->create_folder_and_main($table,$document);
    }
    private function get_validationCode($columns,$table,$typeform)
    {
        $messagevalidation ="";
        $requirevalidation ="";
        try {
            for ($i=0; $i < count($columns['name']); $i++) { 
                $messagevalidation = $messagevalidation . $this->get_menssages_valition($columns['name'][$i].$typeform,$columns['type'][$i]);
                $requirevalidation = $requirevalidation . $this->get_menssages_valition($columns['name'][$i].$typeform,$columns['type'][$i]);
            }
        } catch (PDOExeption $e) {
            throw $e;
        }
        $method  =str_replace("_", "", $typeform);
        return  $this->code_validation($table,$requirevalidation,$messagevalidation,$typeform,$typeform);
    }
    public function create_folder_and_main($table,$document)
    {
        if (strpos($table, '_')) {
            $tables = explode("_", $table);
            $table = $tables[1];
        }
        $folder = "../$table";
        if (!file_exists($folder)) {
            mkdir($folder, 0700, true);
        }
        $file = fopen("$folder/main.js", "w") or die("No se puede abrir/crear el archivo!");
        fwrite($file, $document);
        fclose($file);
    }
    private function get_document($typeform,$modal,$table)
    {
        //mandar a llamar la creacion de validacion, eventos de botones, datapick
        $button =  $this->get_boton($typeform,true,$modal,$table);
        $value = "$(document).ready(function () {
                        $validation
                        $botones
                        $datapicker
                        alertas('Bienvenido', 'info');
                        get();
                        getSelect();
                        getCatalogo();
                    });";
        return $value;
    }
    private function get_documentReady($columns,$table)
    {
        //mandar a llamar la creacion de validacion, eventos de botones, datapick
        $validation = $this->get_validationCode($columns,$table,'_update');
        $validation .= $this->get_validationCode($columns,$table,'_create');
        $validation .= $this->get_validationCode($columns,$table,'_delete');
        $button =  $this->get_button('_update',$table);
        $button .=  $this->get_button('_create',$table);
        $button .=  $this->get_button('_delete',$table);
        $datapicker = $this->get_datapicker($columns);
        $value = "$(document).ready(function () {
                        $validation
                        $('#btnModalCreate').click(function() {
                            $('#modal_create').modal();
                        });
                        $button
                        $datapicker
                        alertas('Bienvenido', 'info');
                        get();
                        getSelect();
                        getCatalogo();
                    });";
        return $value;
    }
    private function get_button($typeform,$table)
    {
        $button ="";
            $button = "$('#btn$typeform').click(function () {
                $('#$table$typeform').validate();
            });";
        return $button;
    }
    private function get_datapicker($columns)
    {
        $value = "";
        for ($i=0; $i < count($columns['type']); $i++) { 
            if ($columns['type'] == 'DATE' ||
                $columns['type'] == 'DATETIME' ||
                $columns['type'] == 'TIMESTAMP' ||
                $columns['type'] == 'TIME' ||
                $columns['type'] == 'YEAR') {
                $value+=$this->set_datapicker($columns['name'][$i],'_update');
                $value+=$this->set_datapicker($columns['name'][$i],'_create');
                $value+=$this->set_datapicker($columns['name'][$i],'_delete');
            }
        }
        return $value;
    }
    private function set_datapicker($name,$typeform)
    {
        $value ="";
            $value = "$('#$name$typeform').datepicker({
                language: 'es'
            });";
        return $value;
    }
    private function get_type($type)
    {
        if (strpos($type, '(')) {
            $types = explode("(", $type);
            $type = $types[0];
        }
        switch (strtoupper($type)) {
            case 'TINYINT':
                $type = 'number';
                break;
            case 'SMALLINT':
                $type = 'number';
                break;
            case 'MEDIUMINT':
                $type = 'number';
                break;
            case 'INT':
                $type = 'number';
                break;
            case 'INTEGER':
                $type = 'number';
                break;
            case 'BIGINT':
                $type = 'number';
                break;
            case 'FLOAT':
                $type = 'number';
                break;

            case 'DOUBLE':
                $type = 'number';
                break;
            case 'REAL':
                $type = 'number';
                break;
            case 'DECIMAL':
                $type = 'number';
                break;
            case 'NUMERIC':
                $type = 'number';
                break;
            
            case 'DATE':
                $type = 'date';
                break;
            case 'DATETIME':
                $type = 'datetime';
                break;
            case 'TIMESTAMP':
                $type = 'datetime';
                break;
            case 'TIME':
                $type = 'date';
                break;
            case 'YEAR':
                $type = 'date';
                break;
                
                case 'CHAR':
                $type = 'text';
                break;
            case 'VARCHAR':
                $type = 'text';
                break;
            case 'TINYBLOB':
                $type = 'text';
                break;
            case 'TINYTEXT':
                $type = 'text';
                break;
            case 'BLOB':
                $type = 'text';
                break;
            case 'TEXT':
                $type = 'text';
                break;
            case 'MEDIUMBLOB':
                $type = 'text';
                break;
            case 'MEDIUMTEXT':
                $type = 'text';
                break;
            case 'LONGBLOB':
                $type = 'text';
                break;
            case 'LONGTEXT':
                $type = 'text';
                break;
            case 'ENUM':
                $type = 'text';
                break;
            case 'SET':
                $type = 'text';
                break;
            default:
                break;
        }
        return $type;
    }
    private function code_validation($table,$rules,$messages,$typeform,$method)
    {
        if ($typeform=='_delete') {
            $method = '_delete(idDel)';
        }
        $validation = "$('#$table$typeform').validate(
                        {
                            language: 'es',
                            errorClass: 'invalid',
                            validClass: 'valid',
                            rules:
                            {
                                $rules
                            },
                            messages:
                            {
                                $messages
                            },
                            honkeyup: false,
                            submitHandler: function () {
                                $('div.error').hide();
                                $method();
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
                    );";
        return $validation;     
    }
    private function get_menssages_valition($name,$type)
    {
        $messagetype = "";
        $message ="$name: {
                        required: true, 
                        $messagetype
                    },";
        return $message;
    }
    private function get_require_valition($name,$type)
    {
        $requiere = "";
        $camps ="$name: {
                        required: true, 
                        $requiere
                    },";
        return $camps;
    }
    
    private function get_method_get()
    {
        $method_get = "function get() {
                        $.post('main.php', { action: 'get' }, function (e) {
                            if (e.error || !e.data) {
                                alert(e.r);
                            }
                            else {
                                setDataTable(e.r.c, e.r.d);
                            }
                        });
                    }";
        return $method_get;
    }

    private function get_method_catalog()
    {
        $method_catalog = "function getCatalogo() {
                                var URLactual = window.location.href;
                                var catalog = URLactual.split('/')
                                document.getElementById('Catalogo').innerHTML='Catálogo de '+ catalog[catalog.length -2];
                            }";
        return $method_catalog;
    }
    private function get_method_FullSelect()
    {
        $method_FullSelect = "function FullSelect(nameselect, tabla) {
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
                            ";
        return $method_FullSelect;
    }
    private function get_method_setSelect()
    {
        $method_setSelect = "function setSelect(array, nameselect, column) {
            array.forEach(element => {
                var o = new Option(element[column[1]], element[column[0]]);
                $(nameselect).append(o);
            });
        }";
        return $method_setSelect;
    }
    private function get_method_getSelect($columns,$table)
    {
        $get_select= "";
        for ($i=1; $i < count($columns['name']); $i++) { 
            $get_select = $get_select . $this->get_getSelect($columns['name'][$i],'_update',$table,$columns['key'][$i]);
            $get_select = $get_select . $this->get_getSelect($columns['name'][$i],'_create',$table,$columns['key'][$i]);
            $get_select = $get_select . $this->get_getSelect($columns['name'][$i],'_delete',$table,$columns['key'][$i]);
        }
        $method_getSelect = "function getSelect() {
            $get_select
        }";
        return $method_getSelect;
    }
    private function get_getSelect($column,$typeform,$table,$key)
    {
        $value = "";
        if ($key=='MUL' || $key=='PRI') {
            $value = "FullSelect('#$column$typeform', '$table');";
        }
        return $value;
    }
    private function get_datatable($columns)
    {
        $col =  '';
        for ($i=0; $i < count($columns['name']); $i++) {
            //echo'<br>'. (count($columns['name'])-1) . $i.'</br>';
            if (count($columns['name']) -1 == $i) {
                $col .= $i;
            } else {
                $col .= $i .',';
            }
        }
        $value= "";
        $value = "function setDataTable(c, d) {
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
                                    columns: [$col]
                                }
                            }, {
                                extend: 'pdf',
                                orientation: 'landscape',
                                pageSize: 'LEGAL',
                                exportOptions: {
                                    columns: [$col]
                                }
                            },
                            {
                                text: 'Excel',
                                extend: 'excel',
                                exportOptions: {
                                    columns: [$col]
                                }
                            },
                            {
                                text: 'Imprimir',
                                extend: 'print',
                                exportOptions: {
                                    columns: [$col]
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
                }";
        return $value;
    }
    private function get_editx($columns)
    {
        $camps =  '';
        $typeform = '_update';
        $name = $columns['name'][0];
        $camps = $name.$typeform.': id';
        $value= "function editx(id) {
                    var datos = {
                        $camps
                    };
                    $.post('main.php', { action: 'consult', dt: datos }, function(e) {
                        if (e.error) {
                            alertas(e.r, 'danger');
                        } else {
                            setDatosModal(e.r.d);
                        }
                    });
                    return false;
                }";
        return $value;
    }

    private function get_setDatosModal($columns)
    {
        $camps =  '';
        $typeform = '_update';
        for ($i=0; $i < count($columns['name']); $i++) { 
            $key = $columns['type'][$i];
            $name = $columns['name'][$i];
            if ($key=='MUL' || $key=='PRI') {
                $camps = $camps. "seleccionarSelect('#$name$typeform', d[0]['$name']);";
            }
            else {
                $camps = $camps."$('#$name$typeform').val(d[0]['$name']);";
            }
            
        }
        $value= "function setDatosModal(d) {
                    $camps
                    $('#modal$typeform').modal();
                }
                
                function seleccionarSelect(nameselect, valor) {
                    $(nameselect).find('option').each(function(index, element) {
                        if (element.value == valor) {
                            $(nameselect).val(element.value);
                        }
                    });
                }";
        return $value;
    }
    private function get_update($columns,$table)
    {
        $camps =  '';
        $typeform = '_update';
        for ($i=0; $i < count($columns['name']); $i++) { 
            $key = $columns['type'][$i];
            $name = $columns['name'][$i];
            if ($i == (count($columns['name'])) -1 ) {
                $camps = $camps."$name: $('#$name$typeform').val()";
            }
            else {
                $camps = $camps."$name: $('#$name$typeform').val(),";
            }
            
        }
        $value= "function _update() {
                    var datos = {
                        $camps
                    };
                    $.post('main.php', { action: 'update', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha editado Correctamente', 'success');
                            get();
                        }
                    });
                    $('#$table $typeform')[0].reset();
                    return false;
                }";
        return $value;
    }
    private function get_create($columns,$table)
    {
        $camps =  '';
        $typeform = '_create';
        for ($i=1; $i < count($columns['name']); $i++) { 
            $key = $columns['type'][$i];
            $name = $columns['name'][$i];
            if ($i == (count($columns['name'])) -1 ) {
                $camps = $camps."$name: $('#$name$typeform').val()";
            }
            else {
                $camps = $camps."$name: $('#$name$typeform').val(),";
            }
            
        }
        $value= "function _create() {
                    var datos = {
                        $camps
                    };
                    $.post('main.php', { action: 'set', dt: datos }, function(e) {
                        if (e.error || !e.data) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Se ha registrado Correctamente', 'success');
                            get();
                        }
                    });
                    $('#$table $typeform')[0].reset();
                    return false;
                }";
        return $value;
    }
    private function get_deletex($columns)
    {
        $camps =  '';
        $typeform = '_create';
        $name = $columns['name'][0];
        $camps = $name.': id';
        $value= "function deletex(id) {
                    var datos = {
                        $camps
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
                var idDel = 0;";
        return $value;
    }
    private function get_setMensajeModal($columns)
    {
        $camps =  '';
        $typeform = '_delete';
        $message = "";
        $idDel = $columns['name'][0];
        for ($i=0; $i < count($columns['name']); $i++) { 
            $key = $columns['type'][$i];
            $name = $columns['name'][$i];
            if ($key=='MUL' || $key=='PRI') {
                $camps = $camps. "seleccionarSelect('#$name$typeform', d[0]['$name']);";
            }
            else {
                $camps = $camps."$('#$name$typeform').val(d[0]['$name']);";
            }
        }
        $value= "function setMensajeModal(d) {
                    $camps
                    $('#modal$typeform').modal();
                    idDel = d[0]['$idDel'];
                
                }";
        return $value;
    }
    private function get_delete($columns,$table)
    {
        $camps =  '';
        $typeform = '_delete';
        $name = $columns['name'][0];
        $camps = $name.': id';
        $value= "function deletex(id) {
                    var datos = {
                        $camps
                    };
                    $.post('main.php', { action: 'del', dt: datos }, function(e) {
                        if (e.error) {
                            alertas(e.r, 'danger');
                        } else {
                            alertas('Registro Eliminado Correctamente', 'success');
                            get();
                        }
                        $('#modal$typeform').modal('hide');
                    });
                    $('#$table$typeform')[0].reset();
                    return false;
                }";
        return $value;
    }
    private function get_cancel()
    {
        $value= "function cancelar(form) {
                    $('#' + form)[0].reset();
                    var validator = $('#' + form).validate();
                    validator.resetForm();
                    return false;   
                }";
        return $value;
    }
    private function get_alert()
    {
        
        $value= "function alertas(mensaje, tipo) {
                    $.notify({
                        // options
                        message: mensaje
                    }, {
                        // settings
                        type: tipo,
                        delay: 1500
                    });
                }";
        return $value;
    }
}
 ?>