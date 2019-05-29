<?php
                        require_once  getcwd() . '/../config/ConnectionManager.php';
                        class Manager extends ConnectionManager
                        {
                                  public function get()
                            {
                                $retval = array(
                                    'data' => false,
                                    'error' => false,
                                    'r' => array('c' => array(), 'd' => array())
                                );
                        
                                try {
                        
                                    $cnx = $this->connectSqlSrv();
                                    $sth = 'SELECT * FROM tb_empleados';
                                    $sth = $cnx->prepare($sth);
                                    $sth->execute();
                                    $retval['r']['c'] = array(
             array('data' => 'id_empleado', 'title' => 'id_empleado'), array('data' => 'identificador', 'title' => 'identificador'), array('data' => 'nombre', 'title' => 'nombre'), array('data' => 'direccion', 'title' => 'direccion'), array('data' => 'id_ciudad', 'title' => 'id_ciudad'), array('data' => 'id_empresa', 'title' => 'id_empresa'), array('data' => 'user', 'title' => 'user'), array('data' => 'password', 'title' => 'password'), array('data' => 'passw', 'title' => 'passw'), array('data' => 'id_privilegio', 'title' => 'id_privilegio'), array('data' => 'foto', 'title' => 'foto'), array('data' => 'activo', 'title' => 'activo'),
            array('data' => 'Actions', 'title' => 'Acciones')
        );
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $row['Actions'] = "<button class='btn btn-danger' onclick='deletex(" . $row['id_empleado'] . ")'><i class='far fa-trash-alt'></i></button>
            <button class='btn btn-warning' onclick='editx(" . $row['id_empleado'] . ")'><i class='far fa-edit'></i></button>";
            array_push($retval['r']['d'], $row);
        }
                                    $retval['data'] = true;
                                } catch (PDOExeption $e) {
                                    $retval['error'] = true;
                                    $retval['r'] = $e;
                                }
                                return json_encode($retval);
                            }
                        
                               public function consultas( $dt)
                        {
                            $retval = array(
                                'data' => false,
                                'error' => false,
                                'r' => array('d' => array())
                            );
                            try {
                                $cnx =  $this->connectSqlSrv();
                                $sth =  $cnx->prepare('SELECT *  FROM tb_empleados WHERE id_empleado=:id_empleado');
                                $sth->execute( $dt);
                                while ( $row =  $sth->fetch(PDO::FETCH_ASSOC)) {
                                    array_push( $retval['r']['d'],  $row);
                                }
                                $retval['data'] = true;
                            } catch (PDOExeption  $e) {
                                $retval['error'] = true;
                                $retval['r'] =  $e;
                            }
                            return json_encode( $retval);
                        }
                               public function set( $dt)
                        {
                            $retval = array(
                                'data' => false,
                                'error' => false,
                                'r' => array('d' => array())
                            );
                            try {
                                
                                $cnx =  $this->connectSqlSrv();
                                $sth =  $cnx->prepare('INSERT INTO tb_empleados(identificador,nombre,direccion,id_ciudad,id_empresa,user,password,passw,id_privilegio,foto,activo)VALUES (:identificador,:nombre,:direccion,:id_ciudad,:id_empresa,:user,:password,:passw,:id_privilegio,:foto,:activo)');
                                $sth->execute( $dt);
                                if ($retval['r'] = $sth->rowCount()) {
                                    $retval['data'] = true;
                                } else {
                                    $retval['error'] = true;
                                    $retval['r'] = 'Registro Existente';
                                }
                            } catch (PDOExeption  $e) {
                                $retval['error'] = true;
                                $retval['r'] =  $e;
                            }
                            return json_encode( $retval);
                        }
                               public function delete( $dt)
                        {
                            $retval = array(
                                'data' => false,
                                'error' => false,
                                'r' => array('d' => array())
                            );
                            try {
                                $cnx =  $this->connectSqlSrv();
                                $sth =  $cnx->prepare('DELETE FROM tb_empleados WHERE id_empleado=:id_empleado');
                                $sth->execute( $dt);
                                if ($retval['r'] = $sth->rowCount()) {
                                    $retval['data'] = true;
                                }
                            } catch (PDOExeption  $e) {
                                $retval['error'] = true;
                                $retval['r'] =  $e;
                            }
                            return json_encode( $retval);
                        }
                               public function update( $dt)
                        {
                            $retval = array(
                                'data' => false,
                                'error' => false,
                                'r' => array('d' => array())
                            );
                            try {
                                
                                $cnx =  $this->connectSqlSrv();
                                $sth =  $cnx->prepare('UPDATE tb_empleados SET identificador=:identificador,nombre=:nombre,direccion=:direccion,id_ciudad=:id_ciudad,id_empresa=:id_empresa,user=:user,password=:password,passw=:passw,id_privilegio=:id_privilegio,foto=:foto,activo=:activo  WHERE id_empleado=:id_empleado');
                                $sth->execute( $dt);
                                if ($retval['r'] = $sth->rowCount()) {
                                    $retval['data'] = true;
                                }
                            } catch (PDOExeption  $e) {
                                $retval['error'] = true;
                                $retval['r'] =  $e;
                            }
                            return json_encode( $retval);
                        }
                            public function getselect( $dt)
                    {
                        $query =  $this->setQuery( $dt);
                        $retval = array(
                            'data' => false,
                            'error' => false,
                            'r' => array('c' => array(), 'd' => array())
                        );
                        try {
                            $cnx =  $this->connectSqlSrv();
                            $sth =  $cnx->prepare( $query['query']);
                            $sth->execute();
                            $retval['r']['c'] = array(
                                array('data' =>  $query['id'], 'title' =>  $query['nombre'])
                            );
                            while ( $row =  $sth->fetch(PDO::FETCH_ASSOC)) {
                                array_push( $retval['r']['d'],  $row);
                            }
                            $retval['data'] = true;
                        } catch (PDOExeption  $e) {
                            $retval['error'] = true;
                            $retval['r'] =  $e;
                        }
                        return json_encode( $retval);
                    }
                            public function setQuery( $variable)
                {
                    $retval = array(
                        'id' => '',
                        'nombre' => '',
                        'query' => ''
                    );
                    switch ( $variable) {
                        case 'tb_ciudades':
                            $retval['id'] = 'id_ciudad';
                            $retval['nombre'] = 'ciudad';
                            $retval['column'] = 'id_ciudad-ciudad';
                            $retval['query'] = "SELECT id_ciudad,ciudad FROM  $variable";
                            return   $retval;
                            break;case 'tb_empresas':
                            $retval['id'] = 'id_empresa';
                            $retval['nombre'] = 'empresa';
                            $retval['column'] = 'id_empresa-empresa';
                            $retval['query'] = "SELECT id_empresa,empresa FROM  $variable";
                            return   $retval;
                            break;case 'tb_privilegios':
                            $retval['id'] = 'id_privilegio';
                            $retval['nombre'] = 'privilegio';
                            $retval['column'] = 'id_privilegio-privilegio';
                            $retval['query'] = "SELECT id_privilegio,privilegio FROM  $variable";
                            return   $retval;
                            break;
                        default:
                            break;
                    }
                }
                        }
                    ?>