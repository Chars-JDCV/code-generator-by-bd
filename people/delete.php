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
                                    
            <form id='tb_people_lendings_delete' name='tb_people_lendings_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_person_delete' name= 'id_person_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='person_name_delete'>person_name</label>
                    <input type='text' id= 'person_name_delete' name= 'person_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='card_id_delete'>card_id</label>
                    <input type='text' id= 'card_id_delete' name= 'card_id_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='is_lent_to_delete'>is_lent_to</label>
                    <input type='number' id= 'is_lent_to_delete' name= 'is_lent_to_delete' class='form-control'>
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