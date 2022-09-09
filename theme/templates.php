<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="img/Logo.png">
  <title>Rumah Ilmu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/color/default.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

<style type="text/css">
  header{
    margin-top: -30px;
    margin-bottom: -28px;
  }

  .navbar-inner{
    background-image: url('img/header.png');
    background-repeat: no-repeat;
    background-size: auto;
    height: 150px;
    width: auto;
    background-position: left top;
  }
 .navigation{
  float: bottom center;
  margin-top: 98px;
  margin-left: -38px;
 }
  .container{
    width: 1000px;
    margin:auto;
}
.py-5 {
    padding-top: 1rem !important;
}
.container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x, .75rem);
    padding-left: var(--bs-gutter-x, .75rem);
    margin-right: auto;
    margin-left: auto;
}
  .navigation ul{
    list-style-type:none;
    margin:0;
    padding:0;
    overflow: hidden;
  }
  .logo{
    width: 120px;
    height: 120px;
  }
  .navigation > ul > li{
    float:left;
  }
  .navigation li a{
    display:inline-block;
    color: #2f8f9d;
    text-align: center;
    padding: 14px 16px;
    font-size: 16px;
    text-decoration: none;
  }
  .navigation li a:hover{
    background-color: #fff;
  }
  li.dropdown {
    display: inline-block;
  }
  .judul{
    margin: 10px;
    padding: 0px 10px;
    color: #EFD2C6;
    font-size: 35px;
    text-align: left;
    margin-top: 10px;
    margin-right: 45px;
  }



</style>
  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Lumia
    Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>


<body>
  <div id="wrapper">
    <header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <div class="judul">
                
            </div>
            <!-- end logo -->

            <!-- top menu -->
           
            <nav>
              <div class="navigation">
                <ul>
                  <li>
                    <a href="index.php"><i class="icon-home"></i> Home </a>
                  </li>
                  <li>
                    <a href="<?php echo web_root; ?>index.php?q=lesson"><i class="icon-list-alt"></i> Materi</a>
                  </li>
                  <li>
                    <a href="<?php echo web_root; ?>index.php?q=exercises"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg> Forum Belajar</a>
                  </li>
                  <li>
                    <a href="<?php echo web_root; ?>index.php?q=download"><i class="icon-download"></i> Downloads</a>
                  </li> 
                  <li>
                    <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" margin-right="20px" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>Logout</a>
                  </li>
                </ul>
              </div>
            </nav>
            
            <!-- end menu -->

          </div>
        </div>
      </div>
    </header>

    <section id="maincontent">
      <div class="container"> 
<?php check_message(); ?>  
    <?php require_once $content; ?> 
  </div>   
</section>
 <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/raphael-min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/bootstrap.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/google-code-prettify/prettify.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.elastislide.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.flexslider.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery-hover-effect.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/custom.js"></script>

<!DOCTYPE html>
<html>
</head>
<audio autoplay>
  <source src = "SmileAudio.mp3" type="audio/mp3"/>
</audio>
 </body>
</html>