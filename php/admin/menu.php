    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>                    
                    <ul class="right hide-on-med-and-down">
                       
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"></i>
                        
                        </a>
                        </li> 
                    </ul>
                    
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">                      
                      <li>
                        <a href="./logout"><i class="mdi-action-add-shopping-cart"></i> Logout</a>
                      </li>
                      <li class="divider"></li>
                      
                    </ul>
                </div>
            </nav>

            <!-- HORIZONTL NAV START-->
             <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">                  
                  <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
                    <li>
                        <a href="./admin" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Products">
                            <i class="mdi-image-palette"></i>
                            <span>Products<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>

                    
                    <li>
                        <a href="#brands" id="btnBrands" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Brands</span>
                        </a>
                    </li>

                    <li>
                        <a href="#categories" id="btnCategories" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Categories</span>
                        </a>
                    </li>

                    <li>
                        <a href="#orders" id="btnOrders" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    
                    
                  </ul>
                </div>
              </nav>

                <!-- Products-->
                <ul id="Products" class="dropdownProduct dropdown-content dropdown-horizontal-list">
                  <li><a href="ui-buttons.html" class="cyan-text">Decks</a></li>
                  <li><a href="ui-badges.html" class="cyan-text">Wheels</a></li>                  
                  <li><a href="ui-cards.html" class="cyan-text">Trucks</a></li>
                  <li><a href="ui-collections.html" class="cyan-text">Grip Tape</a></li>                  
                  <li><a href="ui-accordions.html" class="cyan-text">Bearings</a></li>
                  <li><a href="ui-navbar.html" class="cyan-text">Risers</a></li>
                  <li><a href="ui-pagination.html" class="cyan-text">Hardware</a></li>
                  <li><a href="ui-pagination.html" class="cyan-text">Misc</a></li>
                </ul>

                <!-- Tablesdropdown -->
                <ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="table-basic.html" class="cyan-text">Basic Tables</a></li>
                  <li><a href="table-data.html" class="cyan-text">Data Tables</a></li>
                </ul>

                <!-- Formsdropdown -->
                <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="form-elements.html" class="cyan-text">Form Elements</a></li>
                  <li><a href="form-layouts.html" class="cyan-text">Form Layouts</a></li>
                </ul>

                <!-- Pagesdropdown -->
                <ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">
                    
                    <li><a href="page-invoice.html" class="cyan-text">Invoice</a></li>
                    <li><a href="page-404.html" class="cyan-text">404</a></li>
                    <li><a href="page-500.html" class="cyan-text">500</a></li>
                    <li><a href="page-blank.html" class="cyan-text">Blank</a></li>
                </ul>

                <!-- eCommers -->
                <ul id="eCommersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="eCommerce-products-page.html"  class="cyan-text">eCommerce Products </a></li>
                    <li><a href="eCommerce-pricing.html"  class="cyan-text">Pricing Page</a></li>
                    <li><a href="eCommerce-invoice.html"  class="cyan-text">Invoice</a></li>
                </ul>

                <!-- Mediasdropdown -->
                <ul id="Mediasdropdown" class="dropdown-content dropdown-horizontal-list">                    
                    <li><a href="media-gallary-page.html"  class="cyan-text">Gallary Page</a></li>
                    <li><a href="media-hover-effects.html"  class="cyan-text">Image Hover Effects</a></li>
                </ul>

                <!-- Usersdropdown -->
                <ul id="Usersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="user-profile-page.html"  class="cyan-text">User Profile</a></li>
                    <li><a href="user-login.html"  class="cyan-text">Login</a></li>
                    <li><a href="user-register.html" class="cyan-text">Register</a></li>
                    <li><a href="user-forgot-password.html" class="cyan-text">Forgot Password</a></li>                    
                    <li><a href="user-lock-screen.html" class="cyan-text">Lock Screen</a></li>
                    <li><a href="user-sesssion-timeout.html" class="cyan-text">Session Timeout</a></li>
                </ul>

                <!-- Chartsdropdown -->
                <ul id="Chartsdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="charts-chartjs.html" class="cyan-text">Chart JS</a></li>
                    <li><a href="charts-chartist.html" class="cyan-text">Chartist</a></li>
                    <li><a href="charts-morris.html" class="cyan-text">Morris Charts</a></li>
                    <li><a href="charts-xcharts.html" class="cyan-text">xCharts</a></li>
                    <li><a href="charts-flotcharts.html" class="cyan-text">Flot Charts</a></li>
                    <li><a href="charts-sparklines.html" class="cyan-text">Sparkline Charts</a></li>
                </ul>
            <!-- HORIZONTL NAV END-->
            
            

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->