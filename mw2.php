<?php
require_once dirname(__DIR__,1).'/classes/Admin.php';

$admin  = new Admin();
$data = $admin->getverifiedNews($_GET["state"]);
$data = json_encode($data);
echo $data;
?>
