<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_delete_goods_update'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_delete_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_good_update'>id_good</label>
                    <select  id= 'id_good_update' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='date_of_deletion_update'>date_of_deletion</label>
                    <input type='date' id= 'date_of_deletion_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_sub_dept_update'>id_sub_dept</label>
                    <select  id= 'id_sub_dept_update' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='value_deleted_good_update'>value_deleted_good</label>
                    <input type='number' id= 'value_deleted_good_update' class='form-control'>
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