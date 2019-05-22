<?php
class generate_form
{

    private $form_code;
    public function generate_code_form_update($columns,$table)
    {
        

        $div ="";
        try {
            for ($i=0; $i < count($columns['name']); $i++) { 
                $div = $div . $this->get_div($columns['name'][$i],$columns['type'][$i],$columns['key'][$i],'update',0);
            }
            $form_code="
            <form id='".$table."_update'>
                $div
            </form>";
            $body = "<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                $form_code
                                </div>
                            </div>
                                <div class='row'>
                                    <div class='form-group'>
                                        <input type='button' id= 'btnUpdate' class='btn btn-success' value = 'Actualizar'>
                                    </div>
                                </div>
                        </div>
                    </body>
                    <?php
                        include_once '../foot.php';
                    ?>";
            $tables = explode("_", $table);
            $table = $tables[1];
            $folder = "../".$table;
            if (!file_exists($folder)) {
                mkdir($folder, 0700, true);
            }
            $file = fopen("$folder/update.php", "w") or die("No se puede abrir/crear el archivo!");
            fwrite($file, $body);
            fclose($file);
        } catch (PDOExeption $e) {
            throw $e;
        }
    }
    public function generate_code_form_create($columns,$table)
    {
        
        $div ="";
        try {
            for ($i=1; $i < count($columns['name']); $i++) { 
                $div = $div . $this->get_div($columns['name'][$i],$columns['type'][$i],$columns['key'][$i],'create',1);
            }
            $form_code="
            <form id='".$table."_create'>
                $div
            </form>";
            $body = "<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                $form_code
                                </div>
                            </div>
                                <div class='row'>
                                    <div class='form-group'>
                                        <input type='button' id= 'btnCreate' class='btn btn-success' value = 'Guardar'>
                                    </div>
                                </div>
                        </div>
                    </body>
                    <?php
                        include_once '../foot.php';
                    ?>";
            $tables = explode("_", $table);
            $table = $tables[1];
            $folder = "../".$table;
            if (!file_exists($folder)) {
                mkdir($folder, 0700, true);
            }
            $file = fopen("$folder/create.php", "w") or die("No se puede abrir/crear el archivo!");
            fwrite($file, $body);
            fclose($file);
        } catch (PDOExeption $e) {
            throw $e;
        }
    }
    public function generate_code_form_delete($columns,$table)
    {
        
        $div ="";
        try {
            for ($i=0; $i < count($columns['name']); $i++) { 
                $div = $div . $this->get_div($columns['name'][$i],$columns['type'][$i],$columns['key'][$i],'delete',0);
            }
            $form_code="
            <form id='".$table."_create'>
                $div
            </form>";
            $body = "<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                $form_code
                                </div>
                            </div>
                                <div class='row'>
                                    <div class='form-group'>
                                        <input type='button' id= 'btndelete' class='btn btn-success' value = 'Eliminar'>
                                    </div>
                                </div>
                        </div>
                    </body>
                    <?php
                        include_once '../foot.php';
                    ?>";
            $tables = explode("_", $table);
            $table = $tables[1];
            $folder = "../".$table;
            if (!file_exists($folder)) {
                mkdir($folder, 0700, true);
            }
            $file = fopen("$folder/delete.php", "w") or die("No se puede abrir/crear el archivo!");
            fwrite($file, $body);
            fclose($file);
        } catch (PDOExeption $e) {
            throw $e;
        }
    }
    public function generate_code_form_read($columns,$table)
    {
        
        try {
            $body = "<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                        <!-- Incluye el cuerpo de la pagina-->
                        <h1 id='Catalogo'></h1>
                        <button id='btnModalRegistro' class='btn btn-success'>Nuevo Registro</button>
                        <div class='row'>
                            <div class='col-md-9'>
                                <table id='tblTabla' class='table table-stripped table-hover'>

                                </table>
                            </div>
                        </div>
                        </div>
                    </body>
                    <?php
                        include 'create.php';
                        include 'update.php';
                        include 'delete.php';
                        include '../foot.php';
                    ?>
                    <script src='main.js?v=4'></script>";
            $tables = explode("_", $table);
            $table = $tables[1];
            $folder = "../".$table;
            if (!file_exists($folder)) {
                mkdir($folder, 0700, true);
            }
            $file = fopen("$folder/index.php", "w") or die("No se puede abrir/crear el archivo!");
            fwrite($file, $body);
            fclose($file);
        } catch (PDOExeption $e) {
            throw $e;
        }
    }
    private function get_div($name,$type,$key,$typeform,$numbercolumn)
    {
        $label = "";
        if ($key=='MUL' || $key=='PRI') {
            if ($numbercolumn== 0 && $key=='PRI') {
                $input = "<input type='hidden' id= '".$name."_".$typeform."' class='form-control'>";
            }
            else {
                $label = "<label for='".$name."_".$typeform."'>$name</label>";
                $input = "<select  id= '".$name."_".$typeform."' class='form-control'></select>";
            }
        }
        else {
            $label = "<label for='".$name."_".$typeform."'>$name</label>";
            $input = "<input type='".$this->get_type($type)."' id= '".$name."_".$typeform."' class='form-control'>";
        }
        $div = "<div class='form-group'>
                    $label
                    $input
                </div>";
       return $div;
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
}
 ?>