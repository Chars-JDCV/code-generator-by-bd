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
                                    
            <form id='tb_vehiculos_delete' name='tb_vehiculos_delete'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_vehiculo_delete' name= 'id_vehiculo_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='identificador_delete'>identificador</label>
                    <input type='text' id= 'identificador_delete' name= 'identificador_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='modelo_delete'>modelo</label>
                    <input type='text' id= 'modelo_delete' name= 'modelo_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='marca_delete'>marca</label>
                    <input type='text' id= 'marca_delete' name= 'marca_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='year_delete'>year</label>
                    <input type='number' id= 'year_delete' name= 'year_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_empleado_delete'>id_empleado</label>
                    <select  id= 'id_empleado_delete' name= 'id_empleado_delete' class='form-control'></select>
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