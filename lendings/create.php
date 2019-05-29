<div class='modal' id='modal_create' tabindex='-1' role='dialog'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h3 class='modal-title'>Crear Registro Nuevo</h3>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'> 
                                    
            <form id='tb_lendings_create' name='tb_lendings_create'>
                <div class='form-group'>
                    <label for='date_lent_create'>date_lent</label>
                    <input type='datetime' id= 'date_lent_create' name= 'date_lent_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_returned_create'>date_returned</label>
                    <input type='datetime' id= 'date_returned_create' name= 'date_returned_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_person_create'>id_person</label>
                    <select  id= 'id_person_create' name= 'id_person_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_good_create'>id_good</label>
                    <select  id= 'id_good_create' name= 'id_good_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='quantity_create'>quantity</label>
                    <input type='number' id= 'quantity_create' name= 'quantity_create' class='form-control'>
                </div>
                <div class='modal-footer'>
                    <button id='btn_create' class='btn btn-primary'>Registrar</button>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                </div>
            </form>
                                </div>
                            </div>
                        </div>
                    </div>