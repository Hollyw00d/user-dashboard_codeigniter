<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div class="col-md-12">
            <h1>Sign In</h1>
        </div>
    </div>

        <form id="signin-register-add" action="<?php echo base_url() . $user_type; ?>" method="post">
            <input type="hidden" name="signin"/>

            <div class="row-fluid">
                <div class="col-md-3"><p><label for="email">Email Address:</label></p></div>
                <div class="col-md-9"><p><input type="text" name="email"/></p></div>
            </div>

            <div class="row-fluid">
                <div class="col-md-3"><p><label for="email">Password:</label></p></div>
                <div class="col-md-9"><p><input type="text" name="password"/></p></div>
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