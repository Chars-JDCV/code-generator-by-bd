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
                                    $sth = 'SELECT * FROM tb_chat';
                                    $sth = $cnx->prepare($sth);
                                    $sth->execute();
                                    $retval['r']['c'] = array(
             array('data' => 'id', 'title' => 'id'), array('data' => 'sender', 'title' => 'sender'), array('data' => 'addressee', 'title' => 'addressee'), array('data' => 'msg', 'title' => 'msg'), array('data' => 'date', 'title' => 'date'),
            array('data' => 'Actions', 'title' => 'Acciones')
        );
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $row['Actions'] = "<button class='btn btn-danger' onclick='deletex(" . $row['id'] . ")'><i class='far fa-trash-alt'></i></button>
            <button class='btn btn-warning' onclick='editx(" . $row['id'] . ")'><i class='far fa-edit'></i></button>";
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
                                $sth =  $cnx->prepare('SELECT *  FROM tb_chat WHERE id=:id');
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
                                $sth =  $cnx->prepare('INSERT INTO tb_chat(sender,addressee,msg,date)VALUES (:sender,:addressee,:msg,:date)');
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
                                $sth =  $cnx->prepare('DELETE FROM tb_chat WHERE id=:id');
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
                                $sth =  $cnx->prepare('UPDATE tb_chat SET sender=:sender,addressee=:addressee,msg=:msg,date=:date  WHERE id=:id');
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
                        
                        default:
                            break;
                    }
                }
                        }
                    ?>