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
                                    
            <form id='tb_departaments_delete' name='tb_departaments_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_departament_delete' name= 'id_departament_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='short_dept_name_delete'>short_dept_name</label>
                    <input type='text' id= 'short_dept_name_delete' name= 'short_dept_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_dept_name_delete'>full_dept_name</label>
                    <input type='text' id= 'full_dept_name_delete' name= 'full_dept_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_chief_delete'>id_chief</label>
                    <select  id= 'id_chief_delete' name= 'id_chief_delete' class='form-control'></select>
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