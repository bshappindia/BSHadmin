<?php

require_once dirname(__DIR__,1).'/classes/Admin.php';

// print_r($_POST);
if(isset($_POST['oid'],$_POST['type'],$_POST['verified']))
{
    $admin  = new Admin();
    echo $admin->verifyData($_POST['oid'],$_POST['type'], $_POST['verified']);
}
