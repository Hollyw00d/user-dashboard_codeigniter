<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard Home</title>

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-theme.min.css"/>

    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"/>

</head>
<body>

<div class="row">
    <div class="col-md-12">
        <nav role="navigation">
            <ul id="main-nav">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
            </ul>
            <ul id="utility-nav" class="float-right">
                <li><a href="#">Sign In</a></li>
            </ul>
        </nav>
    </div>

</div>

<div id="wrapper">

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

</div><?php //#wrapper ?>



</body>
</html>