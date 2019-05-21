<?php
require_once  getcwd() . '/../config/ConnectionManager.php';

class Manager extends ConnectionManager
{

    public $create;
    public $read;
    public $update;
    public $delete;
    public function generate()
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => ""
        );
        try {

            $cnx = $this->connectSqlSrv();
            $sth = "SELECT * FROM tb_users WHERE user_name='" .$dt['user_name']."'";
            $sth = $cnx->prepare($sth);
            $sth->execute();
            if ($retval["r"] = $sth->rowCount()) 
            {
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
                {
                    if (password_verify($dt["clean_pass"], $row["hashed_pass"])) 
                    {
                        $_SESSION["user_name"]=$row["user_name"];
                        $retval["data"] = true;
                        break;
                    } else {
                        $retval["data"] = false;
                        break;
                    }
                }
            }
            else
            {
                $retval["data"] = false;
            }
        } catch (PDOExeption $e) {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    public function get_tables($dbname)
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
        } catch (Throwable $th) {
            throw $th;
        }
    }
    public function get_columns($dbname,$table)
    {
        $columns = array(
            'name'=>array(),
            'type'=>array(),
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
            }
        } catch (Throwable $th) {
            throw $th;
        }
        generate_crud($table, $columns);
    }
    private function generate_crud($table, $columns)
    {
        generate_create($table, $columns);
        generate_read($table, $columns);
        generate_update($table, $columns);
        generate_delete($table, $columns);
    }
    private function generate_create($table, $columns)
    {

    }
    private function generate_read($table, $columns)
    {

    }
    private function generate_update($table, $columns)
    {

    }
    private function generate_delete($table, $columns)
    {
        $id = $columns['name'][0];
        $delete = "DELETE FROM $table WHERE $id=$id"
    }
}
function PRUEBAS()
{
    $obj = new Manager;
    $dt = array('columns' => 'chars', 'clean_pass' => 'dcastro');
    $mostar = $obj->get_columns('sirdis','tb_users');
    print_r($mostar);
}
PRUEBAS();
 ?>