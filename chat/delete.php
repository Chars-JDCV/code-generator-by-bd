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
                                    
            <form id='tb_chat_delete' name='tb_chat_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_delete' name= 'id_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='sender_delete'>sender</label>
                    <input type='number' id= 'sender_delete' name= 'sender_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='addressee_delete'>addressee</label>
                    <input type='number' id= 'addressee_delete' name= 'addressee_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='msg_delete'>msg</label>
                    <input type='text' id= 'msg_delete' name= 'msg_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_delete'>date</label>
                    <input type='datetime' id= 'date_delete' name= 'date_delete' class='form-control'>
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