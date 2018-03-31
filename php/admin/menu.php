    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color indigo">
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
                        <a href="./logout" class="blue-grey-text"><i class="mdi-hardware-keyboard-tab "></i> Logout</a>
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
                        <a href="./admin" class="indigo-text darken-4">
                            <i class="mdi-action-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="dropdown-menu indigo-text darken-4" href="#!" data-activates="Products">
                            <i class="mdi-content-content-paste"></i>
                            <span>Products<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>

                    
                    <li>
                        <a href="#brands" id="btnBrands" class="indigo-text darken-4">
                            <i class="mdi-action-credit-card"></i>
                            <span>Brands</span>
                        </a>
                    </li>

                    <li>
                        <a href="#categories" id="btnCategories" class="indigo-text darken-4">
                            <i class="mdi-editor-insert-invitation"></i>
                            <span>Categories</span>
                        </a>
                    </li>

                    <li>
                        <a href="#orders" id="btnOrders" class="indigo-text darken-4">
                            <i class="mdi-editor-format-list-numbered"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    
                    
                  </ul>
                </div>
              </nav>

                <!-- Products-->
                <ul id="Products" class="dropdownProduct dropdown-content dropdown-horizontal-list "> </ul>

             
            <!-- HORIZONTL NAV END-->
            
            

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->