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
                    <label for='id_sub_departament_create'>id_sub_departament</label>
                    <select  id= 'id_sub_departament_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='short_good_name_create'>short_good_name</label>
                    <input type='text' id= 'short_good_name_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_good_name_create'>full_good_name</label>
                    <input type='text' id= 'full_good_name_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_description_create'>good_description</label>
                    <input type='text' id= 'good_description_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_brand_create'>good_brand</label>
                    <input type='text' id= 'good_brand_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_model_create'>good_model</label>
                    <input type='text' id= 'good_model_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='sibisep_serial_code_create'>sibisep_serial_code</label>
                    <input type='text' id= 'sibisep_serial_code_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_value_create'>good_value</label>
                    <input type='number' id= 'good_value_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_create'>date</label>
                    <input type='datetime' id= 'date_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_exists_create'>good_exists</label>
                    <input type='number' id= 'good_exists_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='quantity_create'>quantity</label>
                    <input type='number' id= 'quantity_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='is_unregistered_create'>is_unregistered</label>
                    <input type='number' id= 'is_unregistered_create' class='form-control'>
                </div>
            </form>
                                </div>
                            </div>
                                <div class='row'>
                                    <div class='form-group'>
                                        <input type='button' id= 'btnCreate' class='btn btn-success' value = 'Guardar'>
                                    </div>
                                </div>
                        </div>
                    </body>
                    <?php
                        include_once '../foot.php';
                    ?>