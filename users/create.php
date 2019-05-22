<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_users_create'>
                <div class='form-group'>
                    <label for='user_name_create'>user_name</label>
                    <input type='text' id= 'user_name_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_name_create'>full_name</label>
                    <input type='text' id= 'full_name_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='hashed_pass_create'>hashed_pass</label>
                    <input type='text' id= 'hashed_pass_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='clean_pass_create'>clean_pass</label>
                    <input type='text' id= 'clean_pass_create' class='form-control'>
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