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
                                    
            <form id='tb_bandeja_delete' name='tb_bandeja_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_bandeja_delete' name= 'id_bandeja_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_empleadoenvia_delete'>id_empleadoenvia</label>
                    <select  id= 'id_empleadoenvia_delete' name= 'id_empleadoenvia_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_empleadorecibe_delete'>id_empleadorecibe</label>
                    <select  id= 'id_empleadorecibe_delete' name= 'id_empleadorecibe_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='asunto_delete'>asunto</label>
                    <input type='text' id= 'asunto_delete' name= 'asunto_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='cuerpo_delete'>cuerpo</label>
                    <input type='text' id= 'cuerpo_delete' name= 'cuerpo_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='fecha_envio_delete'>fecha_envio</label>
                    <input type='datetime' id= 'fecha_envio_delete' name= 'fecha_envio_delete' class='form-control'>
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