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
                                    
            <form id='tb_switch_good_depts_delete' name='tb_switch_good_depts_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_switch_delete' name= 'id_switch_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_good_delete'>id_good</label>
                    <select  id= 'id_good_delete' name= 'id_good_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_src_sub_dept_delete'>id_src_sub_dept</label>
                    <select  id= 'id_src_sub_dept_delete' name= 'id_src_sub_dept_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_dest_sub_dept_delete'>id_dest_sub_dept</label>
                    <select  id= 'id_dest_sub_dept_delete' name= 'id_dest_sub_dept_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='date_of_change_delete'>date_of_change</label>
                    <input type='datetime' id= 'date_of_change_delete' name= 'date_of_change_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='reason_for_switch_delete'>reason_for_switch</label>
                    <input type='text' id= 'reason_for_switch_delete' name= 'reason_for_switch_delete' class='form-control'>
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