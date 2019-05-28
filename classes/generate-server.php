<?php
require_once  getcwd() . '/../config/ConnectionManager.php';

header("Content-Type: text/html; charset=utf-8");
class generate_server extends ConnectionManager
{
    public function generate_code_server($columns,$table,$database)
    {
        $get ="";
        $read = $this->generate_read($table);
        $get = $this->get_get($columns,$read);
        $set = $this->get_set($this->generate_create($table, $columns),$columns);
        $consult = $this->get_consult($this->generate_consult($table, $columns));
        $delete = $this->get_delete($this->generate_delete($table, $columns));
        $update = $this->get_update($this->generate_update($table, $columns),$columns);
        $getSelect = $this->get_getselect();
        $getQuery = $this->get_setQuery($database,$columns);
        $document = "<?php
                        require_once  getcwd() . '/../config/ConnectionManager.php';
                        class Manager extends ConnectionManager
                        {
                            $get
                            $consult
                            $set
                            $delete
                            $update
                            $getSelect
                            $getQuery
                        }
                    ?>";
        $this->create_folder_and_main($table,$document);
    }
    private function generate_create($table, $columns)
    {
        $camp = "";
        $values = "";
        for ($i=1; $i < count($columns['name']); $i++) { 
            if($i==count($columns['name']) -1){
                $camp  = $camp . $columns['name'][$i];
                $values = $values . ":".$columns['name'][$i];
            }
            else {
                $camp  = $camp . $columns['name'][$i].",";
                $values = $values . ":".$columns['name'][$i].",";
            }
        }
        $values = "INSERT INTO $table($camp)VALUES ($values)";
        return $values;
    }
    private function generate_read($table)
    {
        $read = "SELECT * FROM $table";
       return $read;
    }
    private function generate_update($table, $columns)
    {
        $camps ="";
        $name = $columns['name'][0];
        $columns = $columns['name'];
        $condition = "$name=:$name";
        for ($i=1; $i < count($columns); $i++) { 
            if($i==count($columns) -1){
                $camps =$camps . $columns[$i] . "=:".$columns[$i];
            }
            else {
                $camps =$camps . $columns[$i] . "=:".$columns[$i].",";
            }
        }
        return $update = "UPDATE $table SET $camps  WHERE $condition";

    }
    private function generate_delete($table, $columns)
    {
        $id = $columns['name'][0];
        return $delete = "DELETE FROM $table WHERE $id=:$id";
    }
    private function generate_consult($table, $columns)
    {
        $id = $columns['name'][0];
        return $delete = "SELECT *  FROM $table WHERE $id=:$id";
    }
    public function get_get($columns,$query)
    {
        
        $columns_name = $this->get_columns_name($columns);
        $document = "      public function get()
                            {
                                $"."retval = array(
                                    'data' => false,
                                    'error' => false,
                                    'r' => array('c' => array(), 'd' => array())
                                );
                        
                                try {
                        
                                    $"."cnx = $"."this->connectSqlSrv();
                                    $"."sth = '$query';
                                    $"."sth = $"."cnx->prepare($"."sth);
                                    $"."sth->execute();
                                    $columns_name
                                    $"."retval['data'] = true;
                                } catch (PDOExeption $"."e) {
                                    $"."retval['error'] = true;
                                    $"."retval['r'] = $"."e;
                                }
                                return json_encode($"."retval);
                            }
                        ";
                        return $document;
    }
    public function get_consult($query)
    {
        $document = "   public function consultas( $"."dt)
                        {
                            $"."retval = array(
                                'data' => false,
                                'error' => false,
                                'r' => array('d' => array())
                            );
                            try {
                                $"."cnx =  $"."this->connectSqlSrv();
                                $"."sth =  $"."cnx->prepare('$query');
                                $"."sth->execute( $"."dt);
                                while ( $"."row =  $"."sth->fetch(PDO::FETCH_ASSOC)) {
                                    array_push( $"."retval['r']['d'],  $"."row);
                                }
                                $"."retval['data'] = true;
                            } catch (PDOExeption  $"."e) {
                                $"."retval['error'] = true;
                                $"."retval['r'] =  $"."e;
                            }
                            return json_encode( $"."retval);
                        }";
        return $document;
    }
    public function get_set($query,$columns)
    {
        $campos_fechas =$this->get_fecha($columns);
        $document = "   public function set( $"."dt)
                        {
                            $"."retval = array(
                                'data' => false,
                                'error' => false,
                                'r' => array('d' => array())
                            );
                            try {
                                $campos_fechas
                                $"."cnx =  $"."this->connectSqlSrv();
                                $"."sth =  $"."cnx->prepare('$query');
                                $"."sth->execute( $"."dt);
                                if ($"."retval['r'] = $"."sth->rowCount()) {
                                    $"."retval['data'] = true;
                                } else {
                                    $"."retval['error'] = true;
                                    $"."retval['r'] = 'Registro Existente';
                                }
                            } catch (PDOExeption  $"."e) {
                                $"."retval['error'] = true;
                                $"."retval['r'] =  $"."e;
                            }
                            return json_encode( $"."retval);
                        }";
        return $document;
    }
    public function get_delete($query)
    {
        $document = "   public function delete( $"."dt)
                        {
                            $"."retval = array(
                                'data' => false,
                                'error' => false,
                                'r' => array('d' => array())
                            );
                            try {
                                $"."cnx =  $"."this->connectSqlSrv();
                                $"."sth =  $"."cnx->prepare('$query');
                                $"."sth->execute( $"."dt);
                                if ($"."retval['r'] = $"."sth->rowCount()) {
                                    $"."retval['data'] = true;
                                }
                            } catch (PDOExeption  $"."e) {
                                $"."retval['error'] = true;
                                $"."retval['r'] =  $"."e;
                            }
                            return json_encode( $"."retval);
                        }";
        return $document;
    }
    public function get_update($query,$columns)
    {
        $campos_fechas =$this->get_fecha($columns);
        $document = "   public function update( $"."dt)
                        {
                            $"."retval = array(
                                'data' => false,
                                'error' => false,
                                'r' => array('d' => array())
                            );
                            try {
                                $campos_fechas
                                $"."cnx =  $"."this->connectSqlSrv();
                                $"."sth =  $"."cnx->prepare('$query');
                                $"."sth->execute( $"."dt);
                                if ($"."retval['r'] = $"."sth->rowCount()) {
                                    $"."retval['data'] = true;
                                }
                            } catch (PDOExeption  $"."e) {
                                $"."retval['error'] = true;
                                $"."retval['r'] =  $"."e;
                            }
                            return json_encode( $"."retval);
                        }";
        return $document;
    }
    public function get_getselect()
    {
        $document= "public function getselect( $"."dt)
                    {
                        $"."query =  $"."this->setQuery( $"."dt);
                        $"."retval = array(
                            'data' => false,
                            'error' => false,
                            'r' => array('c' => array(), 'd' => array())
                        );
                        try {
                            $"."cnx =  $"."this->connectSqlSrv();
                            $"."sth =  $"."cnx->prepare( $"."query['query']);
                            $"."sth->execute();
                            $"."retval['r']['c'] = array(
                                array('data' =>  $"."query['id'], 'title' =>  $"."query['nombre'])
                            );
                            while ( $"."row =  $"."sth->fetch(PDO::FETCH_ASSOC)) {
                                array_push( $"."retval['r']['d'],  $"."row);
                            }
                            $"."retval['data'] = true;
                        } catch (PDOExeption  $"."e) {
                            $"."retval['error'] = true;
                            $"."retval['r'] =  $"."e;
                        }
                        return json_encode( $"."retval);
                    }";
                return $document;
    }
    public function get_setQuery($database,$columns)
    {
        $case ="";
        for ($i=1; $i < count($columns['name']); $i++) { 
            if($columns['key'][$i]=='MUL'){
                $case = $case . $this->get_id_name($database,$columns['name'][$i]);
            }
        }
        $document = "public function setQuery( $"."variable)
                {
                    $"."retval = array(
                        'id' => '',
                        'nombre' => '',
                        'query' => ''
                    );
                    switch ( $"."variable) {
                        $case
                        default:
                            break;
                    }
                }";
        return $document;
    }
    public function get_id_name($dbname,$name)
    {
            $columns = array(
                'name'=>array(),
                'type'=>array(),
                'key'=>array(),
            );
            $tablename = "";
            $document = "";
            $sth = "SELECT TABLE_NAME FROM information_schema.columns WHERE table_schema='$dbname' AND COLUMN_KEY ='PRI' AND COLUMN_NAME = '$name'";
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($sth);
            $sth->execute();
            if ($sth->rowCount()) {
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
                {
                    $tablename =$row['TABLE_NAME'];
                }
                echo $tablename;
                $sth = "SHOW COLUMNS FROM $tablename FROM $dbname";                
                $cnx = $this->connectSqlSrv();
                $sth = $cnx->prepare($sth);
                $sth->execute();
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
                {
                    array_push($columns['name'], $row['Field']);
                    array_push($columns['type'], $row['Type']);
                    array_push($columns['key'], $row['Key']);
                }
                $id = $columns['name'][0];
                $name = $columns['name'][1];
                $document = "case '$tablename':
                            $"."retval['id'] = '$id';
                            $"."retval['nombre'] = '$name';
                            $"."retval['column'] = '$id-$name';
                            $"."retval['query'] = \"SELECT $id,$name FROM  $"."variable\";
                            return   $"."retval;
                            break;";
            }
            
            return $document;
    }
    public function get_fecha($columns)
    {
        $campos_fechas="";
        for ($i=0; $i < count($columns['name']); $i++) { 
            if ($this->get_type($columns['key'][$i])=='date') {
                $name = $columns['name'][$i];
                $campos_fechas= $campos_fechas."$"."date = $"."dt['$name'];
                if (preg_match(\"/^(0[1-9]|[1-2][0-9]|3[0-1])(\/|-|.)(0[1-9]|1[0-2])(\/|-|.)[0-9]{4}$/\", $"."date)) {
                    $"."date = substr($"."date, 6, 4) . substr($"."date, 5, 1) . substr($"."date, 3, 2) . substr($"."date, 2, 1) . substr($"."date, 0, 2);
                    }
                $"."dt['$name'] = $"."date;";
            }
        }
        return $campos_fechas;
    }
    public function get_columns_name($columns)
    {
        $values="";
        $col = "";
        for ($i=0; $i < count($columns['name']); $i++) { 
                $name = $columns['name'][$i];
                $col= $col." array('data' => '$name', 'title' => '$name'),";
        }
        $id = $columns['name'][0];
        $values="$"."retval['r']['c'] = array(
            $col
            array('data' => 'Actions', 'title' => 'Acciones')
        );
        while ($"."row = $"."sth->fetch(PDO::FETCH_ASSOC)) {
            $"."row['Actions'] = \"<button class='btn btn-danger' onclick='deletex(\" . $"."row['$id'] . \")'><i class='far fa-trash-alt'></i></button>
            <button class='btn btn-warning' onclick='editx(\" . $"."row['$id'] . \")'><i class='far fa-edit'></i></button>\";
            array_push($"."retval['r']['d'], $"."row);
        }";
        return $values;
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
                $type = 'date';
                break;
            case 'TIMESTAMP':
                $type = 'date';
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
    public function create_folder_and_main($table,$document)
    {
        if (strpos($table, '_')) {
            $tables = explode("_", $table);
            $table = $tables[1];
        }
        $folder = "../classes";
        $table= ucwords(strtolower($table));
        $file = fopen("$folder/$table.php", "w") or die("No se puede abrir/crear el archivo!");
        fwrite($file, $document);
        fclose($file);
    }
}
 ?>