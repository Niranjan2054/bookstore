<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard" class="site_title"><i class="fa fa-paw"></i> <span><?php echo SITE_NAME; ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div> -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="banner">banner</a></li>
                      <li><a href="banner_video">Video</a></li>
                      <li><a href="institute">Official Details</a></li>
                      <li><a href="page">pages</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bell"></i> Notice <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="add-notice">Add Notice</a></li>
                      <li><a href="notice">List Notice</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-envelope"></i> Client Activity <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="enquiry">Join Class</a></li>
                      <li><a href="contact">Contact</a></li>
                      <li><a href="subscriber">Subscriber</a></li>
                    </ul>
                  </li>
                  <!-- <li><a href="busfair"><i class="fa fa-bus"></i> Bus Fair</span></a>
                  </li> -->
                  <li><a href="advertisement"><i class="fa fa-dollar"></i> Advertisement</a>
                  </li>
                  <?php 
                    if ($_SESSION['user_id'] ==1) {
                  ?>
                  <li><a href="user"><i class="fa fa-user"></i> User</a>
                  </li>
                  <?php
                    }
                  ?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/logo.png" alt=""><?php echo $_SESSION['admin_name']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;"> Profile</a></li> -->
                    <li><a href="password-change"> Password Change</a></li>
                    <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->