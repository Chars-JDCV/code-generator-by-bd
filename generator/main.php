<?php
 ob_start();
 session_start();
if(isset($_POST["action"]))
{
    include_once getcwd() . '/../classes/Login.php';
    header('Content-Type: application/json; charset=utf-8;');
    switch($_POST["action"])
    {
        case 'generate':
        $obj = new Manager();
        echo $obj->generate();
        break;
        default:

        break;
    }
}
?>