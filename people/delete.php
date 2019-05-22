<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_people_lendings_create'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_person_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='person_name_delete'>person_name</label>
                    <input type='text' id= 'person_name_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='card_id_delete'>card_id</label>
                    <input type='text' id= 'card_id_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='is_lent_to_delete'>is_lent_to</label>
                    <input type='number' id= 'is_lent_to_delete' class='form-control'>
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