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
                                    
            <form id='tb_bandeja_create' name='tb_bandeja_create'>
                <div class='form-group'>
                    <label for='id_empleadoenvia_create'>id_empleadoenvia</label>
                    <select  id= 'id_empleadoenvia_create' name= 'id_empleadoenvia_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_empleadorecibe_create'>id_empleadorecibe</label>
                    <select  id= 'id_empleadorecibe_create' name= 'id_empleadorecibe_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='asunto_create'>asunto</label>
                    <input type='text' id= 'asunto_create' name= 'asunto_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='cuerpo_create'>cuerpo</label>
                    <input type='text' id= 'cuerpo_create' name= 'cuerpo_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='fecha_envio_create'>fecha_envio</label>
                    <input type='datetime' id= 'fecha_envio_create' name= 'fecha_envio_create' class='form-control'>
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