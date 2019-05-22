<?php
                        include_once '../head.php';
                        include_once '../menu.php';
                    ?>
                    <body>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                
            <form id='tb_lendings_update'>
                <div class='form-group'>
                    <label for='id_lending'>id_lending</label>
                    <select  id= 'id_lending_update' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='date_lent'>date_lent</label>
                    <input type='datetime' id= 'date_lent' class='form-control'>
                </div><div class='form-group'>
                    <label for='date_returned'>date_returned</label>
                    <input type='datetime' id= 'date_returned' class='form-control'>
                </div><div class='form-group'>
                    <label for='id_person'>id_person</label>
                    <select  id= 'id_person_update' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='id_good'>id_good</label>
                    <select  id= 'id_good_update' class='form-control'></select>
                </div><div class='form-group'>
                    <label for='quantity'>quantity</label>
                    <input type='number' id= 'quantity' class='form-control'>
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