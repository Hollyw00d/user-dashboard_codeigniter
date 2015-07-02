<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div class="col-md-12">
            <h1>Sign In</h1>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-12">
            <div class="error">
                <?php
                // Display user error if it exists
                echo $this->session->userdata('not_in_db_error');
                $this->session->unset_userdata('not_in_db_error');
                ?>
            </div>
        </div>
    </div>


        <form id="signin-register-add" action="<?php echo base_url() . 'dashboard/checksignin'; ?>" method="post">
            <input type="hidden" name="checksignin"/>

            <div class="row-fluid">
                <div class="col-md-3"><p><label for="email">Email Address:</label></p></div>
                <div class="col-md-9"><p><input type="text" name="email"/></p></div>
            </div>

            <div class="row-fluid">
                <div class="col-md-3"><p><label for="email">Password:</label></p></div>
                <div class="col-md-9"><p><input type="password" name="password"/></p></div>
            </div>

            <div class="row-fluid">
                <div class="col-md-9 col-md-offset-3"><p><input type="submit" value="Sign In"/></p></div>
            </div>
        </form>

    <div class="row-fluid">
        <div class="col-md-12">
            <p>&nbsp;</p>
            <p><strong><a href="<?php echo base_url() . 'register'; ?>">Don't have an account? Register here!</a></strong></p>
        </div>
    </div>

<?php $this->load->view('userdashboard/partial/footer'); ?>