<div class="row">
    <div class="col-md-12">
        <nav role="navigation">
            <ul id="main-nav">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
            </ul>
            <ul id="utility-nav" class="float-right">
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