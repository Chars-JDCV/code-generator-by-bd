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
                                    $sth = 'SELECT * FROM tb_goods';
                                    
                                    $sth = $cnx->prepare($sth);
                                    $sth->execute();
                                    $retval['r']['c'] = array(
             array('data' => 'id_good', 'title' => 'id_good'), array('data' => 'id_sub_departament', 'title' => 'id_sub_departament'), array('data' => 'short_good_name', 'title' => 'short_good_name'), array('data' => 'full_good_name', 'title' => 'full_good_name'), array('data' => 'good_description', 'title' => 'good_description'), array('data' => 'good_brand', 'title' => 'good_brand'), array('data' => 'good_model', 'title' => 'good_model'), array('data' => 'sibisep_serial_code', 'title' => 'sibisep_serial_code'), array('data' => 'good_value', 'title' => 'good_value'), array('data' => 'date', 'title' => 'date'), array('data' => 'good_exists', 'title' => 'good_exists'), array('data' => 'quantity', 'title' => 'quantity'), array('data' => 'is_unregistered', 'title' => 'is_unregistered'),
            array('data' => 'Actions', 'title' => 'Acciones')
        );
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $row['Actions'] = "<button class='btn btn-danger' onclick='deletex(" . $row['id_good'] . ")'><i class='far fa-trash-alt'></i></button>
            <button class='btn btn-warning' onclick='editx(" . $row['id_good'] . ")'><i class='far fa-edit'></i></button>";
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
                                $sth =  $cnx->prepare('SELECT *  FROM tb_goods WHERE id_good=:id_good');
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