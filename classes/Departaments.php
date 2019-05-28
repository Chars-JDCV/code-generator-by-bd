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
                                    $sth = 'SELECT * FROM tb_departaments';
                                    $sth = $cnx->prepare($sth);
                                    $sth->execute();
                                    $retval['r']['c'] = array(
             array('data' => 'id_departament', 'title' => 'id_departament'), array('data' => 'short_dept_name', 'title' => 'short_dept_name'), array('data' => 'full_dept_name', 'title' => 'full_dept_name'), array('data' => 'id_chief', 'title' => 'id_chief'),
            array('data' => 'Actions', 'title' => 'Acciones')
        );
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $row['Actions'] = "<button class='btn btn-danger' onclick='deletex(" . $row['id_departament'] . ")'><i class='far fa-trash-alt'></i></button>
            <button class='btn btn-warning' onclick='editx(" . $row['id_departament'] . ")'><i class='far fa-edit'></i></button>";
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
                                $sth =  $cnx->prepare('SELECT *  FROM tb_departaments WHERE id_departament=:id_departament');
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
                                $sth =  $cnx->prepare('INSERT INTO tb_departaments(short_dept_name,full_dept_name,id_chief)VALUES (:short_dept_name,:full_dept_name,:id_chief)');
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
                                $sth =  $cnx->prepare('DELETE FROM tb_departaments WHERE id_departament=:id_departament');
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
                                $sth =  $cnx->prepare('UPDATE tb_departaments SET short_dept_name=:short_dept_name,full_dept_name=:full_dept_name,id_chief=:id_chief  WHERE id_departament=:id_departament');
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
                        case 'tb_chiefs':
                            $retval['id'] = 'id_chief';
                            $retval['nombre'] = 'id_title';
                            $retval['column'] = 'id_chief-id_title';
                            $retval['query'] = "SELECT id_chief,id_title FROM  $variable";
                            return   $retval;
                            break;
                        default:
                            break;
                    }
                }
                        }
                    ?>