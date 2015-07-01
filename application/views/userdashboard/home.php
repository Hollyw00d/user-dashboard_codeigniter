<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div id="header" class="col-md-12 jumbotron">
            <h1>User Dashboard Demo</h1>
            <p>This is a user dashboard demo. Below are the features.</p>

            <h3><a href="signin">Sign In</a></h3>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-4">
            <h2>Manage Users</h2>
            <p>Add, remove, and edit users.</p>
        </div>

        <div class="col-md-4">
            <h2>Leave Message</h2>
            <p>Leave a message to another user.</p>
        </div>

        <div class="col-md-4">
            <h2>Edit User Information</h2>
            <p>Admins can edit another user's information (email address, first name, last name, etc).</p>
        </div>
    </div>

<?php $this->load->view('userdashboard/partial/footer'); ?>