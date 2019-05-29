<?php
include_once '../head.php';
include_once '../menu.php';
?>

<body>
    <div class='container'>
        <!-- Incluye el cuerpo de la pagina-->
        <h1 id='Catalogo'></h1>
        <div class='row'>
            <div class='col-md-9'>
                <form>
                    <div class="form-group col-md-5">
                        <h3>SELECT DATA</h3>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="tables">Data Base Name</label>
                        <select class="form-control" id="databases">
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="tables">Tables Name</label>
                        <select class="form-control" id="tables">
                        </select>
                    </div>
                    <div id="colums_name" class="form-group col-md-5 d-none">
                        <label for="columns">Columns Name</label>
                        <select class="form-control" id="columns">
                        </select>
                       
                    </div>
                    <div class="form-group col-md-5">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="option" value="option">
                            <label class="form-check-label" for="option">Advanced Option</label>
                        </div>
                        <input type='button' id='btn_columns' class='btn btn-primary d-none' value='Generate Documents'>
                        <input type='button' id='btn_tables' class='btn btn-primary ' value='Generate Documents'>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include 'create.php';
include 'update.php';
include 'delete.php';
include '../foot.php';
?>
<script src='main.js?v=6'></script>