<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="<?php echo site_url(); ?>">Techven Properties limited</a>
        <ul class="nav">

            
            <?php
            $is_logged_in_admin = $this->session->userdata('is_logged_in_admin');
            $is_logged_in_employee = $this->session->userdata('is_logged_in_employee');

            if ((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (!isset($is_logged_in_employee) || $is_logged_in_employee != true)) {
                //NOT LOGGED  IN admin and employee
            ?>
                <li class="dropdown"  id="login_navbar">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Login Panel
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="<?php echo site_url('admin_auth/login'); ?>">Admin Login</a></li>
                          <li class="divider"></li>
                          <li><a tabindex="-1" href="<?php echo site_url('employee_auth/login'); ?>">Employee Login</a></li>

                    </ul>

                </li>


                
            <?php
            } else {
                //LOGGED IN
            ?>

              <?php   if (!isset($is_logged_in_admin) || $is_logged_in_admin != true)
                {
                  //emploee is logged in employee nabbars
                    ?>
                  <li id="pending_meetings_navbar"><a href="<?php echo site_url('pending_meetings/pending_meetings_view'); ?>">Pending meetings</a></li>
                  <li id="project_employee_navbar"><a href="<?php echo site_url('project_employee/project_list_employee'); ?>">Project List</a></li>
                   <li id="project_client_employee_navbar"><a href="<?php echo site_url('project_client/list_show'); ?>">Project_client_search</a></li>
                   <li id="client_list_navbar"><a href="<?php echo site_url('client_list_employee/show_list'); ?>">Client List</a></li>
                  <li id="create_client_navbar">
                        <a href="<?php echo site_url('create_client/client_info_form'); ?>">Create Client Profile</a></li>
              <li id="meeting_history_navbar"><a href="<?php echo site_url('employee_meeting_history/list_of_meetings'); ?>">Meetings History</a></li>
              <li id="today_meetings_navbar"><a href="<?php echo site_url('today_meetings/today_meetings_view'); ?>">Today meetings</a></li>
                  <li id="next_meetings_navbar"><a href="<?php echo site_url('next_meetings/next_meetings_view'); ?>">Next meetings</a></li>
                   <li id="setting_navbar"><a href="<?php echo site_url('set_data/form_password_employee'); ?>"> Settings </a></li>
                  <?php } else  {
                      //admin is logged in
                      ?>
            <li id="project_navbar"><a href="<?php echo site_url('project_modification/project_list'); ?>">Project list</a></li>
           <li id="project_client_employee_navbar"><a href="<?php echo site_url('project_client_employee/list_show'); ?>">Project_client_search</a></li>
            <li id="suggestion_giving"><a href="<?php echo site_url('admin_suggession/meetings_list'); ?>">Meetings</a></li>
            <li id="client_navbar"><a href="<?php echo site_url('clientlist/show_clientlist'); ?>">Client list</a></li>

           <li id="pending_meetings_admin_navbar"><a href="<?php echo site_url('pending_meetings_admin/pending_meetings_admin_view'); ?>">Pending meetings</a></li>
             <li id="employee_navbar"><a href="<?php echo site_url('employeelist/show_employeelist'); ?>">Employee list</a></li>
            <li id="setting_navbar"><a href="<?php echo site_url('set_data/form_password'); ?>"> Settings </a></li>

                  <?php  }?>

                <li><a href="<?php echo site_url('admin_auth/logout'); ?>"> Log Out!! </a></li>



            <?php
            }
            ?>


        </ul>
    </div>
</div>

