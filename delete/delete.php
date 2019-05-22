<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_delete_goods_create'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_delete_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_good_delete'>id_good</label>
                    <select  id= 'id_good_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='date_of_deletion_delete'>date_of_deletion</label>
                    <input type='date' id= 'date_of_deletion_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_sub_dept_delete'>id_sub_dept</label>
                    <select  id= 'id_sub_dept_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='value_deleted_good_delete'>value_deleted_good</label>
                    <input type='number' id= 'value_deleted_good_delete' class='form-control'>
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