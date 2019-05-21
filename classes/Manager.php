<?php
require_once  getcwd() . '/../config/ConnectionManager.php';

class Manager extends ConnectionManager
{

    public function get($dt)
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
}
function PRUEBAS()
{
    $obj = new Manager;
    $dt = array('user_name' => 'chars', 'clean_pass' => 'dcastro');
    $mostar = $obj->get($dt);
    print_r($mostar);
}
//PRUEBAS();
 ?>