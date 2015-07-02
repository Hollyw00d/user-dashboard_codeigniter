<?php
// Load the form helper
$this->load->helper('form');
// Load the form_validation library
$this->load->library('form_validation');
?>

<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div class="col-md-12">
            <h1>Register</h1>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-12">
            <div class="error">
                <?php
                // Display validation errors if they exist
                echo $this->session->flashdata('register_errors');
                ?>
            </div>
        </div>
    </div>

    <form id="signin-register-add" action="<?php echo base_url() . 'register/newuser'; ?>" method="post">
        <input type="hidden" name="register"/>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="email">Email Address:</label></p></div>
            <div class="col-md-9"><p><input type="text" name="email" value="<?php echo set_value('email'); ?>"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="first_name">First Name:</label></p></div>
            <div class="col-md-9"><p><input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="last_name">Last Name:</label></p></div>
            <div class="col-md-9"><p><input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="password">Password:</label></p></div>
            <div class="col-md-9"><p><input type="password" name="password"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="confirm_password">Confirm Password:</label></p></div>
            <div class="col-md-9"><p><input type="password" name="confirm_password"/></p></div>
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