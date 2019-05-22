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
                    <label for='date_lent_create'>date_lent</label>
                    <input type='datetime' id= 'date_lent_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_returned_create'>date_returned</label>
                    <input type='datetime' id= 'date_returned_create' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_person_create'>id_person</label>
                    <select  id= 'id_person_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_good_create'>id_good</label>
                    <select  id= 'id_good_create' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='quantity_create'>quantity</label>
                    <input type='number' id= 'quantity_create' class='form-control'>
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