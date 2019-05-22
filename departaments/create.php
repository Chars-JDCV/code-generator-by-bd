<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_departaments_create'>
                <div class='form-group'>
                    <label for='short_dept_name_create'>short_dept_name</label>
                    <input type='text' id= 'short_dept_name_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_dept_name_create'>full_dept_name</label>
                    <input type='text' id= 'full_dept_name_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_chief_create'>id_chief</label>
                    <select  id= 'id_chief_create' class='form-control'></select>
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