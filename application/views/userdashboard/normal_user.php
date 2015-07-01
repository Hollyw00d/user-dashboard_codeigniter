<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div class="col-md-12">
            <h1>All Users</h1>
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach(array_reverse($show_users) as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><a href="#"><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></a></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td><?php echo $row['user_level']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>

        </div>
    </div>

<?php $this->load->view('userdashboard/partial/footer'); ?>