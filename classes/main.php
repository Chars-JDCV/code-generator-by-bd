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
                                    $sth = 'SELECT * FROM tb_users';
                                    
                                    $sth = $cnx->prepare($sth);
                                    $sth->execute($dt);
                                    $retval['r']['c'] = array(
                                        array('data' => 'id_usuario', 'title' => 'ID Usuario'),
                                        array('data' => 'username', 'title' => 'Username'),
                                        array('data' => 'password', 'title' => 'Password'),
                                        array('data' => 'id_privilegio', 'title' => 'Privilegio'),
                                        array('data' => 'Actions', 'title' => 'Acciones')
                                    );
                                    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                                        $row['Actions'] = "<button class='btn btn-danger' onclick='deletex(" . $row['id_usuario'] . ")'><i class='far fa-trash-alt'></i></button>
                                        <button class='btn btn-warning' onclick='editx(" . $row['id_usuario'] . ")'><i class='far fa-edit'></i></button>";
                                        array_push($retval['r']['d'], $row);
                                    }
                        
                                    $retval['data'] = true;
                                } catch (PDOExeption $e) {
                                    $retval['error'] = true;
                                    $retval['r'] = $e;
                                }
                                return json_encode($retval);
                            }
                        
                        }
                    ?>