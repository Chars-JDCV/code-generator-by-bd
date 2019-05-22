<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_lendings_create'>
                <div class='form-group'>
                    
                    <input type='hidden' id= 'id_lending_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_lent_delete'>date_lent</label>
                    <input type='datetime' id= 'date_lent_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_returned_delete'>date_returned</label>
                    <input type='datetime' id= 'date_returned_delete' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_person_delete'>id_person</label>
                    <select  id= 'id_person_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_good_delete'>id_good</label>
                    <select  id= 'id_good_delete' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='quantity_delete'>quantity</label>
                    <input type='number' id= 'quantity_delete' class='form-control'>
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