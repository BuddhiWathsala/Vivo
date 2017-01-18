
    <ul class="nav navbar-nav side-nav">

      <li>
          <a href="charts.html"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Profile</a>
      </li>

      <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-camera-retro fa-lg"></i></i> Photogrphers <i class="fa fa-fw fa-caret-down"></i></a>
          <ul id="demo" class="collapse">
              <li>
                  <a href="<?php echo base_url();?>index.php/C_Admin_Page_Navigate/viewAllPhotographers">View all</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>index.php/C_Admin_Page_Navigate/addPhotographer">Add Photographer</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>index.php/C_Admin_Page_Navigate/topRankings">Top rankings</a>
              </li>
          </ul>
      </li>



        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-user fa-fw" ></i>Customers <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo1" class="collapse">
                <li>
                    <a href="<?php echo base_url();?>index.php/C_Admin_Page_Navigate/viewAllCustomers">View all</a>
                </li>

            </ul>
        </li>

        <li class="active">
            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>

    </ul>
