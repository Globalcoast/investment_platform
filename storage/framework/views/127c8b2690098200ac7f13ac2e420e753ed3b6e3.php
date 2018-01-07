<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/horizontal/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2017 13:43:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/favicon.png')); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo e(asset('css/chartist.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/chartist-init.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/chartist-plugin-tooltip.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/css-chart.css')); ?>" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo e(asset('css/c3.min.css')); ?>" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo e(asset('css/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo e(asset('css/colors/purple.css')); ?>" id="theme" rel="stylesheet">
    
    <link href="<?php echo e(asset('css/parsley.css')); ?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
    title:{
        text: "Weekly Revenue Analysis for First Quarter"
    },
    axisY:[{
        title: "Order",
        lineColor: "#C24642",
        tickColor: "#C24642",
        labelFontColor: "#C24642",
        titleFontColor: "#C24642",
        suffix: "k"
    },
    {
        title: "Footfall",
        lineColor: "#369EAD",
        tickColor: "#369EAD",
        labelFontColor: "#369EAD",
        titleFontColor: "#369EAD",
        suffix: "k"
    }],
    axisY2: {
        title: "Revenue",
        lineColor: "#7F6084",
        tickColor: "#7F6084",
        labelFontColor: "#7F6084",
        titleFontColor: "#7F6084",
        prefix: "$",
        suffix: "k"
    },
    toolTip: {
        shared: true
    },
    legend: {
        cursor: "pointer",
        itemclick: toggleDataSeries
    },
    data: [{
        type: "line",
        name: "Footfall",
        color: "#369EAD",
        showInLegend: true,
        axisYIndex: 1,
        dataPoints: [
            { x: new Date(2017, 00, 7), y: 85.4 }, 
            { x: new Date(2017, 00, 14), y: 92.7 },
            { x: new Date(2017, 00, 21), y: 64.9 },
            { x: new Date(2017, 00, 28), y: 58.0 },
            { x: new Date(2017, 01, 4), y: 63.4 },
            { x: new Date(2017, 01, 11), y: 69.9 },
            { x: new Date(2017, 01, 18), y: 88.9 },
            { x: new Date(2017, 01, 25), y: 66.3 },
            { x: new Date(2017, 02, 4), y: 82.7 },
            { x: new Date(2017, 02, 11), y: 60.2 },
            { x: new Date(2017, 02, 18), y: 87.3 },
            { x: new Date(2017, 02, 25), y: 98.5 }
        ]
    },
    {
        type: "line",
        name: "Order",
        color: "#C24642",
        axisYIndex: 0,
        showInLegend: true,
        dataPoints: [
            { x: new Date(2017, 00, 7), y: 32.3 }, 
            { x: new Date(2017, 00, 14), y: 33.9 },
            { x: new Date(2017, 00, 21), y: 26.0 },
            { x: new Date(2017, 00, 28), y: 15.8 },
            { x: new Date(2017, 01, 4), y: 18.6 },
            { x: new Date(2017, 01, 11), y: 34.6 },
            { x: new Date(2017, 01, 18), y: 37.7 },
            { x: new Date(2017, 01, 25), y: 24.7 },
            { x: new Date(2017, 02, 4), y: 35.9 },
            { x: new Date(2017, 02, 11), y: 12.8 },
            { x: new Date(2017, 02, 18), y: 38.1 },
            { x: new Date(2017, 02, 25), y: 42.4 }
        ]
    },
    {
        type: "line",
        name: "Revenue",
        color: "#7F6084",
        axisYType: "secondary",
        showInLegend: true,
        dataPoints: [
            { x: new Date(2017, 00, 7), y: 42.5 }, 
            { x: new Date(2017, 00, 14), y: 44.3 },
            { x: new Date(2017, 00, 21), y: 28.7 },
            { x: new Date(2017, 00, 28), y: 22.5 },
            { x: new Date(2017, 01, 4), y: 25.6 },
            { x: new Date(2017, 01, 11), y: 45.7 },
            { x: new Date(2017, 01, 18), y: 54.6 },
            { x: new Date(2017, 01, 25), y: 32.0 },
            { x: new Date(2017, 02, 4), y: 43.9 },
            { x: new Date(2017, 02, 11), y: 26.4 },
            { x: new Date(2017, 02, 18), y: 40.3 },
            { x: new Date(2017, 02, 25), y: 54.2 }
        ]
    }]
});
chart.render();

function toggleDataSeries(e) {
    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    } else {
        e.dataSeries.visible = true;
    }
    e.chart.render();
}

}
</script>

</head>



<body class="fix-header fix-sidebar card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>-->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo e(URL::to('/home')); ?>">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <label style="color: white;">Globalcoast | Admin</label>
                            <img src="<?php echo e(asset('img/logo-icon.png')); ?>" alt="" class="dark-logo" />
                            <!-- Light Logo icon -->
                           <!-- <img src="<?php echo e(asset('img/logo-light-icon.png')); ?>" alt="Globalcoast" class="light-logo" />-->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo e(asset('img/logo-text.png')); ?>" alt="" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo e(asset('img/logo-light-text.png')); ?>" class="light-logo" alt="" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
               
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
               




<div class="row">
    
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        
    <?php if(Session::has('notification')): ?>
          <p class="alert alert-success alert-sm alert-dismissable"><?php echo e(Session::get('notification')); ?></p>
        <?php endif; ?>
    </div>

</div>








  <?php echo $__env->yieldContent('admin_auth_content'); ?>












                
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                 © 2017 Globalcoast Investment Platform. All Right Reserved. 
                 <?php if(isset($Config)): ?>
                 ROI Value :<span id="roi_value"><?php echo e($Config->roi_value); ?></span> % | ROI Period : <span id="roi_period"><?php echo e($Config->roi_period); ?></span> Days
                 <?php endif; ?>

            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('js/canvasjs.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <!--parsley script -->
    <script src="<?php echo e(asset('js/parsley.min.js')); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo e(asset('js/jquery.slimscroll.js')); ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo e(asset('js/waves.js')); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo e(asset('js/sidebarmenu.js')); ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo e(asset('js/sticky-kit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.sparkline.min.js')); ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo e(asset('js/sticky-kit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.sparkline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.sparkline.min.js')); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo e(asset('js/glob.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.min.js')); ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo e(asset('js/chartist.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/chartist-plugin-tooltip.min.js')); ?>"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo e(asset('js/d3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/c3.min.js')); ?>"></script>
    <!-- Vector map JavaScript -->
    <script src="<?php echo e(asset('js/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-jvectormap-us-aea-en.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard2.js')); ?>"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('js/jQuery.style.switcher.js')); ?>"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/horizontal/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2017 13:43:57 GMT -->
</html>
