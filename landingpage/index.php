<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
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
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->    
    <link href="css/layouts/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="./js/plugins/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">

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


    <div id="app"></div>





    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">World Market</h5>
                    <p class="grey-text text-lighten-4">World map, world regions, countries and cities.</p>
                    <div id="world-map-markers"></div>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Sales by Country</h5>
                    <p class="grey-text text-lighten-4">A sample polar chart to show sales by country.</p>
                    <div id="polar-chart-holder">
                        <canvas id="polar-chart-country" width="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Skateshop © 2018 
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="./">Ulangkaya and Cano</a></span>
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
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline --> 
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>    

    <!-- masonry -->
    <script src="js/plugins/masonry.pkgd.min.js"></script>
    <!-- imagesloaded -->
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>    
    <!--axios js-->
    <script type="text/javascript" src="./js/plugins/axios/axios.min.js"></script>
    <!--swal-->
    <script type="text/javascript" src="./js/plugins/sweetalert/sweetalert.min.js"></script>   

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
/*        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);*/
    });


/*
    $(function() {
      // Google Maps  
      $('#map-canvas').addClass('loading');    
      var latlng = new google.maps.LatLng(40.6700, -73.9400); // Set your Lat. Log. New York
      var settings = {
          zoom: 10,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false,
          scrollwheel: false,
          draggable: true,
          styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}],
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: false,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},            
      };
      var map = new google.maps.Map(document.getElementById("map-canvas"), settings);

      google.maps.event.addDomListener(window, "resize", function() {
          var center = map.getCenter();
          google.maps.event.trigger(map, "resize");
          map.setCenter(center);
          $('#map-canvas').removeClass('loading');
      });

      var contentString =
          '<div id="info-window">'+
          '<p>18 McLuice Road, Vellyon Hills,<br /> New York, NY 10010<br /><a href="https://plus.google.com/102896039836143247306/about?gl=za&hl=en" target="_blank">Get directions</a></p>'+
          '</div>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var companyImage = new google.maps.MarkerImage('images/map-marker.png',
          new google.maps.Size(36,62),// Width and height of the marker
          new google.maps.Point(0,0),
          new google.maps.Point(18,52)// Position of the marker 
      );

      var companyPos = new google.maps.LatLng(40.6700, -73.9400);

      var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          title:"Shapeshift Interactive",
          zIndex: 3});

      google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
          pageView('/#address');
      });
    });

    */
    </script>



    <script>
        class App{
            constructor(){
                this.state = {
                    products: [],
                    cart:[]
                };
            }

            render(html, component){
                component.innerHTML = html;
            }

            fetchProducts(callback){
                axios.get('./php/product',{
                    params:{
                        action: "getAll"
                    }
                })
                .then(function(res){
                    component.state.products = res.data;                    
                    callback();
                })
                .catch(function(err){
                    console.error(err);
                });
            }            
        }

        class Component extends App{
            constructor(){
                super();

                this.landingPage();
                this.fetchProducts(function(){
                    // console.log("Products fetched successfully!");
                    // console.log(component.state.products);

                    component.initMasonry();
                    component.landingPage_loadFeaturedProducts();
                });

                $('#editmycart').click(function(){
                    component.editmycartPage();               
                });

                $('#viewitems').click(function(){
                    component.viewitemsPage();               
                });

            }


            /*Landing Page Functions*/

            landingPage(){
                let html = `
                    <!-- START HEADER -->
                    <header id="header" class="page-topbar">${this.landingPage_header()}</header>
                    <!-- END HEADER -->


                    <!-- START LEFT SIDEBAR NAV-->
                    <aside id="left-sidebar-nav">${this.landingPage_leftSideBar()}</aside>
                    <!-- END LEFT SIDEBAR NAV-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!-- START MAIN -->
                    <div id="main">
                        <!-- START WRAPPER -->
                        <div class="wrapper" style="margin-top: 380px;">

                            <!-- //////////////////////////////////////////////////////////////////////////// -->

                            <!-- START CONTENT -->
                            <section id="content" >${this.landingPage_content()} </section>
                            <!-- END CONTENT -->

                            <!-- //////////////////////////////////////////////////////////////////////////// -->
                            <!-- START RIGHT SIDEBAR NAV-->
                            <aside id="right-sidebar-nav">${this.landingPage_rightSideBar()}</aside>
                            <!-- LEFT RIGHT SIDEBAR NAV-->
                        </div>
                        <!-- END WRAPPER -->
                    </div>
                    <!-- END MAIN -->
                `;

                this.render(html, $('#app')[0]);
            }

            landingPage_header(){
                return `
                    <!-- start header nav-->
                    <div class="navbar-fixed">
                        <nav class="navbar-color indigo" style="opacity: 0.95;">
                            <div class="nav-wrapper">
                                <ul class="left">                      
                                  <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Skateshop</span></h1></li>
                                </ul>
                                <ul class="right hide-on-med-and-down">

                                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                                    </li>
                                 
                                    <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-editor-format-color-fill amber-text"></i></a>
                                    </li>
                                </ul>

                            </div>
                        </nav>

                        <div class="slider" >
                            <ul class="slides">
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
                    <!-- end header nav-->
                `;
            }

            landingPage_leftSideBar(){
                return `
                    <ul id="slide-out" class="side-nav leftside-navigation">
                        <li class="user-details cyan darken-2">
                            <div class="row" style="margin-top:-20px" >
                                <div class="col col s12" >                                    
                                    <div style="font-size:0.6em;color:white;" >Total Amount</div>
                                    <div  class="white-text " style="font-size:1.5em;margin-top:-20px;">
                                        <span class="amber-text darken-2" style="font-size:0.6em;">Php</span> 
                                        <span class="pink-text darken-2"><strong id="txtMyCartTotal">0.00</strong></span>                                         
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="li-hover">
                            <p class="right" style="margin-top:4px;margin-right:10px;">
                                    <u><a href="#editmycart" id="editmycart" class="blue-text">Edit</a></u>
                            <p class="ultra-small margin more-text">MY CART</p>
                            <div class="clearfix"></div>
                        </li>
                        <li class="li-hover" id="mycart">
                            <div class="row" style="margin-left:15px;margin-top:15px;">
                                <div class="row">
                                    <div class="col s12" style="margin-top:-30px;margin-bottom:5px;">
                                        <div style="font-size:0.7em"><em>Empty Cart</em></div>
                                    </div>                                  
                                </div>
                            </div>
                            <div style="margin-top:-90px;">
                                <p class="right" style="margin-top:4px;margin-right:10px;">
                                    <span style="font-size:0.6em">Php</span> 0.00</p>
                                <p class="ultra-small margin more-text">TOTAL</p>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        
                        
                        <li class="li-hover"><div class="divider" style="margin-top:10px;"></div></li>

                        <li class="li-hover"><p class="ultra-small margin more-text">SEE MORE</p></li>
                        <li class="bold active"><a href="./" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Featured Items</a>
                        </li>
                        <li class="bold"><a href="#viewitems" id="viewitems" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> View Items</a>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> Customize</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="#2D">2D Setup</a>
                                            </li>
                                            <li><a href="#3D">3D Setup</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold"><a href="#tips" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Skater Tips</a>

                            <br/>
                            <br/>
                            <br/>
                            <br/>
                        </li>
                    </ul>
                    
                    <a href="#" onclick="component.loadMyCart()" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light indigo darken-4"><i class="mdi-maps-local-grocery-store indigo darken-2"></i></a>
                `;
            }

            landingPage_content(){
                return `
                    <!--start container-->
                    <div class="container">

                        <div id="products" class="row"> </div>


                    </div>
                    <!--end container-->
                `;                
            }

            landingPage_rightSideBar(){
                return `
                    <ul id="chat-out" class="side-nav rightside-navigation">
                        <li class="li-hover">
                        <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                        <div id="right-search" class="row">
                            <form class="col s12">
                                <div class="input-field">
                                    <i class="mdi-action-search prefix"></i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Search</label>
                                </div>
                            </form>
                        </div>
                        </li>
                        <li class="li-hover">
                            <ul class="chat-collapsible" data-collapsible="expandable">
                            <li>
                                <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                                <div class="collapsible-body recent-activity">
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">just now</a>
                                            <p>Jim Doe Purchased new equipments for zonal office.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">Yesterday</a>
                                            <p>Your Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">5 Days Ago</a>
                                            <p>Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">Last Week</a>
                                            <p>Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">5 Days Ago</a>
                                            <p>Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                                <div class="collapsible-body sales-repoart">
                                    <div class="sales-repoart-list  chat-out-list row">
                                        <div class="col s8">Target Salse</div>
                                        <div class="col s4"><span id="sales-line-1"></span>
                                        </div>
                                    </div>
                                    <div class="sales-repoart-list chat-out-list row">
                                        <div class="col s8">Payment Due</div>
                                        <div class="col s4"><span id="sales-bar-1"></span>
                                        </div>
                                    </div>
                                    <div class="sales-repoart-list chat-out-list row">
                                        <div class="col s8">Total Delivery</div>
                                        <div class="col s4"><span id="sales-line-2"></span>
                                        </div>
                                    </div>
                                    <div class="sales-repoart-list chat-out-list row">
                                        <div class="col s8">Total Progress</div>
                                        <div class="col s4"><span id="sales-bar-2"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                                <div class="collapsible-body favorite-associates">
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Eileen Sideways</p>
                                            <p class="place">Los Angeles, CA</p>
                                        </div>
                                    </div>
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Zaham Sindil</p>
                                            <p class="place">San Francisco, CA</p>
                                        </div>
                                    </div>
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Renov Leongal</p>
                                            <p class="place">Cebu City, Philippines</p>
                                        </div>
                                    </div>
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Weno Carasbong</p>
                                            <p>Tokyo, Japan</p>
                                        </div>
                                    </div>
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Nusja Nawancali</p>
                                            <p class="place">Bangkok, Thailand</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            </ul>
                        </li>
                    </ul>
                `;
            }

            landingPage_loadFeaturedProducts(){
                let p = component.state.products;
                let result = [];
                p.map((obj)=>{
                    if(obj.featured == "1" && obj.deleted == "0"){
                        result.push(obj);
                    }
                });
                // console.log(result);
                let html = `<div class="product-sizer"></div>`;
                result.map((obj)=>{
                    html += `                    
                            <div class="product">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2" style="font-size:0.7em;" >P${obj.price}</a>
                                        

                                        <a href="#"><img src="${obj.image}" alt="product-img">
                                        </a>
                                    </div>
                                    <ul class="card-action-buttons">                                        
                                        <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                                        </li>
                                    </ul>
                                    <div class="card-content">

                                        <div class="row">
                                            <div class="col s8">
                                                <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">${obj.title}</a>
                                                </p>
                                            </div>
                                            <div class="col s4 no-padding">
                                                <strike><strong class="red-text">P${obj.list_price}</strong></strike>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> ${obj.title}</span>

                                        <h6 style="font-size:0.6em;"><i>Description</i></h6>
                                        <div><p style="font-size:0.9em;">${obj.description}</p></div>
                                        
                                        <h6 style="font-size:0.6em;"><i>Category</i></h6>
                                        <div><p style="font-size:0.9em;">${obj.categories}</p></div>

                                        <h6 style="font-size:0.6em;"><i>Brand</i></h6>
                                        <div><p style="font-size:0.9em;">${obj.brand}</p></div>

                                        <h6 style="font-size:0.6em;"><i>Price</i></h6>
                                        <div class="row">
                                            <div class="col s6">
                                                <strike><strong class="red-text">Php ${obj.list_price}</strong></strike>
                                            </div>
                                            <div class="col s6">
                                                <span>Php ${obj.price}</span>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="divider"></div>
                                        <br/>
                                        <button onclick="component.addToCart(${obj.id})" class="btn btn-large green waves-effect waves-light waves-block waves-cyan" style="width:100%"><i class="mdi-maps-local-grocery-store left"></i>Add to Cart</button>
                                    </div>
                                </div>
                            </div> 
                    `;
                });
                this.render(html,$('#products')[0]);
            }


            /*Edit My Cart Page Functions*/

                /*
                    TODO's
                    a. CRUD for component.state.cart
                    b. include image in the list
                */

            editmycartPage(){
                this.clearContent();

                let html = `
                    <div id="card-widgets" style="margin-top:-300px;">
                        <div class="row">
                            <div class="col s12 m12 l3">&nbsp;</div>
                            <div class="col s12 m12 l6">
                                <ul id="mycart-collection" class="collection"> </ul>
                            </div>
                        </div>
                    </div>
                `;
                this.render(html,$('#content')[0]);

                let cart = component.state.cart;                
                html = `
                        <li class="collection-item avatar">
                            <i class="mdi-maps-local-grocery-store circle indigo darken-2"></i>
                            <span class="collection-header">My Cart</span>
                            <p>Update or Remove Items</p>
                            <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                        </li>
                `;
                for(let i=0;i<cart.length;i++){
                    let price = parseFloat(cart[i].product.price);
                    let qty = parseInt(cart[i].qty);
                    let total = parseFloat(price * qty);                    
                    html += `                        
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s7">
                                    <p class="collections-title"><strong>Item#${i+1}</strong></p>
                                    <p class="collections-content">
                                        ${cart[i].product.title} <br/>
                                        <em>${cart[i].product.description}</em> <br/>
                                        Php ${cart[i].product.price}
                                    </p>
                                </div>
                                <div class="col s2">
                                    <input type="number" value="${cart[i].qty}"/>
                                </div>
                                <div class="col s3">
                                    <p class="collections-content">${total}</p>       
                                </div>
                            </div>
                        </li>
                    `;
                }
                this.render(html,$('#mycart-collection')[0]);
            }


            /*View Items Page Functions*/

                /* 
                    TODO's

                        a. initialize material tabs
                        b. each tab = category

                */

            viewitemsPage(){
                this.clearContent();

                let html = `
                             <div id="multi-color-tab" class="section">
                                    <h4 class="header">Multi Color with icon tab</h4>
                                    <div class="row">
                                      <div class="col s12 m4 l3">
                                        <p>With the help of materialize admin panel theme colors & icon options you can create multi Color with icon tab.</p>
                                      </div>
                                      <div class="col s12 m8 l9">
                                        <div class="row">
                                          <div class="col s12">
                                            <ul class="tabs tab-demo-active z-depth-1">
                                              <li class="tab col s3"><a class="white-text red darken-1 waves-effect waves-light" href="#sapien1"><i class="mdi-action-perm-identity"></i> Identity</a>
                                              </li>
                                              <li class="tab col s3"><a class="white-text purple darken-1 waves-effect waves-light active" href="#activeone1"><i class="mdi-action-settings-display"></i> Display</a>
                                              </li>
                                              <li class="tab col s3"><a class="white-text light-blue darken-1 waves-effect waves-light" href="#vestibulum1"><i class="mdi-action-speaker-notes"></i> Notes</a>
                                              </li>
                                            </ul>
                                          </div>
                                          <div class="col s12">
                                            <div id="sapien1" class="col s12  red lighten-3">
                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                              <ol>
                                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                <li>Aliquam tincidunt mauris eu risus.</li>
                                                <li>Vestibulum auctor dapibus neque.</li>
                                              </ol>

                                            </div>
                                            <div id="activeone1" class="col s12  purple lighten-3">
                                              <dl>
                                                <dt>Definition list</dt>
                                                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                                                <dt>Lorem ipsum dolor sit amet</dt>
                                                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                                              </dl>
                                            </div>
                                            <div id="vestibulum1" class="col s12  light-blue lighten-3">
                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                                                mi vitae est. Mauris placerat eleifend leo.</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                `;
                this.render(html,$('#content')[0]);
                $('.tabs').tabs();
            }


            /* Utils */
            initMasonry(){
                var $containerProducts = $("#products");
                $containerProducts.imagesLoaded(function() {
                  $containerProducts.masonry({
                    itemSelector: ".product",
                    columnWidth: ".product-sizer",
                  });
                }); 
            }

            addToCart(id){
                let p = component.state.products;
                let obj = {};
                for(let i=0;i<p.length;i++){
                    if(p[i].id==id){
                        obj = p[i];
                        break;
                    }
                }
                //console.log(obj);

                swal({   
                        title: "Product Quantity",   
                        text: "Type how many items you wish to add to your cart?",   
                        type: "input",   showCancelButton: true,   
                        closeOnConfirm: false,   
                        animation: "slide-from-top",   
                        inputPlaceholder: "1" }, 
                        function(inputValue){   
                            if (inputValue === false) return false;      
                            if (inputValue === "") {     
                                swal.showInputError("You need to write something!");     
                                return false   
                            }      
                            swal("Saved to My Cart", "Done! You choose " + inputValue + " as qty for this product", "success"); 
                            component.state.cart.push({
                                product:obj,
                                qty:inputValue
                            });
                    });

            }

            loadMyCart(){
                //console.log(component.state.cart);
                let cart = component.state.cart;
                if(cart.length>0){
                    let html = `
                            <div class="row" style="margin-left:15px;margin-top:15px;">
                                <div class="row">
                    `;
                    let i=0;
                    let total_overall = 0;
                    cart.map((c)=>{
                        let price = parseFloat(c.product.price);
                        let qty = parseInt(c.qty);
                        let total = parseFloat(price * qty);
                        html += `
                            
                                    <div class="col s12" style="margin-top:-30px;margin-bottom:5px;">
                                        <div style="font-size:0.7em"><em>Item ${++i}</em></div>
                                        <div style="margin-top:-30px;">${fixedTitle(c.product.title)}</div>
                                        <div style="margin-top:-30px;" class="right"><span style="font-size:0.6em;">Php</span>${total}</div>
                                        <div style="font-size:0.8em;margin-top:-30px;">${c.product.price} x ${c.qty}</div>
                                    </div>                                  
                                
                        `;
                        total_overall += total;
                    });
                    function fixedTitle(title){
                        return (title.length>25)?title.substring(0,25)+"...":title;
                    }

                    html += `
                                </div>
                            </div>
                            <div style="margin-top:-90px;">
                                <p class="right" style="margin-top:4px;margin-right:10px;">
                                    <span style="font-size:0.6em;">Php</span>${total_overall}
                                    </p>
                                <p class="ultra-small margin more-text">TOTAL</p>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-small amber darken-4 white-text waves-effect waves-light">
                                    CHECKOUT NOW 
                                    <i class="mdi-action-exit-to-app"></i>
                                </a>
                                
                            </div>
                    `;
                    this.render(html,$('#mycart')[0]);
                    this.render(total_overall,$('#txtMyCartTotal')[0]);

                }else{
                    this.render(`
                        <div class="row" style="margin-left:15px;margin-top:15px;">
                            <div class="row">
                                <div class="col s12" style="margin-top:-30px;margin-bottom:5px;">
                                    <div style="font-size:0.7em"><em>Empty Cart</em></div>
                                </div>                                  
                            </div>
                        </div>
                        <div style="margin-top:-90px;">
                            <p class="right" style="margin-top:4px;margin-right:10px;">
                                <span style="font-size:0.6em">Php</span> 0.00</p>
                            <p class="ultra-small margin more-text">TOTAL</p>
                            <div class="clearfix"></div>
                        </div>
                    `,$('#mycart')[0]);
                }
            }

            clearContent(){
                $('.slider').hide();
                $('#products').hide();
                $('#card-widgets').hide();
            }

        }

        let component = new Component();
        
    </script>


</body>

</html>