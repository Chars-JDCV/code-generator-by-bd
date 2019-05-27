<?php
require_once  getcwd() . '/../config/ConnectionManager.php';
require_once getcwd() . '/generate-javascript.php';
header("Content-Type: text/html; charset=utf-8");
class generate_form extends generate_javascript
{
    private $form_code;
    private $javascript_code;
    public function generate_code_form_update($columns,$table)
    {
        $typeform = "_update";
        $message = "Actualizar Registro";
        $value ="Actualizar";
        $div ="";
        try {
            for ($i=0; $i < count($columns['name']); $i++) { 
                $div = $div . $this->get_div($columns['name'][$i],$columns['type'][$i],$columns['key'][$i],$typeform,0);
            }
            $form_code=$this->get_form($value,$typeform,$div,$table);
            $body = $this->get_body($message,$typeform,$form_code);
            $this->create_folder_and_page($table,$body,$typeform);
        } catch (PDOExeption $e) {
            throw $e;
        }
    }
    public function generate_code_form_create($columns,$table)
    {
        $typeform = "_create";
        $message = "Crear Registro Nuevo";
        $value ="Registrar";
        $div ="";
        try {
            for ($i=1; $i < count($columns['name']); $i++) { 
                $div = $div . $this->get_div($columns['name'][$i],$columns['type'][$i],$columns['key'][$i],$typeform,1);
            }
            $form_code=$this->get_form($value,$typeform,$div,$table);
            $body = $this->get_body($message,$typeform,$form_code);
            $this->create_folder_and_page($table,$body,$typeform);
        } catch (PDOExeption $e) {
            throw $e;
        }
    }
    public function generate_code_form_delete($columns,$table)
    {
        $typeform = "_delete";
        $message = "Eliminar Registro";
        $value ="Eliminar";
        $div ="";
        try {
            for ($i=0; $i < count($columns['name']); $i++) { 
                $div = $div . $this->get_div($columns['name'][$i],$columns['type'][$i],$columns['key'][$i],$typeform,0);
            }
            $form_code=$this->get_form($value,$typeform,$div,$table);
            $body = $this->get_body($message,$typeform,$form_code);
            $this->create_folder_and_page($table,$body,$typeform);
        } catch (PDOExeption $e) {
            throw $e;
        }
    }
    public function create_folder_and_page($table,$body,$typeform)
    {
        $typeform =str_replace("_", "", $typeform);
        if (strpos($table, '_')) {
            $tables = explode("_", $table);
            $table = $tables[1];
        }
        $folder = "../$table";
        if (!file_exists($folder)) {
            mkdir($folder, 0700, true);
        }
        $file = fopen("$folder/$typeform.php", "w") or die("No se puede abrir/crear el archivo!");
        fwrite($file, $body);
        fclose($file);
    }
    public function get_form($value,$typeform,$div,$table)
    {
        $form_code="
            <form id='$table$typeform'>
                $div
                <div class='modal-footer'>
                    <button id='btn$typeform' class='btn btn-primary'>$value</button>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                </div>
            </form>";
        return $form_code;
    }
    public function get_body($message,$typeform,$form_code)
    {
        //cambiar la clase a modal para que no se miren
        $body = "<div class='modal$typeform' id='modal$typeform' tabindex='-1' role='dialog'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h3 class='modal-title'>$message</h3>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'> 
                                    $form_code
                                </div>
                            </div>
                        </div>
                    </div>";
        return $body;
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
                        <button id='btnModalCreate' class='btn btn-success'>Nuevo Registro</button>
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
            if (strpos($table, '_')) {
                    $tables = explode("_", $table);
                    $table = $tables[1];
                }
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
                $input = "<input type='hidden' id= '".$name.$typeform."' class='form-control'>";
            }
            else {
                $label = "<label for='".$name.$typeform."'>$name</label>";
                $input = "<select  id= '".$name.$typeform."' class='form-control'></select>";
            }
        }
        else {
            $label = "<label for='".$name.$typeform."'>$name</label>";
            $input = "<input type='".$this->get_type($type)."' id= '".$name.$typeform."' class='form-control'>";
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