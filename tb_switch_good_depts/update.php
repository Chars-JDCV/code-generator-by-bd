<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_switch_good_depts'>
                <div class='form-group'>
                    <label for='id_switch'>id_switch</label>
                    <input type='number' id= 'id_switch' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_good'>id_good</label>
                    <input type='number' id= 'id_good' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_src_sub_dept'>id_src_sub_dept</label>
                    <input type='number' id= 'id_src_sub_dept' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_dest_sub_dept'>id_dest_sub_dept</label>
                    <input type='number' id= 'id_dest_sub_dept' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_of_change'>date_of_change</label>
                    <input type='datetime' id= 'date_of_change' class='form-control'>
                </div><div class='form-group'>
                    <label for='reason_for_switch'>reason_for_switch</label>
                    <input type='text' id= 'reason_for_switch' class='form-control'>
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