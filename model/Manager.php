<?php
require_once  getcwd() . '/../config/ConnectionManager.php';
require_once getcwd() . '/../model/generate-form.php';
require_once getcwd() . '/../model/generate-javascript.php';
require_once getcwd() . '/../model/generate-main.php';
require_once getcwd() . '/../model/generate-server.php';

class Manager extends ConnectionManager
{
    var $create="";
    var $read="";
    var $update="";
    var $delete="";

    public function get_database()
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r"=>array("c"=>array(),"d"=>array())
        );
        try
        {
            $retval["r"]["c"] = array(
            );
            $sth = "show databases";
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($sth);
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($retval["r"]['c'], $row);
            }
            $retval["data"] = true;
        }
        catch(PDOExeption $e)
        {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    public function get_database_tables($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r"=>array("c"=>array(),"d"=>array())
        );
        try
        {
            $sth = "SELECT TABLE_NAME
                FROM INFORMATION_SCHEMA.TABLES 
                WHERE TABLE_SCHEMA =:TABLE_SCHEMA";
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($sth);
            $sth->execute($dt);
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($retval["r"]['c'], $row);
            }
            $retval["data"] = true;
        }
        catch(PDOExeption $e)
        {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    public function get_database_columns($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r"=>array("c"=>array(),"d"=>array())
        );
        try
        {
            $sth = "SHOW COLUMNS FROM ".$dt['table']." FROM ".$dt['database'];
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($sth);
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($retval["r"]['c'], $row);
            }
            $retval["data"] = true;
        }
        catch(PDOExeption $e)
        {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    public function create_document_table($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r"=>array("c"=>array(),"d"=>array())
        );
        $columns = array(
            'name'=>array(),
            'type'=>array(),
            'key'=>array(),
        );
        try
        {
            $sth = "SHOW COLUMNS FROM ".$dt['table']." FROM ".$dt['database'];
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($sth);
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($columns['name'], $row['Field']);
                array_push($columns['type'], $row['Type']);
                array_push($columns['key'], $row['Key']);
            }
            $table = $dt['table'];
            $dbname = $dt['database'];
            $objform = new generate_form;
            $objjava = new generate_javascript;
            $objmain = new generate_main;
            $objserver = new generate_server;
            $objjava->generate_code_javascript($columns,$table,$dbname);
            $objform->generate_code_form_update($columns,$table);
            $objform->generate_code_form_create($columns,$table);
            $objform->generate_code_form_delete($columns,$table);
            $objform->generate_code_form_read($columns,$table);
            $objmain->generate_code_main($columns,$table);
            $objserver->generate_code_server($columns,$table,$dbname);
            $retval["data"] = true;
        }
        catch(PDOExeption $e)
        {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    public function generate($db_name)
    {
        try {
            $this->get_tables($db_name);
        } catch (PDOExeption $e) {
            throw $e;
        }
    }
    public function create_document($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r"=>array("c"=>array(),"d"=>array())
        );
        try
        {
            $sth = "SELECT TABLE_NAME
                FROM INFORMATION_SCHEMA.TABLES 
                WHERE TABLE_SCHEMA ='".$dt["database"]."'";
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($sth);
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($retval, $row['TABLE_NAME']);
                $this->get_columns($dt["database"],$row['TABLE_NAME']);
            }
            $retval["data"] = true;
        }
        catch(PDOExeption $e)
        {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    private function get_tables($dbname)
    {
        $table = array();
        try {
            $sth = "SELECT TABLE_NAME
                FROM INFORMATION_SCHEMA.TABLES 
                WHERE TABLE_SCHEMA ='".$dbname."'";
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($sth);
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($table, $row['TABLE_NAME']);
                $this->get_columns($dbname,$row['TABLE_NAME']);
            }
        } catch (PDOExeption $th) {
            throw $th;
        }
    }
    private function get_columns($dbname,$table)
    {
        $columns = array(
            'name'=>array(),
            'type'=>array(),
            'key'=>array(),
        );
        try {
            $sth = "SHOW COLUMNS FROM $table FROM $dbname";
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($sth);
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($columns['name'], $row['Field']);
                array_push($columns['type'], $row['Type']);
                array_push($columns['key'], $row['Key']);
            }
        } catch (PDOExeption $th) {
            throw $th;
        }
        $objform = new generate_form;
        $objjava = new generate_javascript;
        $objmain = new generate_main;
        $objserver = new generate_server;
        $objjava->generate_code_javascript($columns,$table,$dbname);
        $objform->generate_code_form_update($columns,$table);
        $objform->generate_code_form_create($columns,$table);
        $objform->generate_code_form_delete($columns,$table);
        $objform->generate_code_form_read($columns,$table);
        $objmain->generate_code_main($columns,$table);
        $objserver->generate_code_server($columns,$table,$dbname);
    }
}
function PRUEBAS()
{
    $obj = new Manager;
    $dt = array('database'=>'sirdis','table'=>'tb_chat');
    $mostar = $obj->create_document($dt);
    print_r($mostar);
    
}
PRUEBAS();
 ?>