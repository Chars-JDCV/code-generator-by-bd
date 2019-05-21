<?php
 ob_start();
 session_start();
if(isset($_POST["action"]))
{
    include_once getcwd() . '/../classes/Login.php';
    header('Content-Type: application/json; charset=utf-8;');
    switch($_POST["action"])
    {
        case 'login':
        $obj = new Manager();
        $dt = array ('user_name' =>$_POST["user_name"],'clean_pass'=>$_POST["clean_pass"]);
        $retval = json_decode($obj->get($dt),true);
        ($retval["data"]==1) ? header('Location: ../index.php') : header('Location: login.php?error=true') ;
        break;
        default:

        break;
    }
}
?>