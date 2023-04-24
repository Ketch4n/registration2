<nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="assets\images\img\peso.png" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo session()->get('user_name'); ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <!-- <a href="#!"><i class="ti-settings"></i>Settings</a> -->
                                            <a href="<?php echo base_url('signout')?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div> -->
                            <!-- <div class="pcoded-navigation-label">Navigation</div> -->
                            <?php 
                           $request = \Config\Services::request();
                           $currentURL = $request->uri->getPath();
                           
                            ?>
                       
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-submenu <?= $currentURL == '/dashboard' ? "active" : '' ?>">
                                    <a href="<?php echo base_url()?>dashboard/" class="waves-effect waves-dark menu">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                 <!-- <li class="pcoded-hasmenu"> -->
                               
                                <li class="pcoded-submenu <?= $currentURL == '/form' ? "active" : '' ?>">
                                    <a href="<?php echo base_url('form')?>" class="waves-effect waves-dark menu ">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                 <li class="pcoded-submenu <?= $currentURL == '/table' ? "active" : '' ?>">
                                    <a href="<?php echo base_url('table')?>" class="waves-effect waves-dark menu">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                 <!-- <li class="">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark menu">
                                        <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>C</b></span>
                                        <span class="pcoded-mtext">Charts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li> -->
                                <!-- <li class="">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark menu">
                                        <span class="pcoded-micon"><i class="ti-map-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext">Maps</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li> -->
                                 <!-- <li class="pcoded-submenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark menu">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Basic</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                   
                                </li> -->
                                 <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark menu">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Pages</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark menu">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark menu">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Registration</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark menu">
                                                <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
                                                <span class="pcoded-mtext">Sample Page</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- <div class="pcoded-navigation-label">UI Element</div> -->
                            <!-- <ul class="pcoded-item pcoded-left-item">
                                
                            </ul> -->
                            <!-- <div class="pcoded-navigation-label">Forms</div> -->
                            <!-- <ul class="pcoded-item pcoded-left-item">
                                
                            </ul> -->
                            <!-- <div class="pcoded-navigation-label">Tables</div> -->
                            <!-- <ul class="pcoded-item pcoded-left-item">
                               
                            </ul> -->
                            <!-- <div class="pcoded-navigation-label">Chart And Maps</div> -->
                            <!-- <ul class="pcoded-item pcoded-left-item">
                               
                            </ul> -->
                            <!-- <div class="pcoded-navigation-label">Pages</div> -->
                            <!-- <ul class="pcoded-item pcoded-left-item">
                               
                            </ul> -->
                        </div>
                    </nav>

  <script>
            var a = document.querySelectorAll(".menu");
            for (var i = 0, length = a.length; i < length; i++) {
              a[i].onclick = function() {
                var b = document.querySelector("li.active");
                if (b) b.classList.remove("active");
                this.parentNode.classList.add('active');
              };
            }    
    </script>
