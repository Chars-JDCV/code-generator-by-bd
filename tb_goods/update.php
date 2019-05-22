<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_goods'>
                <div class='form-group'>
                    <label for='id_good'>id_good</label>
                    <input type='number' id= 'id_good' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_sub_departament'>id_sub_departament</label>
                    <input type='number' id= 'id_sub_departament' class='form-control'>
                </div><div class='form-group'>
                    <label for='short_good_name'>short_good_name</label>
                    <input type='text' id= 'short_good_name' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_good_name'>full_good_name</label>
                    <input type='text' id= 'full_good_name' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_description'>good_description</label>
                    <input type='text' id= 'good_description' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_brand'>good_brand</label>
                    <input type='text' id= 'good_brand' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_model'>good_model</label>
                    <input type='text' id= 'good_model' class='form-control'>
                </div><div class='form-group'>
                    <label for='sibisep_serial_code'>sibisep_serial_code</label>
                    <input type='text' id= 'sibisep_serial_code' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_value'>good_value</label>
                    <input type='number' id= 'good_value' class='form-control'>
                </div><div class='form-group'>
                    <label for='date'>date</label>
                    <input type='datetime' id= 'date' class='form-control'>
                </div><div class='form-group'>
                    <label for='good_exists'>good_exists</label>
                    <input type='number' id= 'good_exists' class='form-control'>
                </div><div class='form-group'>
                    <label for='quantity'>quantity</label>
                    <input type='number' id= 'quantity' class='form-control'>
                </div><div class='form-group'>
                    <label for='is_unregistered'>is_unregistered</label>
                    <input type='number' id= 'is_unregistered' class='form-control'>
                </div>
            </form>
                                </div>
                            </div>
                                <div class='row'>
                                    <div class='form-group'>
                                        <input type='button' id= 'btngenerator' class='btn btn-success' value = 'Generate Code'>
                                    </div>
                                </div>
                        </div>
                    </body>
                    <?php
                        include_once '../foot.php';
                    ?>