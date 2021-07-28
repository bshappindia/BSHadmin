 <?php require_once dirname(__DIR__,2).'/classes/Admin.php';
 $oid= $_GET['oid'];
 $admin  = new Admin();
  $getdata=  $admin->deleteSliderData($oid);
    header('Location: ./slider.php');
exit;