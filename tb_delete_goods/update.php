<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_delete_goods'>
                <div class='form-group'>
                    <label for='id_delete'>id_delete</label>
                    <input type='number' id= 'id_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_good'>id_good</label>
                    <input type='number' id= 'id_good' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_of_deletion'>date_of_deletion</label>
                    <input type='date' id= 'date_of_deletion' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_sub_dept'>id_sub_dept</label>
                    <input type='number' id= 'id_sub_dept' class='form-control'>
                </div><div class='form-group'>
                    <label for='value_deleted_good'>value_deleted_good</label>
                    <input type='number' id= 'value_deleted_good' class='form-control'>
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