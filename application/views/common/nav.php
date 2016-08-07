<!--sidebar start-->
  <aside>
      <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
              <li>
                  <a class="<?php echo $activeDash; ?>" href="<?php echo base_url(); ?>Dashboard">
                      <i class="fa fa-dashboard"></i>
                      <span>Dashboard</span>
                  </a>
              </li>

              <li class="sub-menu">
                  <a href="javascript:;" class="<?php echo $activeClients; ?> <?php echo $activeClientsList; ?>">
                      <i class="fa fa-laptop"></i>
                      <span>Manage Clients</span>
                  </a>
                  <ul class="sub">
                      <li class="<?php echo $activeClients; ?>"><a  href="<?php echo base_url(); ?>Clients">New Client</a></li>
                      <li class="<?php echo $activeClientsList; ?>"><a  href="<?php echo base_url(); ?>Clients_List">List Clients</a></li>
                  </ul>
              </li>

              <li class="sub-menu">
                  <a href="javascript:;" class="<?php echo $proposals; ?><?php echo $proposalsList; ?>">
                      <i class="fa fa-book"></i>
                      <span>Manage Proposal</span>
                  </a>
                  <ul class="sub">
                      <li class="<?php echo $proposals; ?>"><a  href="<?php echo base_url(); ?>Proposals">New Proposal</a></li>
                      <li class="<?php echo $proposalsList; ?>"><a  href="<?php echo base_url(); ?>Proposals_List">List Proposals</a></li>
                      
                  </ul>
              </li>

              <li class="sub-menu">
                  <a href="javascript:;" class="<?php echo $sales; ?><?php echo $salesList; ?>">
                      <i class="fa fa-cogs"></i>
                      <span>Manage Sales</span>
                  </a>
                  <ul class="sub">
                      <li class="<?php echo $sales; ?>"><a  href="<?php echo base_url(); ?>Sales">New Sales</a></li>
                      <li class="<?php echo $salesList; ?>"><a  href="<?php echo base_url(); ?>Sale_List">List Sales</a></li>
                     
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="<?php echo $salesVsquota; ?><?php echo $commissionable; ?>">
                      <i class="fa fa-tasks"></i>
                      <span>Reports</span>
                  </a>
                  <ul class="sub">
                      <li class="<?php echo $salesVsquota; ?>"><a  href="<?php echo base_url(); ?>Reports">Monthly Sale vs Quota</a></li>
                     
                      <li class="<?php echo $commissionable; ?>"><a  href="<?php echo base_url(); ?>Commissionable">Commissionable Sales</a></li>
                     
                  </ul>
              </li>
          </ul>
      </div>
  </aside>
<!--sidebar end-->