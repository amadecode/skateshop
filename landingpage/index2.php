<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	product Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Skateshop</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar" style="position:absolute;">
        <!-- start header nav-->
        <div class="navbar-fixed " >
            <nav class="navbar-color indigo " style="opacity: 0.95;height: 50px;" >
                <div class="nav-wrapper" >
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="./" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text z-depth-4" >Skateshop</span></h1></li>
                    </ul>


                    <ul class="right hide-on-med-and-down">

                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-action-add-shopping-cart amber-text"></i>
                                         </a>
                        </li>                        
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>

                    </ul>

                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>CART</h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li>
                    </ul>

                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="error-page">
    <!-- START WRAPPER -->
    <div class="wrapper">


          

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        
<div class="col s12 m8 l9">                
                <div class="slider" >
                  <ul class="slides" style="height: 0px;">
                    <li>
                      <img src="./images/skateshop/banner2.jpg" alt="img-1">
                      <!-- random image -->
                      <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="./images/skateshop/banner4.jpg" alt="img-2">
                      <!-- random image -->
                      <div class="caption left-align">
                        <h3>Left Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="./images/skateshop/banner3.jpg" alt="img-3">
                      <!-- random image -->
                      <div class="caption right-align">
                        <h3>Right Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="./images/skateshop/banner5.jpg" alt="img-4">
                      <!-- random image -->
                      <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="./images/skateshop/banner6.jpg" alt="img-5">
                      <!-- random image -->
                      <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
        

        <!--start container-->
        <div class="container">
          <div class="section">
            <!-- statr products list -->
            <div id="products" class="row">
                <div class="product-sizer"></div>
                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img2.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img5.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img7.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img3.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img4.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img5.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img6.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img7.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img8.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img2.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img7.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img4.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                            

                            <a href="#"><img src="images/img6.jpg" alt="product-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                            </li>
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a>
                                    </p>
                                </div>
                                <div class="col s4 no-padding">
                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/ end items list -->
          </div>

        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer indigo" style="margin-left: -255px;">
    <div class="footer-copyright indigo" style="height: 30px;">
      <div class="container indigo" > 
        <div class="center-align" style="margin-top: -8px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skateshop © 2018
        </div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- masonry -->
    <script src="js/plugins/masonry.pkgd.min.js"></script>
    <!-- imagesloaded -->
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

    <script type="text/javascript">
    /*
    * Masonry container for eCommerce page
    */
    var $containerProducts = $("#products");
    $containerProducts.imagesLoaded(function() {
      $containerProducts.masonry({
        itemSelector: ".product",
        columnWidth: ".product-sizer",
      });
    });

    </script>

    
</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Skateshop</title>

	<link rel="icon" href="./images/favicon/favicon-32x32.png" sizes="32x32">
</head>
<body>
<h1>Landing Page</h1>

<ul>
	<li><a href="./login">login</a></li>
	<li><a href="./admin">admin</a></li>
</ul>

</body>
</html> -->