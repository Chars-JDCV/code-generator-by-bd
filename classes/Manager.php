<?php
require_once  getcwd() . '/../config/ConnectionManager.php';
require_once getcwd() . '/generate-form.php';
require_once getcwd() . '/generate-javascript.php';
require_once getcwd() . '/generatemain.php';
require_once getcwd() . '/generate-server.php';

class Manager extends ConnectionManager
{
    var $create="";
    var $read="";
    var $update="";
    var $delete="";
    public function generate()
    {
        $db_name= 'sirdis';
        try {
            $this->get_tables($db_name);
        } catch (PDOExeption $e) {
            throw $e;
        }
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
        $objjava->generate_code_javascript($columns,$table);
        $objform->generate_code_form_update($columns,$table);
        $objform->generate_code_form_create($columns,$table);
        $objform->generate_code_form_delete($columns,$table);
        $objform->generate_code_form_read($columns,$table);
        $objmain->generate_code_main($columns,$table);
        $objserver->generate_code_server($columns,$table,$dbname);
    }
    private function generate_crud($table, $columns)
    {
        $this->generate_create($table, $columns['name']);
        $this->generate_read($table);
        $this->generate_update($table, $columns['name']);
        $this->generate_delete($table, $columns['name']);
    }
    private function generate_create($table, $columns)
    {
        $camp = "";
        $values = "";
        for ($i=1; $i < count($columns); $i++) { 
            if($i==count($columns) -1){
                $camp  = $camp . $columns[$i];
                $values = $values . ":".$columns[$i];
            }
            else {
                $camp  = $camp . $columns[$i].",";
                $values = $values . ":".$columns[$i].",";
            }
        }
        $create = "INSERT INTO $table($camp)VALUES ($values)";
        echo "<br>$create</br>";

    }
    private function generate_read($table)
    {
        $read = "SELECT * FROM $table";
        echo "<br>$read</br>";
    }
    private function generate_update($table, $columns)
    {
        $camps ="";
        $condition = "$columns[0]=:$columns[0]";
        for ($i=1; $i < count($columns); $i++) { 
            if($i==count($columns) -1){
                $camps =$camps . $columns[$i] . "=:".$columns[$i];
            }
            else {
                $camps =$camps . $columns[$i] . "=:".$columns[$i].",";
            }
        }
        $update = "UPDATE $table SET $camps  WHERE $condition";
        echo "<br>$update</br>";

    }
    private function generate_delete($table, $columns)
    {
        $id = $columns[0];
        $delete = "DELETE FROM $table WHERE $id=:$id";
        echo "<br>$delete</br>";
    }
}
function PRUEBAS()
{
    $obj = new Manager;
    $mostar = $obj->generate();
    print_r($mostar);
}
PRUEBAS();
 ?>