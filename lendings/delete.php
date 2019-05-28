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
                                    
            <form id='tb_lendings_delete' name='tb_lendings_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_lending_delete' name= 'id_lending_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_lent_delete'>date_lent</label>
                    <input type='datetime' id= 'date_lent_delete' name= 'date_lent_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_returned_delete'>date_returned</label>
                    <input type='datetime' id= 'date_returned_delete' name= 'date_returned_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_person_delete'>id_person</label>
                    <select  id= 'id_person_delete' name= 'id_person_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_good_delete'>id_good</label>
                    <select  id= 'id_good_delete' name= 'id_good_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='quantity_delete'>quantity</label>
                    <input type='number' id= 'quantity_delete' name= 'quantity_delete' class='form-control'>
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