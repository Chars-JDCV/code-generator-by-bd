<?php
class generate_javascript
{

    private $form_code;
    public function generate_code_javascript($columns,$table)
    {
        $document = get_document($typeform,$modal,$table);
        $document += $this->get_update($columns,$table). $this->get_create($columns,$table);
        $this->create_folder_and_main($table,$document);
        $this->get_update($columns,$table);
    }
    private function get_update($columns,$table)
    {
        $messagevalidation ="";
        $requirevalidation ="";
        $typeform = "_update";
        $message = "Actualizar Registro";
        $value ="Actualizar";
        $div ="";
        try {
            for ($i=0; $i < count($columns['name']); $i++) { 
                $messagevalidation = $messagevalidation . $this->get_menssages_valition($columns['name'][$i].$typeform,$columns['type'][$i]);
                $requirevalidation = $requirevalidation . $this->get_menssages_valition($columns['name'][$i].$typeform,$columns['type'][$i]);
            }
            //$this->create_folder_and_page($table,$body,$typeform);
        } catch (PDOExeption $e) {
            throw $e;
        }
        return  $this->code_validation($table,$requirevalidation,$messagevalidation,$typeform,'update');
    }
    private function get_create($columns,$table)
    {
        $messagevalidation ="";
        $requirevalidation ="";
        $typeform = "_create";
        try {
            for ($i=1; $i < count($columns['name']); $i++) { 
                $messagevalidation = $messagevalidation . $this->get_menssages_valition($columns['name'][$i].$typeform,$columns['type'][$i]);
                $requirevalidation = $requirevalidation . $this->get_menssages_valition($columns['name'][$i].$typeform,$columns['type'][$i]);
            }
            //$this->create_folder_and_page($table,$body,$typeform);
        } catch (PDOExeption $e) {
            throw $e;
        }
        return  $this->code_validation($table,$requirevalidation,$messagevalidation,$typeform,'update');
    }
    public function create_folder_and_main($table,$document)
    {
        $tables = explode("_", $table);
        $table = $tables[1];
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
    private function get_boton($typeform,$type,$modal,$table)
    {
        $button ="";
        if ($type) {
            $button = "$('#btn$typeform').click(function () {
                $('#$table$typeform').validate();
            });";
        } else {
            $button = "$('#btn$modal$typeform').click(function () {
                $('#modal$typeform').modal();
            });";
        }
        return $button;
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
        for ($i=0; $i < count($columns['name']); $i++) { 
            $get_select = $get_select . $this->get_getSelect($columns['name'][$i].$typeform,$table,$columns['type'][$i]);
        }
        $method_getSelect = "function getSelect() {
            $get_select
        }";
        return $method_getSelect;
    }
    private function get_getSelect($column,$table,$key)
    {
        $value = "";
        if ($key=='MUL' || $key=='PRI') {
            $value = "FullSelect('#$column', '$table');";
        }
        return $value;
    }
    private function get_setMensajeModal($column,$table,$key)
    {
        $value= "";
        for ($i=0; $i < count($columns['name']); $i++) { 
            $get_select = $get_select . $this->get_getSelect($columns['name'][$i].$typeform,$table,$columns['type'][$i]);
        }
        $method = "var idDel = 0;
        function setMensajeModal(d) {
            $('#ModalMensaje').val(d[0]['username']+ ' ' + d[0]['privilegio']);
            $('#modaldelete').modal();
            idDel = d[0]['id_usuario'];
        }";
        return $method;
    }
    private function get_datatable($column)
    {
        $col =  '';
        for ($i=0; $i < count($column); $i++) {
            if (count($column) == $i) {
                $col += $i;
            } else {
                $col += $i .',';
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
        return $method;
    }
}
 ?>