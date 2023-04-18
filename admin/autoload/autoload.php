<?php
session_start();
require_once  __DIR__."/../../libraries/Database.php";
require_once __DIR__."/../../libraries/Function.php";
$db = new Database;


if ( !isset($_SESSION['admin_id']))
{
    header("location: /ct27502-project-pMy2k2/login");
}

define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/ct27502-project-pMy2k2/public/uploads/");

?>