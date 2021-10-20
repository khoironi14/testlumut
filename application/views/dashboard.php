<?php
    date_default_timezone_set("Asia/Jakarta");
  
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Arta Cell</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendors/css/vendors.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendors/css/weather-icons/climacons.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/fonts/meteocons/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendors/css/charts/morris.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendors/css/charts/chartist.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendors/css/charts/chartist-plugin-tooltip.css')?>">
    <!-- END: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap-extended.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/colors.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/components.css')?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
  
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/core/menu/menu-types/vertical-menu-modern.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/core/colors/palette-gradient.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/fonts/simple-line-icons/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/core/colors/palette-gradient.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/pages/timeline.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/pages/dashboard-ecommerce.css')?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
  
  
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
      <!-- BEGIN: Vendor JS-->
    
    <!-- END: Custom CSS-->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="<?=base_url('assets/vendors/js/vendors.min.js')?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=base_url('assets/vendors/js/charts/chartist.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/js/charts/chartist-plugin-tooltip.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/js/charts/raphael-min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/js/charts/morris.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/js/timeline/horizontal-timeline.js')?>"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                            <h3 class="brand-text">Selamat Datang</h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                       
                      
                    </ul>
                    <ul class="nav navbar-nav float-right">
                      
                       
                       
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?=$this->session->userdata('username');?></span><span class="avatar avatar-online"><img src="<?=base_url('assets/images/portrait/small/avatar-s-19.png')?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                               
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=base_url('Welcome/logout');?>"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="<?=base_url('welcome/home')?>"><i class="la la-home"></i><span class="menu-title" data-i18n="eCommerce Dashboard"> Dashboard</span></a>
                </li>
              
                
                 <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="Form Layouts">Master Data</span></a>
                    <ul class="menu-content">
                         <?php $role=$this->session->userdata('role');if ($role==1) {
                            # code...
                        ?>
                        <li><a class="menu-item" href="<?=base_url('welcome/user');?>"><i></i><span data-i18n="Basic Forms">Account</span></a>
                        </li><?php }?>

                        <li><a class="menu-item" href="<?=base_url('post')?>"><i></i><span data-i18n="Horizontal Forms">Post</span></a>
                        </li>
                       
                       
                       
                    </ul>
                </li>
               
                 
               
              
            
              
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
           
            <div class="content-body">
                <?php $this->load->view($content); ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; <?=date('Y')?> <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">Test</a></span></p>
    </footer>
    <!-- END: Footer-->


  

    <!-- END: Page JS-->

</body>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
  
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=base_url('assets/js/core/app-menu.js')?>"></script>
    <script src="<?=base_url('assets/js/core/app.js')?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=base_url('assets/js/scripts/pages/dashboard-ecommerce.js')?>"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="<?=base_url('assets/js/sweetalert.min.js')?>"></script> -->
    

    <script src="<?=base_url('assets/js/myscript.js')?>"></script>

<!-- END: Body-->
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

</html>