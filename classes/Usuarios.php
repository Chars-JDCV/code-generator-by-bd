<?php
require_once  getcwd() . '/../config/ConnectionManager.php';

class Manager extends ConnectionManager
{

    public function get()
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => array("c" => array(), "d" => array())
        );

        try {

            $cnx = $this->connectSqlSrv();
            $sth = "CALL sp_get_usuario();";
            $sth = $cnx->prepare($sth);
            $sth->execute();
            $retval["r"]["c"] = array(
                array("data" => "id_usuario", "title" => "ID Usuario"),
                array("data" => "username", "title" => "Username"),
                array("data" => "password", "title" => "Password"),
                array("data" => "id_privilegio", "title" => "Privilegio"),
                array("data" => "Actions", "title" => "Acciones")
            );
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $row["Actions"] = "<button class='btn btn-danger' onclick='deletex(" . $row["id_usuario"] . ")'><i class='far fa-trash-alt'></i></button>
                <button class='btn btn-warning' onclick='editx(" . $row["id_usuario"] . ")'><i class='far fa-edit'></i></button>";
                array_push($retval["r"]["d"], $row);
            }

            $retval["data"] = true;
        } catch (PDOExeption $e) {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }

    public function set($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => ""
        );
        try {
            $cnx = $this->connectSqlSrv();
            $estatus = array(json_decode($this->VerificarRegistros($dt), true));
            if (empty($estatus[0]['r']['d'][0])) {
                $sth = $cnx->prepare("CALL sp_insert_usuario(:username,:password,:id_privilegio);");
                $dt['password'] = password_hash($dt['password'], PASSWORD_DEFAULT);
                $sth->execute($dt);
                if ($retval["r"] = $sth->rowCount()) {
                    $retval["data"] = true;
                }
            } else {
                $retval["error"] = true;
                $retval["r"] = 'Registro Existente';
            }
        } catch (PDOExeption $e) {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }

    public function delete($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => ""
        );

        try {
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare("CALL sp_delete_usuario(:id_usuario);");
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
    public function update($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => ""
        );

        try {
            $pass = $this->verificarPassword($dt);
            if (password_verify($dt['password'], $pass)) {
                $estatus = array(json_decode($this->VerificarRegistros($dt), true));
                if (empty($estatus[0]['r']['d'][0])) {
                    $cnx = $this->connectSqlSrv();
                    $sth = $cnx->prepare("CALL sp_update_usuario(:username,:password,:id_privilegio,:id_usuario);");
                    $sth->execute($dt);
                    if ($retval["r"] = $sth->rowCount()) {
                        $retval["data"] = true;
                    }
                } else {
                    $retval["error"] = true;
                    $retval["r"] = 'Registro Existente';
                }
            } else {
                $estatus = array(json_decode($this->VerificarRegistros($dt), true));
                if (empty($estatus[0]['r']['d'][0])) {
                    $cnx = $this->connectSqlSrv();
                    $sth = $cnx->prepare("CALL sp_update_usuario(:username,:password,:id_privilegio,:id_usuario);");
                    $dt['password'] = password_hash($dt['password'], PASSWORD_DEFAULT);
                    $sth->execute($dt);
                    if ($retval["r"] = $sth->rowCount()) {
                        $retval["data"] = true;
                    }
                } else {
                    if ($estatus[0]['r']['d'][0]['id_usuario'] == $dt['id_usuario']) {
                        # code...
                        $cnx = $this->connectSqlSrv();
                        $sth = $cnx->prepare("CALL sp_update_usuario(:username,:password,:id_privilegio,:id_usuario);");
                        $dt['password'] = password_hash($dt['password'], PASSWORD_DEFAULT);
                        $sth->execute($dt);
                        if ($retval["r"] = $sth->rowCount()) {
                            $retval["data"] = true;
                        }
                    }
                    else{
                        $retval["error"] = true;
                        $retval["r"] = 'Registro Existente';
                    }
                }
            }
        } catch (PDOExeption $e) {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    public function VerificarRegistros($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => array("d" => array())
        );

        try {
            $cnx = $this->connectSqlSrv();
            if (empty($dt['id_usuario'])) {
                $dt["id_usuario"] = 0;
                $dt["accion"] = 0;
            } else {
                $dt["accion"] = 0;
            }
            $sth = $cnx->prepare("CALL sp_buscar_usuario('" . $dt['username'] . "','" . $dt['id_usuario'] . "','" . $dt['id_privilegio'] . "','" . $dt['accion'] . "') ;");
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                array_push($retval["r"]["d"], $row);
            }
            $retval["data"] = true;
        } catch (PDOExeption $e) {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    public function setQuery($variable)
    {
        $retval = array(
            "id" => '',
            "nombre" => '',
            'query' => ''
        );
        switch ($variable) {
            case 'privilegios':
                $retval["id"] = 'id_privilegio';
                $retval["nombre"] = 'privilegio';
                $retval["column"] = 'id_privilegio-privilegio';
                $retval["query"] = "CALL sp_set_select('tb_privilegios','" . $retval["column"] . "')";
                return  $retval;
                break;
            default:
                break;
        }
    }
    public function verificarPassword($dt)
    {
        try {
            $cnx = $this->connectSqlSrv();
            $dt["accion"] = 1;
            $sth = $cnx->prepare("CALL sp_buscar_usuario('" . $dt['username'] . "','" . $dt['id_usuario'] . "','" . $dt['id_privilegio'] . "','" . $dt['accion'] . "') ;");
            $sth->execute($dt);
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                return $row['password'];
            }
        } catch (PDOExeption $e) {
            return $e;
        }
    }
    public function consultas($dt)
    {
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => array("d" => array())
        );

        try {
            if (empty($dt['username'])) {
                # code...
                $dt['username'] = 0;
                $dt['id_privilegio'] = 0;
                $dt['accion'] = 2;
            }
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare("CALL sp_buscar_usuario('" . $dt['username'] . "','" . $dt['id_usuario'] . "','" . $dt['id_privilegio'] . "','" . $dt['accion'] . "') ;");
            $sth->execute($dt);
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                array_push($retval["r"]["d"], $row);
            }
            $retval["data"] = true;
        } catch (PDOExeption $e) {
            $retval["error"] = true;
            $retval["r"] = $e;
        }
        return json_encode($retval);
    }
    public function getselect($dt)
    {
        $query = $this->setQuery($dt);
        $retval = array(
            "data" => false,
            "error" => false,
            "r" => array("c" => array(), "d" => array())
        );
        try {
            $cnx = $this->connectSqlSrv();
            $sth = $cnx->prepare($query['query']);
            $sth->execute();
            $retval["r"]["c"] = array(
                array("data" => $query['id'], "title" => $query['nombre'])
            );
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                array_push($retval["r"]["d"], $row);
            }
            $retval["data"] = true;
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
    $dt = array('id_usuario' => '1', 'username' => 'dcastroa', 'password' => 'capsulitos', 'id_privilegio' => '1');
    $mostar = $obj->update($dt);
    print_r($mostar);
}
//PRUEBAS();
 ?>