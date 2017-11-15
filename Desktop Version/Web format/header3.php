<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Automated Accommodation | Admin Panel" />
<meta name="keywords" content="sell, buy, rent" />
<meta name="author" content="Automated Accommodation" />

<!-- Page Title -->
<title>Automated Accommodation | Admin Panel</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.jpg" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.jpg" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.jpg" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.jpg" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.jpg" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="vertical-nav">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header id="header" class="header layer-overlay overlay-dark-1" data-bg-img="images/admin.jpg">
    <div class="header-nav">
      <div class="header-nav-wrapper">
        <div class="container-fluid p-0">
          <div id="menuzord-verticalnav" class="menuzord">
            <a class="menuzord-brand p-30" href="javascript:void(0)"><img width="100" alt="logo"  src="images/logo-wide.jpg">Automated Accommodation</a>
            <?php
            require_once('nav2.php');
            ?>
          <div class="clearfix"></div>
          <div class="vertical-nav-widget p-30 pt-10">
            <div class="widget no-border">
              <ul>
                <li class="font-14 mb-5"> <i class="fa fa-phone text-white mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
                <li class="font-14 mb-5"> <i class="fa fa-clock-o text-white mr-5"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="font-14 mb-5"> <i class="fa fa-envelope-o text-white mr-5"></i> <a class="text-gray" href="#">info@aa.com</a> </li>
              </ul>      
            </div>
            <div class="widget">
              <ul class="styled-icons icon-gray icon-theme-colored icon-sm">
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
            <p>Copyright &copy;2017 Automated Accommodation</p>
          </div>
        </div>
      </div>
    </div>
  </header>