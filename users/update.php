<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_users_update'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_user_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='user_name_update'>user_name</label>
                    <input type='text' id= 'user_name_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_name_update'>full_name</label>
                    <input type='text' id= 'full_name_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='hashed_pass_update'>hashed_pass</label>
                    <input type='text' id= 'hashed_pass_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='clean_pass_update'>clean_pass</label>
                    <input type='text' id= 'clean_pass_update' class='form-control'>
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