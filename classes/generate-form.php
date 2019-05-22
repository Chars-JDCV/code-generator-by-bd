<?php
class generate_form
{

    private $form_code;
    public function generate_code_form_update($columns,$table)
    {
        $div ="";
        try {
            for ($i=0; $i < count($columns['name']); $i++) { 
                $div = $div . $this->get_input($columns['name'][$i],$columns['type'][$i]);
            }

        } catch (PDOExeption $e) {
            throw $e;
        }
        $form_code="
                <form id='$table'>
					$div
				</form>";
        echo '<br>'.$form_code.'</b>';
        $carpeta = "../".$table."";
        if (!file_exists($carpeta)) {
            mkdir("../$table", 0700, true);
        }
        $file = fopen("../$table/update.php", "w") or die("No se puede abrir/crear el archivo!");
        fwrite($file, $form_code);
        fclose($file);
    }
    private function get_input($name,$type)
    {
        
        $input = "<input type='".$this->get_type($type)."' id= '".$name."' class='form-control'>";
        $div = "<div class='form-group'>
                    <label for='".$name."'>$name</label>
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