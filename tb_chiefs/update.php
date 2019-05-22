<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_chiefs'>
                <div class='form-group'>
                    <label for='id_chief'>id_chief</label>
                    <input type='number' id= 'id_chief' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_title'>id_title</label>
                    <input type='number' id= 'id_title' class='form-control'>
                </div><div class='form-group'>
                    <label for='chief_name'>chief_name</label>
                    <input type='text' id= 'chief_name' class='form-control'>
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