<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_titles_update'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_title_update' class='form-control'>
                </div><div class='form-group'>
                    <label for='title_update'>title</label>
                    <input type='text' id= 'title_update' class='form-control'>
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