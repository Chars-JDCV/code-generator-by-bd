<div class='modal' id='modal_delete' tabindex='-1' role='dialog'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h3 class='modal-title'>Eliminar Registro</h3>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'> 
                                    
            <form id='tb_empleados_delete' name='tb_empleados_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_empleado_delete' name= 'id_empleado_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='identificador_delete'>identificador</label>
                    <input type='text' id= 'identificador_delete' name= 'identificador_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='nombre_delete'>nombre</label>
                    <input type='text' id= 'nombre_delete' name= 'nombre_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='direccion_delete'>direccion</label>
                    <input type='text' id= 'direccion_delete' name= 'direccion_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_ciudad_delete'>id_ciudad</label>
                    <select  id= 'id_ciudad_delete' name= 'id_ciudad_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_empresa_delete'>id_empresa</label>
                    <select  id= 'id_empresa_delete' name= 'id_empresa_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='user_delete'>user</label>
                    <input type='text' id= 'user_delete' name= 'user_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='password_delete'>password</label>
                    <input type='text' id= 'password_delete' name= 'password_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='passw_delete'>passw</label>
                    <input type='text' id= 'passw_delete' name= 'passw_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_privilegio_delete'>id_privilegio</label>
                    <select  id= 'id_privilegio_delete' name= 'id_privilegio_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='foto_delete'>foto</label>
                    <input type='text' id= 'foto_delete' name= 'foto_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='activo_delete'>activo</label>
                    <input type='number' id= 'activo_delete' name= 'activo_delete' class='form-control'>
                </div>
                <div class='modal-footer'>
                    <button id='btn_delete' class='btn btn-primary'>Eliminar</button>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                </div>
            </form>
                                </div>
                            </div>
                        </div>
                    </div>