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
                                    
            <form id='tb_users_delete' name='tb_users_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_user_delete' name= 'id_user_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='user_name_delete'>user_name</label>
                    <input type='text' id= 'user_name_delete' name= 'user_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_name_delete'>full_name</label>
                    <input type='text' id= 'full_name_delete' name= 'full_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='hashed_pass_delete'>hashed_pass</label>
                    <input type='text' id= 'hashed_pass_delete' name= 'hashed_pass_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='clean_pass_delete'>clean_pass</label>
                    <input type='text' id= 'clean_pass_delete' name= 'clean_pass_delete' class='form-control'>
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