<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div class="col-md-8">
            <h1>Admin</h1>
            <h3>Manage Users</h3>
        </div>
        <div class="col-md-4">
            <form action="" method="post">
                <input type="hidden" name="add-new"/>
                <h3><input class="float-right" type="submit" value="Add New"/></h3>
            </form>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-12"><br class="clear"/></div>
    </div>

    <div class="row-fluid">
        <div class="col-md-12">

            <table id="admin-dashboard-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>User Level</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID_HERE</td>
                        <td><a href="#">NAME_HERE</a></td>
                        <td>EMAIL_HERE</td>
                        <td>CREATED_AT_HERE</td>
                        <td>USER_LEVEL_HERE</td>
                        <td class="no-border"><a href="#">edit</a></td>
                        <td><a href="#">remove</a></td>
                    </tr>

                    <tr>
                        <td>ID_HERE</td>
                        <td><a href="#">NAME_HERE</a></td>
                        <td>EMAIL_HERE</td>
                        <td>CREATED_AT_HERE</td>
                        <td>USER_LEVEL_HERE</td>
                        <td class="no-border"><a href="#">edit</a></td>
                        <td><a href="#">remove</a></td>
                    </tr>

                    <tr>
                        <td>ID_HERE</td>
                        <td><a href="#">NAME_HERE</a></td>
                        <td>EMAIL_HERE</td>
                        <td>CREATED_AT_HERE</td>
                        <td>USER_LEVEL_HERE</td>
                        <td class="no-border"><a href="#">edit</a></td>
                        <td><a href="#">remove</a></td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

<?php $this->load->view('userdashboard/partial/footer'); ?>