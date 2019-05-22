<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_goods_create'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_good_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_sub_departament_delete'>id_sub_departament</label>
                    <select  id= 'id_sub_departament_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='short_good_name_delete'>short_good_name</label>
                    <input type='text' id= 'short_good_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_good_name_delete'>full_good_name</label>
                    <input type='text' id= 'full_good_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_description_delete'>good_description</label>
                    <input type='text' id= 'good_description_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_brand_delete'>good_brand</label>
                    <input type='text' id= 'good_brand_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_model_delete'>good_model</label>
                    <input type='text' id= 'good_model_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='sibisep_serial_code_delete'>sibisep_serial_code</label>
                    <input type='text' id= 'sibisep_serial_code_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_value_delete'>good_value</label>
                    <input type='number' id= 'good_value_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_delete'>date</label>
                    <input type='datetime' id= 'date_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_exists_delete'>good_exists</label>
                    <input type='number' id= 'good_exists_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='quantity_delete'>quantity</label>
                    <input type='number' id= 'quantity_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='is_unregistered_delete'>is_unregistered</label>
                    <input type='number' id= 'is_unregistered_delete' class='form-control'>
                </div>
            </form>
                                </div>
                            </div>
                                <div class='row'>
                                    <div class='form-group'>
                                        <input type='button' id= 'btndelete' class='btn btn-success' value = 'Eliminar'>
                                    </div>
                                </div>
                        </div>
                    </body>
                    <?php
                        include_once '../foot.php';
                    ?>