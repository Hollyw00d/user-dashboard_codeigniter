<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div class="col-md-12">
            <h1>Register</h1>
        </div>
    </div>

    <form id="signin-register-add" action="<?php echo base_url() . $user_type; ?>" method="post">
        <input type="hidden" name="register"/>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="email">Email Address:</label></p></div>
            <div class="col-md-9"><p><input type="text" name="email"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="first_name">First Name:</label></p></div>
            <div class="col-md-9"><p><input type="text" name="first_name"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="last_name">Last Name:</label></p></div>
            <div class="col-md-9"><p><input type="text" name="last_name"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="password">Password:</label></p></div>
            <div class="col-md-9"><p><input type="text" name="password"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="confirm_passwrd">Confirm Password:</label></p></div>
            <div class="col-md-9"><p><input type="text" name="confirm_passwrd"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-9 col-md-offset-3"><p><input type="submit" value="Register"/></p></div>
        </div>
    </form>

    <div class="row-fluid">
        <div class="col-md-12">
            <p>&nbsp;</p>
            <p><strong><a href="<?php echo base_url() . 'signin'; ?>">Already have an account? Sign in!</a></strong></p>
        </div>
    </div>

<?php $this->load->view('userdashboard/partial/footer'); ?>