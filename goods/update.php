<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_goods_update'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_good_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_sub_departament_update'>id_sub_departament</label>
                    <select  id= 'id_sub_departament_update' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='short_good_name_update'>short_good_name</label>
                    <input type='text' id= 'short_good_name_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_good_name_update'>full_good_name</label>
                    <input type='text' id= 'full_good_name_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_description_update'>good_description</label>
                    <input type='text' id= 'good_description_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_brand_update'>good_brand</label>
                    <input type='text' id= 'good_brand_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_model_update'>good_model</label>
                    <input type='text' id= 'good_model_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='sibisep_serial_code_update'>sibisep_serial_code</label>
                    <input type='text' id= 'sibisep_serial_code_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_value_update'>good_value</label>
                    <input type='number' id= 'good_value_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_update'>date</label>
                    <input type='datetime' id= 'date_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_exists_update'>good_exists</label>
                    <input type='number' id= 'good_exists_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='quantity_update'>quantity</label>
                    <input type='number' id= 'quantity_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='is_unregistered_update'>is_unregistered</label>
                    <input type='number' id= 'is_unregistered_update' class='form-control'>
                </div>
            </form>
                                </div>
                            </div>
                                <div class='row'>
                                    <div class='form-group'>
                                        <input type='button' id= 'btnUpdate' class='btn btn-success' value = 'Actualizar'>
                                    </div>
                                </div>
                        </div>
                    </body>
                    <?php
                        include_once '../foot.php';
                    ?>