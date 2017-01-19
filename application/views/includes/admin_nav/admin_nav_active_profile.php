<?php if(isset($newEvents)){
      $count = count($newEvents);
      }else {
              $count = 0;
            }
?>
    <ul class="nav navbar-nav side-nav">

      <br/>

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
            <a href="<?php echo base_url();?>index.php/C_Admin_Page_Navigate/viewNewEvents""><i class="fa fa-fw fa-dashboard"></i>New Events <span class="badge"><?php  echo $count;?></span></a>
        </li>


    </ul>
