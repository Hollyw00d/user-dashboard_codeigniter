<?php
// If the admin sessin variable DOESN'T exist
// redirect to home page
if(!$this->session->userdata('admin_session'))
{
    redirect(base_url());
}
?>
<?php $this->load->view('userdashboard/partial/header'); ?>

    <div class="row-fluid">
        <div class="col-md-8">
            <h1>Admin</h1>
            <h3>Manage Users</h3>
        </div>
        <div class="col-md-4">
            <form action="<?php echo base_url() . 'users/new'; ?>" method="post">
                <input type="hidden" name="add_new"/>
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
                    <?php
                    foreach(array_reverse($show_users) as $row) {
                        $first_last_name = $row['first_name'] . ' ' . $row['last_name'];

                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><a href="<?php echo base_url() . 'dashboard/user/' . $row['id']; ?>"><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></a></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td><?php echo $row['user_level']; ?></td>
                            <td class="no-border"><a href="<?php echo base_url() . 'users/edit/' . $row['id']; ?>">edit</a></td>
                            <td><a href="#">remove</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>

        </div>
    </div>

<?php $this->load->view('userdashboard/partial/footer'); ?>