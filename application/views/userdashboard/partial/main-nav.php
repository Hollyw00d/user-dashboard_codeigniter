<div class="row">
    <div class="col-md-12">
        <nav role="navigation">
            <ul id="main-nav">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
            </ul>
            <ul id="utility-nav" class="float-right">
                <li id="nav-user-name"><?php
                // If admin user logged in display
                // display first/last name
                echo $this->session->userdata('admin_user_name');

                // If normal user logged in display
                // display first/last name
                echo $this->session->userdata('normal_user_name');
                ?></li>
                <li><?php
                if($this->session->userdata('admin_session') || $this->session->userdata('normal_session'))
                {
                    echo "<a href='" . base_url() . "reset'>Log Out</a>";
                }
                else
                {
                    echo "<a href='" . base_url() . "signin'>Sign In</a>";
                }
                ?></li>
            </ul>
        </nav>
    </div>

</div>

<div id="wrapper">