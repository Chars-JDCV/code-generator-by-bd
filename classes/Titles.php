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
                                    $sth = 'SELECT * FROM tb_titles';
                                    
                                    $sth = $cnx->prepare($sth);
                                    $sth->execute();
                                    $retval['r']['c'] = array(
             array('data' => 'id_title', 'title' => 'id_title'), array('data' => 'title', 'title' => 'title'),
            array('data' => 'Actions', 'title' => 'Acciones')
        );
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $row['Actions'] = "<button class='btn btn-danger' onclick='deletex(" . $row['id_title'] . ")'><i class='far fa-trash-alt'></i></button>
            <button class='btn btn-warning' onclick='editx(" . $row['id_title'] . ")'><i class='far fa-edit'></i></button>";
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
                                $sth =  $cnx->prepare('SELECT *  FROM tb_titles WHERE id_title=:id_title');
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
                        }
                    ?>