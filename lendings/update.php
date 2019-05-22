<div class='modal_update' id='modal_update' tabindex='-1' role='dialog'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h3 class='modal-title'>Actualizar Registro</h3>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'> 
                                    
            <form id='tb_lendings_update'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_lending_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_lent_update'>date_lent</label>
                    <input type='datetime' id= 'date_lent_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_returned_update'>date_returned</label>
                    <input type='datetime' id= 'date_returned_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_person_update'>id_person</label>
                    <select  id= 'id_person_update' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_good_update'>id_good</label>
                    <select  id= 'id_good_update' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='quantity_update'>quantity</label>
                    <input type='number' id= 'quantity_update' class='form-control'>
                </div>
                <div class='modal-footer'>
                    <button id='btn_update' class='btn btn-primary'>Actualizar</button>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                </div>
            </form>
                                </div>
                            </div>
                        </div>
                    </div>