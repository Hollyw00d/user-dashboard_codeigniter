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
            <br class="clear" />
        </div>
    </div>

    <form id="signin-register-add" action="<?php echo base_url() . 'dashboard/admin'; ?>" method="post">
        <input type="hidden" name="add_new_user"/>

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
            <div class="col-md-9 col-md-offset-3"><p><input type="submit" value="Create"/></p></div>
        </div>
    </form>

<?php $this->load->view('userdashboard/partial/footer'); ?>