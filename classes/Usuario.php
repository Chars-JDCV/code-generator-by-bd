<?php
require_once  getcwd() . '/../config/ConnectionManager.php';

class Manager extends ConnectionManager
{

    public function set($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => ""
        );
        try {
            $dt['hashed_pass'] = password_hash($dt['clean_pass'], PASSWORD_DEFAULT);
            $cnx = $this->connectSqlSrv();
            $sth = "INSERT INTO tb_users(user_name, full_name, hashed_pass, clean_pass) 
                    VALUES (:user_name, :full_name, :hashed_pass, :clean_pass)";
            $sth = $cnx->prepare($sth);
            $sth->execute($dt);
            if ($retval["r"] = $sth->rowCount()) {
                $retval["data"] = true;
            }
        } catch (PDOExeption $e) {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
}
function PRUEBAS()
{
    $obj = new Manager;
    $dt = array('user_name' => 'chars','full_name' =>"David Castro",'hashed_pass'=>'', 'clean_pass' => 'dcastro');
    $mostar = $obj->set($dt);
    print_r($mostar);
}
//PRUEBAS();
 ?>