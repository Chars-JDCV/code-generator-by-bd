<?php
if (isset($_POST['action'])) {
    include_once '../model/Manager.php';
    header('Content-Type: application/json; charset=utf-8;');
    switch ($_POST['action']) {
        case 'get':
            $obj = new Manager();
            echo $obj->get_database();
            break;
        case 'gettable':
            $obj = new Manager();
            echo $obj->get_database_tables($_POST['dt']);
            break;
        case 'getcolumns':
            $obj = new Manager();
            echo $obj->get_database_columns($_POST['dt']);
            break;
        case 'create_document_table':
            $obj = new Manager();
            echo $obj->create_document_table($_POST['dt']);
            break;
        case 'create_document':
            $obj = new Manager();
            echo $obj->create_document($_POST['dt']);
            break;
    }
}
