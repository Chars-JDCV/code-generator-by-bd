<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_users'>
                <div class='form-group'>
                    <label for='id_user'>id_user</label>
                    <input type='number' id= 'id_user' class='form-control'>
                </div><div class='form-group'>
                    <label for='user_name'>user_name</label>
                    <input type='text' id= 'user_name' class='form-control'>
                </div><div class='form-group'>
                    <label for='full_name'>full_name</label>
                    <input type='text' id= 'full_name' class='form-control'>
                </div><div class='form-group'>
                    <label for='hashed_pass'>hashed_pass</label>
                    <input type='text' id= 'hashed_pass' class='form-control'>
                </div><div class='form-group'>
                    <label for='clean_pass'>clean_pass</label>
                    <input type='text' id= 'clean_pass' class='form-control'>
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