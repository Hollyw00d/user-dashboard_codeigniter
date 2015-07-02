<?php
// Load the form helper
$this->load->helper('form');
// Load the form_validation library
$this->load->library('form_validation');
?>

<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div class="col-md-8">
            <h1>Add a New User</h1>
        </div>
        <div class="col-md-4">
            <form action="<?php echo base_url() . 'dashboard/admin'; ?>" method="post">
                <input type="hidden" name="return_to_admin"/>
                <h3><input class="float-right" type="submit" value="Return to Dashboard"/></h3>
            </form>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-12">
            <div class="error">
                <?php
                // Display validation errors if they exist
                echo $this->session->flashdata('admin_user_add_errors');
                ?>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-12">
            <div class="success">
                <?php
                // Display validation errors if they exist
                echo $this->session->flashdata('admin_user_add_success');
                ?>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-12">
            <br class="clear" />
        </div>
    </div>

    <form id="signin-register-add" action="<?php echo base_url() . 'users/new/process'; ?>" method="post">
        <input type="hidden" name="add_new_user"/>

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
            <div class="col-md-9"><p><input type="password" name="password" value="<?php echo set_value('password'); ?>"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="confirm_password">Confirm Password:</label></p></div>
            <div class="col-md-9"><p><input type="password" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>"/></p></div>
        </div>

        <div class="row-fluid">
            <div class="col-md-3"><p><label for="user_level">User Level:</label></p></div>
            <div class="col-md-9">
                <p>
                    <select name="user_level">
                        <option name="user_level" value="normal">Normal</option>
                        <option name="user_level" value="admin">Admin</option>
                    </select>
                </p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="col-md-9 col-md-offset-3"><p><input type="submit" value="Create"/></p></div>
        </div>
    </form>

<?php $this->load->view('userdashboard/partial/footer'); ?>