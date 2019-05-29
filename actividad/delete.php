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
                                    
            <form id='tb_actividad_delete' name='tb_actividad_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_actividad_delete' name= 'id_actividad_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='actividad_delete'>actividad</label>
                    <input type='text' id= 'actividad_delete' name= 'actividad_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_empresa_delete'>id_empresa</label>
                    <select  id= 'id_empresa_delete' name= 'id_empresa_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='rgu_delete'>rgu</label>
                    <input type='number' id= 'rgu_delete' name= 'rgu_delete' class='form-control'>
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