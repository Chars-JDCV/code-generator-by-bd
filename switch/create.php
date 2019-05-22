<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_switch_good_depts_create'>
                <div class='form-group'>
                    <label for='id_good_create'>id_good</label>
                    <select  id= 'id_good_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_src_sub_dept_create'>id_src_sub_dept</label>
                    <select  id= 'id_src_sub_dept_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_dest_sub_dept_create'>id_dest_sub_dept</label>
                    <select  id= 'id_dest_sub_dept_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='date_of_change_create'>date_of_change</label>
                    <input type='datetime' id= 'date_of_change_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='reason_for_switch_create'>reason_for_switch</label>
                    <input type='text' id= 'reason_for_switch_create' class='form-control'>
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