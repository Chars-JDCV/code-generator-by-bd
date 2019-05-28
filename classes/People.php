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
                                    $sth = 'SELECT * FROM tb_people_lendings';
                                    
                                    $sth = $cnx->prepare($sth);
                                    $sth->execute();
                                    $retval['r']['c'] = array(
             array('data' => 'id_person', 'title' => 'id_person'), array('data' => 'person_name', 'title' => 'person_name'), array('data' => 'card_id', 'title' => 'card_id'), array('data' => 'is_lent_to', 'title' => 'is_lent_to'),
            array('data' => 'Actions', 'title' => 'Acciones')
        );
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $row['Actions'] = "<button class='btn btn-danger' onclick='deletex(" . $row['id_person'] . ")'><i class='far fa-trash-alt'></i></button>
            <button class='btn btn-warning' onclick='editx(" . $row['id_person'] . ")'><i class='far fa-edit'></i></button>";
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
                                $sth =  $cnx->prepare('SELECT *  FROM tb_people_lendings WHERE id_person=:id_person');
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