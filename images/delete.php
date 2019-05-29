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
                                    
            <form id='images_delete' name='images_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_delete' name= 'id_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='file_name_delete'>file_name</label>
                    <input type='text' id= 'file_name_delete' name= 'file_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='uploaded_on_delete'>uploaded_on</label>
                    <input type='datetime' id= 'uploaded_on_delete' name= 'uploaded_on_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='status_delete'>status</label>
                    <input type='text' id= 'status_delete' name= 'status_delete' class='form-control'>
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