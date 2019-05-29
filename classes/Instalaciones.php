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
                                    $sth = 'SELECT * FROM tb_instalaciones';
                                    $sth = $cnx->prepare($sth);
                                    $sth->execute();
                                    $retval['r']['c'] = array(
             array('data' => 'id_instalacion', 'title' => 'id_instalacion'), array('data' => 'nocontrato', 'title' => 'nocontrato'), array('data' => 'noorden', 'title' => 'noorden'), array('data' => 'noordenrec', 'title' => 'noordenrec'), array('data' => 'id_actividad', 'title' => 'id_actividad'), array('data' => 'fotofolio', 'title' => 'fotofolio'), array('data' => 'id_empleado', 'title' => 'id_empleado'), array('data' => 'fecharegistro', 'title' => 'fecharegistro'), array('data' => 'pagoanttec', 'title' => 'pagoanttec'), array('data' => 'id_ciudad', 'title' => 'id_ciudad'), array('data' => 'id_empresa', 'title' => 'id_empresa'), array('data' => 'fechaasignacion', 'title' => 'fechaasignacion'), array('data' => 'id_estado', 'title' => 'id_estado'), array('data' => 'motivo', 'title' => 'motivo'), array('data' => 'rgu', 'title' => 'rgu'), array('data' => 'pagoantmon', 'title' => 'pagoantmon'), array('data' => 'semana', 'title' => 'semana'), array('data' => 'fotoniveles', 'title' => 'fotoniveles'), array('data' => 'fotoalcance', 'title' => 'fotoalcance'), array('data' => 'fotovelocidad', 'title' => 'fotovelocidad'), array('data' => 'fotopotencia', 'title' => 'fotopotencia'), array('data' => 'monitor', 'title' => 'monitor'), array('data' => 'fecharecableado', 'title' => 'fecharecableado'),
            array('data' => 'Actions', 'title' => 'Acciones')
        );
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $row['Actions'] = "<button class='btn btn-danger' onclick='deletex(" . $row['id_instalacion'] . ")'><i class='far fa-trash-alt'></i></button>
            <button class='btn btn-warning' onclick='editx(" . $row['id_instalacion'] . ")'><i class='far fa-edit'></i></button>";
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
                                $sth =  $cnx->prepare('SELECT *  FROM tb_instalaciones WHERE id_instalacion=:id_instalacion');
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
                                $sth =  $cnx->prepare('INSERT INTO tb_instalaciones(nocontrato,noorden,noordenrec,id_actividad,fotofolio,id_empleado,fecharegistro,pagoanttec,id_ciudad,id_empresa,fechaasignacion,id_estado,motivo,rgu,pagoantmon,semana,fotoniveles,fotoalcance,fotovelocidad,fotopotencia,monitor,fecharecableado)VALUES (:nocontrato,:noorden,:noordenrec,:id_actividad,:fotofolio,:id_empleado,:fecharegistro,:pagoanttec,:id_ciudad,:id_empresa,:fechaasignacion,:id_estado,:motivo,:rgu,:pagoantmon,:semana,:fotoniveles,:fotoalcance,:fotovelocidad,:fotopotencia,:monitor,:fecharecableado)');
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
                                $sth =  $cnx->prepare('DELETE FROM tb_instalaciones WHERE id_instalacion=:id_instalacion');
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
                                $sth =  $cnx->prepare('UPDATE tb_instalaciones SET nocontrato=:nocontrato,noorden=:noorden,noordenrec=:noordenrec,id_actividad=:id_actividad,fotofolio=:fotofolio,id_empleado=:id_empleado,fecharegistro=:fecharegistro,pagoanttec=:pagoanttec,id_ciudad=:id_ciudad,id_empresa=:id_empresa,fechaasignacion=:fechaasignacion,id_estado=:id_estado,motivo=:motivo,rgu=:rgu,pagoantmon=:pagoantmon,semana=:semana,fotoniveles=:fotoniveles,fotoalcance=:fotoalcance,fotovelocidad=:fotovelocidad,fotopotencia=:fotopotencia,monitor=:monitor,fecharecableado=:fecharecableado  WHERE id_instalacion=:id_instalacion');
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
                        case 'tb_actividad':
                            $retval['id'] = 'id_actividad';
                            $retval['nombre'] = 'actividad';
                            $retval['column'] = 'id_actividad-actividad';
                            $retval['query'] = "SELECT id_actividad,actividad FROM  $variable";
                            return   $retval;
                            break;case 'tb_empleados':
                            $retval['id'] = 'id_empleado';
                            $retval['nombre'] = 'identificador';
                            $retval['column'] = 'id_empleado-identificador';
                            $retval['query'] = "SELECT id_empleado,identificador FROM  $variable";
                            return   $retval;
                            break;case 'tb_ciudades':
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
                            break;case 'tb_estados':
                            $retval['id'] = 'id_estado';
                            $retval['nombre'] = 'estado';
                            $retval['column'] = 'id_estado-estado';
                            $retval['query'] = "SELECT id_estado,estado FROM  $variable";
                            return   $retval;
                            break;
                        default:
                            break;
                    }
                }
                        }
                    ?>