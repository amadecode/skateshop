<?php include('./php/auth.php'); ?>
<?php include('./php/admin/header.php'); ?>



<body id="layouts-horizontal">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

<?php include('./php/admin/menu.php'); ?>

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <?php include('./php/admin/sidebarNav.php'); ?>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div id="app" class="container"></div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
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
            </aside>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->


<?php include('./php/admin/footer.php'); ?>

<script type="text/javascript">
    class App{
        constructor(){
            this.state = {
                brand: [],
                category: [],
                product: [],
                table_brand: null,
                table_brand_selected_id: null,
                table_category: null,
                table_category_selected_id: null,
                table_product: null,
                table_product_selected_id: null
            };
            

            
        }

        render(html, component){
            component.innerHTML = html;
        }

        escapeHTML(text) {          
            var map = {
                '&amp;': '&',
                '&#038;': "&",
                '&lt;': '<',
                '&gt;': '>',
                '&quot;': '"',
                '&#039;': "'",
                '&#8217;': "’",
                '&#8216;': "‘",
                '&#8211;': "–",
                '&#8212;': "—",
                '&#8230;': "…",
                '&#8221;': '”'
            };
            return text.replace(/\&[\w\d\#]{2,5}\;/g, function(m) { return map[m]; });    
        }        
    }

    class Component extends App{
        constructor(){
            super();
        }

        dashboard(){
            let html = `

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Decks</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-barx" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Wheels</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-linex" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Trucks</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristatex" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Grip Tape</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebarx" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content indigo white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Bearings</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  indigo darken-2">
                                        <div id="clients-barx" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content amber lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Risers</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  amber darken-2">
                                        <div id="invoice-linex" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content orange white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Hardware</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action orange darken-2">
                                        <div id="profit-tristatex" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content teal white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Misc</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action teal darken-2">
                                        <div id="sales-compositebarx" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--work collections start-->
                    <div id="work-collections">
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-file-folder circle light-blue darken-2"></i>
                                        <span class="collection-header">Featured Products</span>
                                        <p>Products that are popular</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Web App</p>
                                                <p class="collections-content">AEC Company</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat cyan">Development</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-1"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Mobile App for Social</p>
                                                <p class="collections-content">iSocial App</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat grey darken-3">UI/UX</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-2"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Website</p>
                                                <p class="collections-content">MediTab</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat teal">Marketing</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-3"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">AdWord campaign</p>
                                                <p class="collections-content">True Line</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat green">SEO</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-4"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s12 m12 l6">
                                <ul id="issues-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-bug-report circle red darken-2"></i>
                                        <span class="collection-header">Recent Orders</span>
                                        <p>List of recent orders</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"><strong>#102</strong> Home Page</p>
                                                <p class="collections-content">Web Project</p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat pink accent-2">P1</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                     <div class="determinate" style="width: 70%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"><strong>#108</strong> API Fix</p>
                                                <p class="collections-content">API Project </p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat yellow darken-4">P2</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 40%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"><strong>#205</strong> Profile page css</p>
                                                <p class="collections-content">New Project </p>
                                            </div>
                                            <div class="col s2">                                                
                                                <span class="task-cat light-green darken-3">P3</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 95%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"><strong>#188</strong> SAP Changes</p>
                                                <p class="collections-content">SAP Project</p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat pink accent-2">P1</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                     <div class="determinate" style="width: 10%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--work collections end-->                
            `;
            this.render(html, $('#app')[0]);

            this.populateDropdownProduct();            

            $('#btnBrands').click(function(){
                component.brands();
            });

            $('#btnCategories').click(function(){
                component.categories();
            });
        }

        populateDropdownProduct(){
            axios.get('./php/category', {
                params: {
                    action: "getAll" 
                }
            })
            .then(function (res) {
                let html = ``;
                let data = res.data;

                let parents = component.getCategoryParents(res.data);
                for(let i=0;i<parents.length;i++){
                    html += `
                        <li>
                            <a class="dropdownProductMenu" id="dropdownProduct-${parents[i]}" href="#${parents[i]}">${parents[i]}</a>                             
                        </li>
                    `;
                }   
                component.render(html,$('.dropdownProduct')[0]);
                $('[class=dropdownProductMenu]').each(function(){                    
                    $(`#${this.id}`).click(function(){
                        let arr = this.id.split("-");
                        let product = arr[1];
                        component.products(product);
                        //console.log(arr[1]);                     
                    });                    
                });
            })
            .catch(function (error) {
                swal({
                    title: "Error",
                    text: error,
                    timer: 2000,
                    showConfirmButton: false
                }); 
            });           
        }

        getCategoryParents(category){            
            let parents = [];
            for(let i=0; i<category.length; i++){
                if(category[i].parent == "0"){
                    parents.push(component.escapeHTML(category[i].category));
                }
            }
            return parents;    
        }

        products(product){
            let html = `
                <br/>
                <div class="row">
                    <div class="col s12 m4">
                        <div>
                            <h1 style="margin:0px;">Manage Products</h1>
                            <label>Category: ${product.toUpperCase()}</label>
                        </div>
                        <br/>
                        <button id="btnAddBrand" class="btn teal">Add</button>
                        <button id="btnUpdateBrand" class="btn light-blue darken-2">Update</button>
                        <button id="btnDeleteBrand" class="btn pink darken-1">Delete</button>
                        <br/>
                        <br/>
                        <div class="input-field col s12">
                            <input id="txtNewProduct" type="text" placeholder="Product Title" />
                            <label id="lblNewProduct" for="txtNewProduct" class="active">Product Title</label>
                        </div>
                        
                        <div class="input-field col s6">
                            <input id="txtNewProductList" type="text" placeholder="0.00" />
                            <label id="lblNewProductList" for="txtNewProductList" class="active">Product List</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="txtNewProductListPrice" type="text" placeholder="0.00" />
                            <label id="lblNewProductListPrice" for="txtNewProductListPrice" class="active">Product List Price</label>
                        </div>
                        
                        <div class="input-field col s6">
                            <select id="selectProductBrand">
                                <option disabled selected>Choose Brand</option>
                                <option>OPtion A</option>
                                <option>OPtion B</option>
                            </select>
                            <label>Product Brand</label>
                        </div>
                        <div class="input-field col s6">
                            <input class="blue-text" id="txtNewProductCategory" type="text" readonly value="${product}" />
                            <label id="lblNewProductCategory" for="txtNewProductCategory" class="active">Product Category</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textareaProductDescription" class="materialize-textarea" length="120" placeholder="Product Description"></textarea>
                            <label id="lblProductDescription" for="textareaProductDescription">Product Description</label>
                        </div>
                        
                        <div class="switch col s4">
                            <div style="font-size:0.8rem;color:#9e9e9e;margin-bottom:25px;">Feature this Product</div>
                            <label id="switchProductFeature">
                                Off
                                <input type="checkbox">
                                <span class="lever"></span> On
                            </label>
                        </div>
                        
                        <div class="switch col s4">
                            <div style="font-size:0.8rem;color:#9e9e9e;margin-bottom:25px;">Hide this Product</div>
                            <label id="switchProductVisible">
                                Off
                                <input type="checkbox">
                                <span class="lever"></span> On
                            </label>
                        </div>
                        
                        <div class="switch col s4">
                            <div style="font-size:0.8rem;color:#9e9e9e;margin-bottom:10px;">Product Quantity</div>
                            <div class="col s8">
                                <input id="txtNewProductListPrice" type="number" placeholder="0" />
                            </div>
                            <div class="col s4" style="margin-top:20px;">
                                <span style="font-size:0.8rem;color:#9e9e9e;" >pcs</span>
                            </div>
                        </div>
                        
                        <div class="input-field col s12">                            
                            <div style="font-size:0.8rem;color:#9e9e9e;">Product Image</div>
                            <div class="col s6">
                                <img  style="width:140px;height:140px;" src="images/img1.jpg" alt="" class="circle input-field responsive-img valign">
                            </div>
                            <div class="col s6">
                                <button class="btn btn-primary" style="margin-top:110px;">Upload Image</button>
                            </div>

                        </div>

                    </div>
                    <div class="col s12 m8">
                        <table id="tblProducts" class="responsive-table display" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>                                    
                                    <th>Title</th>                                    
                                    <th>Price</th>                                    
                                    <th>List Price</th>                                    
                                    <th>Brand</th>
                                    <th>Categories</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Featured</th>
                                    <th>Visible</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody id="tblProductDetails"> </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="divider"></div> 
            `;
            this.render(html, $('#app')[0]);
            $('select').material_select();
            $('#lblProductDescription').addClass('active');  

            this.getProductDetails(product);

        }

        getProductDetails(product){

            this.fetchCategories(function(){
                console.log("########################");
                console.log(component.state.category);
            });

            let category_id = 0;
            
            /*for(let i=0;i<component.state.product.length;i++){
                if(product == component.state.product[i].category){
                    category_id = component.state.product[i].id;
                    break;
                }
            }*/

            console.log("category id: " + category_id);

            axios.get('./php/product', {
                params: {
                    action: "getAll" ,
                    category_id : category_id
                }
            })
            .then(function (res) {

                let html = ``;
                let data = res.data;
                component.state.product = [];
                for(let i=0;i<data.length;i++){                    
                    component.state.product.push({
                        id: data[i].id,
                        title: data[i].title,
                        price: data[i].price,
                        list_price: data[i].list_price,
                        brand: data[i].brand,
                        categories: data[i].categories,
                        image: data[i].image,
                        description: component.escapeHTML(data[i].description),
                        featured: data[i].featured,
                        deleted: data[i].deleted,
                        qty: data[i].qty
                    });
                }

                for(let i=0;i<data.length;i++){
                    html += `
                        <tr>
                            <td>${data[i].id}</td>
                            <td>${data[i].title}</td>
                            <td>${data[i].price}</td>
                            <td>${data[i].list_price}</td>
                            <td>${data[i].brand}</td>
                            <td>${data[i].categories}</td>
                            <td>${data[i].image}</td>                            
                            <td>${data[i].description}</td>                            
                            <td>${data[i].featured}</td>                            
                            <td>${data[i].deleted}</td>                            
                            <td>${data[i].qty}</td>                            
                        </tr>
                    `;
                }                    
                
                component.render(html,$('#tblProductDetails')[0]);
                component.state.table_category = $('#tblProducts').DataTable({
                    "columnDefs": [
                        {"targets": [ 0 ], "visible": false, "searchable": false },
                        {"targets": [ 2 ], "visible": false, "searchable": false },
                        {"targets": [ 3 ], "visible": false, "searchable": false },
                        {"targets": [ 6 ], "visible": false, "searchable": false },
                        ],
                        "order": [[ 0, "desc" ]]
                }); 


                /*html = `<option value="0" selected>Parent</option>`;
                for(let i=0;i<data.length;i++){      
                    if(data[i].parent=="0"){
                        html += `\n <option value="${data[i].id}">${data[i].category}</option> `;                        
                    }
                }               
                // console.log(html);
                component.render(html,$('#selectCategory')[0]);
                
                 */ 
                $('select').material_select();  
                
            })
            .catch(function (error) {
                swal({
                    title: "Error",
                    text: error,
                    timer: 2000,
                    showConfirmButton: false
                }); 
            });
        }        

        brands(){
            let html = `
                    <br/>
                    <div class="row">
                        <div class="col s12 m4">
                            <h1 style="margin-top:0px;">Manage Brands</h1>
                            <button id="btnAddBrand" class="btn teal">Add</button>
                            <button id="btnUpdateBrand" class="btn light-blue darken-2">Update</button>
                            <button id="btnDeleteBrand" class="btn pink darken-1">Delete</button>
                            <br/>
                            <br/>
                            <div class="input-field col s12">
                                <input id="txtNewBrand" type="text" placeholder="Brand Name" />
                                <label id="lblNewBrand" for="txtNewBrand" class="active">Brand Name</label>
                            </div>
                        </div>
                        <div class="col s12 m8">
                            <table id="tblBrands" class="responsive-table display" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>                                    
                                        <th>Brand</th>                                    
                                    </tr>
                                </thead>
                                <tbody id="tblBrandDetails"> </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="divider"></div> 
            `;
            this.render(html,$('#app')[0]);

            this.getBrandDetails();

            $('#btnAddBrand').click(function(){
                let brand = $('#txtNewBrand').val();
                if(brand.length<2){                    
                    swal({
                        title: "Invalid Input!",
                        text: "Make sure you have properly set the brand name",
                        timer: 2000,
                        showConfirmButton: false
                    });                   
                }else{                    
                    var params = new URLSearchParams();
                    params.append('action', 'insert');
                    params.append('brand', brand);
                    axios.post('./php/brand', params)
                    .then(function (res) {
                        //console.log(res);
                        swal({
                            title: res.data.status.toUpperCase(),
                            text: res.data.msg,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                        if(res.data.msg){
                            //component.getBrandDetails();
                            component.brands();
                        }
                    })
                    .catch(function (error) {
                        //console.log(error);
                        swal({
                            title: "Error",
                            text: error,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                    });
                }
            });

            $('#tblBrands tbody').on( 'click', 'tr', function () {
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    component.state.table_brand.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');

                    for(let i=0;i<component.state.brand.length;i++){
                        if($(this).find('td').html() == component.state.brand[i].brand){
                            component.state.table_brand_selected_id = component.state.brand[i].id;                              
                            $('#txtNewBrand').val(component.state.brand[i].brand);
                            break;                       
                        }
                    }
                    
                }
            });

            $('#btnUpdateBrand').click( function () { 
                if($('#txtNewBrand').val().length > 1){
                    var params = new URLSearchParams();
                    params.append('action', 'put');
                    params.append('id', component.state.table_brand_selected_id);
                    params.append('brand', $('#txtNewBrand').val());
                    axios.post('./php/brand', params)
                    .then(function (res) {
                        //console.log(res);
                        swal({
                            title: res.data.status.toUpperCase(),
                            text: res.data.msg,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                        if(res.data.msg){
                            component.state.table_brand_selected_id = null;
                            component.brands();
                        }
                    })
                    .catch(function (error) {
                        //console.log(error);
                        swal({
                            title: "Error",
                            text: error,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                    });
                }else{
                    swal({
                        title: "Error",
                        text: "Please select a record to be deleted!",
                        timer: 2000,
                        showConfirmButton: false
                    }); 
                }
                
            });

            $('#btnDeleteBrand').click( function () {                
                component.state.table_brand.row('.selected').remove().draw( false );                                

                if(component.state.table_brand_selected_id!=null){
                    var params = new URLSearchParams();
                    params.append('action', 'delete');
                    params.append('id', component.state.table_brand_selected_id);
                    axios.post('./php/brand', params)
                    .then(function (res) {
                        //console.log(res);
                        swal({
                            title: res.data.status.toUpperCase(),
                            text: res.data.msg,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                        if(res.data.msg){
                            component.state.table_brand_selected_id = null;
                            component.brands();
                        }
                    })
                    .catch(function (error) {
                        //console.log(error);
                        swal({
                            title: "Error",
                            text: error,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                    });
                }else{
                    swal({
                        title: "Error",
                        text: "Please select a record to be deleted!",
                        timer: 2000,
                        showConfirmButton: false
                    }); 
                }
                
            });            
        }

        getBrandDetails(){
            axios.get('./php/brand', {
                params: {
                    action: "getAll" 
                }
            })
            .then(function (res) {
                let html = ``;
                let data = res.data;
                component.state.brand = [];
                let brands = [];
                for(let i=0;i<data.length;i++){
                    html += `
                        <tr>
                            <td>${data[i].id}</td>
                            <td>${data[i].brand}</td>
                        </tr>
                    `;
                    component.state.brand.push({
                        id: data[i].id,
                        brand: data[i].brand
                    });
                }
                
                component.render(html,$('#tblBrandDetails')[0]);
                  
                component.state.table_brand = $('#tblBrands').DataTable({
                    "columnDefs": [
                        {
                            "targets": [ 0 ],
                            "visible": false,
                            "searchable": false
                        }],
                        "order": [[ 0, "desc" ]]
                });  

                /*JQUERY INITIALIZE SCRIPTS*/            
                $('select').material_select();
            })
            .catch(function (error) {
                //console.log(error);
                swal({
                    title: "Error",
                    text: error,
                    timer: 2000,
                    showConfirmButton: false
                }); 
            });
        }

        categories(){
            let html = `
                <br/>
                <div class="row">
                    <div class="col s12 m4">
                        <h1 style="margin-top:0px;">Manage Categories</h1>
                        
                            <button id="btnAddCategory" class="btn teal">Add</button>
                            <button id="btnUpdateCategory" class="btn light-blue darken-2">Update</button>
                            <button id="btnDeleteCategory" class="btn pink darken-1">Delete</button>
                        

                        <br/>
                        <br/>
                        
                        <div class="input-field col s12">
                            <input id="txtNewCategory" type="text" />
                            <label id="lblNewCategory" for="txtNewCategory" class="active">Category Name</label>
                        </div>   
       
                        <div class="input-field col s12">
                            <select name="options" id="selectCategory"> </select>
                            <label>Parent</label>
                        </div>


                    </div>
                    <div class="col s12 m8">
                        <table id="tblCategories" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Parent</th>
                                </tr>
                            </thead>
                            <tbody id="tblCategoryDetails"> </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="divider"></div> 
            `;
            this.render(html, $('#app')[0]);
   
            this.getCategoryDetails();  


            $('#tblCategories tbody').on( 'click', 'tr', function () {
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    component.state.table_category.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');

                    let selected_category = $(this).find('td').html();
  
                    for(let i=0;i<component.state.category.length;i++){                        
                        if(selected_category == component.state.category[i].category){
                            component.state.table_category_selected_id = component.state.category[i].id;
                            $('#lblNewCategory').addClass('active');
                            $('#txtNewCategory').val(component.state.category[i].category);
                            
                            // console.log(component.state.category[i].id);
                            // console.log(component.state.category[i].category);
                            // console.log(component.state.category[i].parent);
                            // console.log(component.getCategoryName(component.state.category[i].parent));
                            // $('#selectCategory > [value=29]').attr('selected', 'true');



                            $('#selectCategory').val(component.state.category[i].parent+"");
                            $('select').material_select();
                            

                            // $('option[value='+component.getCategoryName(component.state.category[i].parent)+']').attr('selected', 'selected');

                            break;                       
                        }
                    }
                    
                }
            });


            $('#btnAddCategory').click(function(){
                let category = $('#txtNewCategory').val();
                let parent = $('#selectCategory').val();
                if(category.length<2){                    
                    swal({
                        title: "Invalid Input!",
                        text: "Make sure you have properly set the category name",
                        timer: 2000,
                        showConfirmButton: false
                    });                   
                }else{
                    var params = new URLSearchParams();
                    params.append('action', 'insert');
                    params.append('category', category);
                    params.append('parent', parent);
                    axios.post('./php/category', params)
                    .then(function (res) {
                        //console.log(res);
                        swal({
                            title: res.data.status.toUpperCase(),
                            text: res.data.msg,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                        if(res.data.msg){
                            //component.getBrandDetails();
                            component.categories();
                        }
                    })
                    .catch(function (error) {
                        //console.log(error);
                        swal({
                            title: "Error",
                            text: error,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                    });    
                }
            });

            $('#btnUpdateCategory').click(function(){
                let category = $('#txtNewCategory').val();
                let parent = $('#selectCategory').val();
                if(category.length<2){                    
                    swal({
                        title: "Invalid Input!",
                        text: "Make sure you have properly set the category name",
                        timer: 2000,
                        showConfirmButton: false
                    });                   
                }else{
                    var params = new URLSearchParams();
                    params.append('action', 'put');
                    params.append('id', component.state.table_category_selected_id);
                    params.append('category', category);
                    params.append('parent', parent);
                    axios.post('./php/category', params)
                    .then(function (res) {
                        //console.log(res);
                        swal({
                            title: res.data.status.toUpperCase(),
                            text: res.data.msg,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                        if(res.data.msg){
                            component.state.table_category_selected_id = null;
                            component.categories();
                        }
                    })
                    .catch(function (error) {
                        //console.log(error);
                        swal({
                            title: "Error",
                            text: error,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                    });                      
                }
            });

            $('#btnDeleteCategory').click(function(){

                //Count Parent References
                function countParentReferences(){
                    let id = component.state.table_category_selected_id;
                    let cat_list = component.state.category;
                    let count = 0;
                    for(let i=0;i<cat_list.length;i++){
                        if(cat_list[i].parent == id){
                            count++;
                        }
                    }
                    return count;
                }
                let ref = countParentReferences();
                if(ref>0){
                    //console.log("is parent with " + ref + " references");
                    swal({    
                            title: "Are you sure?",
                            text: "You will delete this parent with " + ref +" categories!",   
                            type: "warning",   
                            showCancelButton: true,   
                            confirmButtonColor: "#DD6B55",   
                            confirmButtonText: "Yes, delete it!",   
                            closeOnConfirm: false 
                        }, 
                        function(){   
                            if(component.state.table_category_selected_id!=null){
                                component.state.table_category.row('.selected').remove().draw( false );  
                                var params = new URLSearchParams();
                                params.append('action', 'deleteparent');
                                params.append('id', component.state.table_category_selected_id);
                                axios.post('./php/category', params)
                                .then(function (res) {
                                    //console.log(res);
                                    swal({
                                        title: res.data.status.toUpperCase(),
                                        text: res.data.msg,
                                        timer: 2000,
                                        showConfirmButton: false
                                    }); 
                                    if(res.data.msg){
                                        component.state.table_category_selected_id = null;
                                        component.categories();
                                        swal("Deleted!", "Category has been deleted.", "success"); 
                                    }
                                })
                                .catch(function (error) {
                                    //console.log(error);
                                    swal({
                                        title: "Error",
                                        text: error,
                                        timer: 2000,
                                        showConfirmButton: false
                                    }); 
                                });
                            }else{
                                swal({
                                    title: "Error",
                                    text: "Please select a record to be deleted!",
                                    timer: 2000,
                                    showConfirmButton: false
                                }); 
                            }
                            
                        });
                }else{
                    component.state.table_category.row('.selected').remove().draw( false );  
                    var params = new URLSearchParams();
                    params.append('action', 'delete');
                    params.append('id', component.state.table_category_selected_id);
                    axios.post('./php/category', params)
                    .then(function (res) {
                        //console.log(res);
                        swal({
                            title: res.data.status.toUpperCase(),
                            text: res.data.msg,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                        if(res.data.msg){
                            component.state.table_category_selected_id = null;
                            component.categories();
                            swal("Deleted!", "Category has been deleted.", "success"); 
                        }
                    })
                    .catch(function (error) {
                        //console.log(error);
                        swal({
                            title: "Error",
                            text: error,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                    });
                }

                /*                              

                if(component.state.table_category_selected_id!=null){
                    var params = new URLSearchParams();
                    params.append('action', 'delete');
                    params.append('id', component.state.table_category_selected_id);
                    axios.post('./php/category', params)
                    .then(function (res) {
                        //console.log(res);
                        swal({
                            title: res.data.status.toUpperCase(),
                            text: res.data.msg,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                        if(res.data.msg){
                            component.state.table_brand_selected_id = null;
                            component.brands();
                        }
                    })
                    .catch(function (error) {
                        //console.log(error);
                        swal({
                            title: "Error",
                            text: error,
                            timer: 2000,
                            showConfirmButton: false
                        }); 
                    });
                }else{
                    swal({
                        title: "Error",
                        text: "Please select a record to be deleted!",
                        timer: 2000,
                        showConfirmButton: false
                    }); 
                } */               
            });
        }

        getCategoryDetails(){
            axios.get('./php/category', {
                params: {
                    action: "getAll" 
                }
            })
            .then(function (res) {

                let html = ``;
                let data = res.data;
                component.state.category = [];
                for(let i=0;i<data.length;i++){                    
                    component.state.category.push({
                        id: data[i].id,
                        category: component.escapeHTML(data[i].category),
                        parent: data[i].parent
                    });
                }



                for(let i=0;i<data.length;i++){
                    html += `
                        <tr>
                            <td>${data[i].id}</td>
                            <td>${data[i].category}</td>
                            <td>${component.getCategoryName(data[i].parent)}</td>
                        </tr>
                    `;
                }                    
                
                component.render(html,$('#tblCategoryDetails')[0]);
                component.state.table_category = $('#tblCategories').DataTable({
                    "columnDefs": [
                        {
                            "targets": [ 0 ],
                            "visible": false,
                            "searchable": false
                        }],
                        "order": [[ 0, "desc" ]]
                }); 


                html = `<option value="0" selected>Parent</option>`;
                for(let i=0;i<data.length;i++){      
                    if(data[i].parent=="0"){
                        html += `\n <option value="${data[i].id}">${data[i].category}</option> `;                        
                    }
                }               
                // console.log(html);
                component.render(html,$('#selectCategory')[0]);
                
                /*JQUERY INITIALIZE SCRIPTS*/ 
                //$('select').material_select();
                $('select').material_select();
                /*$('select').on('contentChanged', function() {
                    $(this).material_select();
                });
                $('#selectCategory').val("29");

                $('#selectCategory').on('change',function(){
                    console.log("changed");
                    console.log($('#selectCategory').val());
                    console.log(typeof($('#selectCategory').val()));
                });

                $('#btnAddCategory').click(function(){
                    console.log("clicked");
                    console.log($('#selectCategory').val());
                    console.log($('#selectCategory').val("35"));
                    $('select').material_select();
                });*/

                // var newValue = "29";
                // var $newOpt = $("<option>").attr("value",newValue).text(newValue)
                // $("#selectCategory").append($newOpt);

                // // fire custom event anytime you've updated select
                // $("#selectCategory").trigger('contentChanged');         
                
            })
            .catch(function (error) {
                swal({
                    title: "Error",
                    text: error,
                    timer: 2000,
                    showConfirmButton: false
                }); 
            });
        } 

        getCategoryName(parent){
            let cat = component.state.category;
            for(let i=0;i<cat.length;i++){
                if(cat[i].id == parseInt(parent)){
                    return cat[i].category;                            
                }
            }
            return "Parent";
        }

        fetchCategories(callback){
            axios.get('./php/category', {
                params: {
                    action: "getAll" 
                }
            })
            .then(function (res) {
                let html = ``;
                let data = res.data;
                component.state.category = [];
                for(let i=0;i<data.length;i++){                    
                    component.state.category.push({
                        id: data[i].id,
                        category: component.escapeHTML(data[i].category),
                        parent: data[i].parent
                    });
                }
                callback();   
            })
            .catch(function (error) {
                swal({
                    title: "Error",
                    text: "Fetch Categories Error\n" + error,
                    timer: 2000,
                    showConfirmButton: false
                }); 
            });            
        }


    }

    let component = new Component();
    component.dashboard();

</script>