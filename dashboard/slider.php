<?php
  session_start();
  if(!isset($_SESSION['admin']))
  { 
    header("Location: ../login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Slider
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
<style>
.form-group input[type=file] {
    opacity: 1 !important;
    /* position: absolute; */
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
</style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          BSH
        </a></div>
      <div class="sidebar-wrapper">
      <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="./dashboard.php">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            
            <li class="nav-item ">
              <a class="nav-link" href="./news.php">
                <i class="material-icons">content_paste</i>
                <p>Verified News</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./unVerified.php">
                <i class="material-icons">library_books</i>
                <p>Un-Verified News</p>
              </a>
            </li>


            <li class="nav-item ">
              <a class="nav-link" href="./ads.php">
                <i class="material-icons">bubble_chart</i>
                <p>Verfied adds</p>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="./unVerifiedAds.php">
                <i class="material-icons">bubble_chart</i>
                <p>un-Verfied adds</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="./jobs.php">
                <i class="material-icons">bubble_chart</i>
                <p>Verfied Jobs</p>
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="./unVerifiedJobs.php">
                <i class="material-icons">bubble_chart</i>
                <p>Un -Verfied Jobs</p>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="./realEstate.php">
                <i class="material-icons">bubble_chart</i>
                <p>Real Estate</p>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="./unVerifiedRealEstate.php">
                <i class="material-icons">bubble_chart</i>
                <p>un-verified Real EState</p>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="./matrimony.php">
                <i class="material-icons">bubble_chart</i>
                <p>Matrimony</p>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="./unVerifiedMatrimony.php">
                <i class="material-icons">bubble_chart</i>
                <p>un-verified Matrimony</p>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./slider.php">
                <i class="material-icons">bubble_chart</i>
                <p>Slider</p>
              </a>
            </li>
          </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Verified jobs</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php require_once dirname(__DIR__,2).'/classes/Admin.php';
      if(!empty($_POST)){
        // echo "<pre>";print_r();die;
        $admin  = new Admin();
        $data['url']= $_POST['url'];
        $data['state']= $_POST['state'];

        $file_name='';
        if(isset($_FILES['image'])){
          $errors= array();
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $file_tmp = $_FILES['image']['tmp_name'];
          $file_type = $_FILES['image']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
          
          $extensions= array("jpeg","jpg","png");
          
          if(in_array($file_ext,$extensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          $file_name= rand(9999,0000).'-'.time().'.'.$file_ext;
          if(empty($errors)==true) {
             move_uploaded_file($file_tmp,'sliders/'.$file_name);
          }else{
            // print_r($errors);
          }
       }
        if(empty($errors)==true){
          $data['image']= $file_name;
          // echo "<pre>";print_r($data);die;
          $getdata=  $admin->insertSliderData($data);
        }
       
      }?>
      <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card" >
                            <div class="card-body">
                              <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Url</label>
                                      <input type="text" class="form-control" name="url" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">State</label>
                                      <select type="text" class="form-control" name="state" required="">
                                          <option value="tamilnadu" >tamilnadu</option>
                                          <option value="Telangana">Telangana</option>
                                          <option value="AndhraPradesh" selected>AndhraPradesh</option>
                                          <option value="Karnataka">Karnataka</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Image</label>
                                      <input type="file" name="image">
                                    </div>
                                  </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                              </form>
                            </div>
                        </div> 
                    </div>
                <!-- </div> -->
                <?php $admin  = new Admin();
                $getsliderdata= $admin->getSliderData();
                if(!empty($getsliderdata)){?>
                <!-- <div class="row" > -->
                    <div class="col-md-12">
                        <div class="card" >
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                                <th>S.NO</th>
                                                <th>Url</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                <?php $i=0;
                                                foreach ($getsliderdata as $key => $value) {?>
                                                    <tr >
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $value->url; ?></td>
                                                    <td><img style="width:100px;" src="https://bshapp.in/main/BSHadmin/dashboard/sliders/<?php echo $value->image ?>"></td>
                                                    <td><a href="./delete_slider.php?oid=<?php echo $value->id; ?>" class="btn btn-danger">Delete</td>
                                                </tr>
                                                <?php $i++; }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <!-- <script src="../assets/js/operations.js"></script> -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>


</body>

</html>