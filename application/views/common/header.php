<body>
  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="dashboard.php" class="logo"><div class="logo1"><img src=".\img\logo.png"></div></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu top-right-info">
                    <!-- user login dropdown start-->
                    <li class="dropdown" style="padding: 10px 15px;">
                            <?php echo $sess_email; ?>
                            <span style="padding: 0 10px;font-size: 19px;"><a href="<?php echo base_url(); ?>Login/logout" title="Sign Out"><i class="fa fa-sign-out"></i>
                            </a></span>
                          <!--   <b class="caret"></b> -->
                       <!--  <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="<?php echo base_url(); ?>Login/logout"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul> -->
                    </li>
                   
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->