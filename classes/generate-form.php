<?php
class generate_form
{

    private $form_code;
    public function generate_code_form($columns)
    {
        $db_name= 'sirdis';
        $form_code="
                <form id=''>
					<div class='form-group'>
						<label for='hostname'>Hostname</label>
						<input type='text' class='form-control' id='hostname' placeholder='localhost'>
					</div>
					<div class='form-group'>
						<label for='dbname'>Data Base Name</label>
						<input type='text' class='form-control' id='dbname' placeholder='SIRDIS'>
					</div>
					<div class='form-group'>
						<label for='username'>User Name</label>
						<input type='text' class='form-control' id='username' placeholder='root'>
					</div>
					<div class='form-group'>
						<label for='password'>Password</label>
						<input type='password' class='form-control' id='password' placeholder=''>
					</div>
					<button type='submit' class='btn btn-primary'>Change Data</button>
				</form>";
        try {
            //$this->generate();
        } catch (PDOExeption $e) {
            throw $e;
        }
        echo $columns;
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
        } catch (PDOExeption $th) {
            throw $th;
        }
        $this->generate_crud($table, $columns);
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
    }
    private function generate_read($table)
    {
        $read = "SELECT * FROM $table";
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
        $update = "UPDATE $table SET $camps WHERE $condition";
    }
    private function generate_delete($table, $columns)
    {
        $id = $columns[0];
        $delete = "DELETE FROM $table WHERE $id=:$id";
    }
}
 ?>