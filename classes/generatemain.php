<?php
header("Content-Type: text/html; charset=utf-8");
class generate_main
{

    private $form_code;
    public function generate_code_main($columns,$table)
    {
        if (strpos($table, '_')) {
            $tables = explode("_", $table);
            $table = $tables[1];
        }
        $table= ucwords(strtolower($table));
        $document = "<?php
                        if(isset($"."_POST['action']))
                        {
                            include_once '../classes/$table.php';
                            header('Content-Type: application/json; charset=utf-8;');
                            switch($"."_POST['action'])
                            {
                                case 'get':
                                $"."obj = new Manager();
                                echo $"."obj->get();
                                break;
                                case 'set':
                                $"."obj = new Manager();
                                echo $"."obj->set($"."_POST['dt']);
                                break;
                                case 'del':
                                $"."obj = new Manager();
                                echo $"."obj->delete($"."_POST['dt']);
                                break;
                                case 'update':
                                $"."obj = new Manager();
                                echo $"."obj->update($"."_POST['dt']);
                                break;
                                case 'consult':
                                $"."obj = new Manager();
                                echo $"."obj->consultas($"."_POST['dt']);
                                break;
                                case 'getselect':
                                $"."obj = new Manager();
                                echo $"."obj->getselect($"."_POST['dt']);
                                break;
                            }
                        }
                        ?>";
        $this->create_folder_and_main($table,$document);
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
        $file = fopen("$folder/main.php", "w") or die("No se puede abrir/crear el archivo!");
        fwrite($file, $document);
        fclose($file);
    }
}
 ?>