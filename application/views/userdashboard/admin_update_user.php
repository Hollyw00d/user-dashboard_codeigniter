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
            <h1>Edit User #<?php echo $user_id; ?></h1>
        </div>
        <div class="col-md-4">
            <form action="<?php echo base_url() . 'dashboard/admin'; ?>" method="post">
                <input type="hidden" name="add_new"/>
                <h3><input class="float-right" type="submit" value="Return to Dashboard"/></h3>
            </form>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-12"><br class="clear"/></div>
    </div>

    <class class="row-fluid">
        <div class="col-md-6">
            <h3>Edit Information</h3>

                <div class="success">
                    <?php echo $this->session->flashdata('update_success'); ?>
                </div>

                <form action="<?php echo base_url() . 'users/edit/process/' . $show_single_user['id']; ?>" method="post" class="side-by-side-form">
                    <input type="hidden" name="user_details_update"/>
                    <p>
                        <label for="email">Email:</label><br />
                        <input type="text" name="email" value="<?php echo $show_single_user['email']; ?>"/>
                    </p>

                    <p>
                        <label for="first_name">First Name:</label><br />
                        <input type="text" name="first_name" value="<?php echo $show_single_user['first_name']; ?>"/>
                    </p>

                    <p>
                        <label for="first_name">Last Name:</label><br />
                        <input type="text" name="last_name" value="<?php echo $show_single_user['last_name']; ?>"/>
                    </p>

                    <p>
                        <select name="user_level">
                            <?php
                            // Assign the user level option
                            // tags to display with the "Admin"
                            // first ONLY if user record is
                            // for an admin
                            if($show_single_user['user_level'] == 'admin')
                            {
                                $first_user_level = 'admin';
                                $second_user_level = 'normal';
                            }
                            else
                            {
                                $first_user_level = 'normal';
                                $second_user_level = 'admin';
                            }
                            ?>
                            <option value="<?php echo  $first_user_level;?>"><?php echo ucfirst($first_user_level); ?></option>
                            <option value="<?php echo  $second_user_level;?>"><?php echo ucfirst($second_user_level); ?></option>
                        </select>
                    </p>

                    <p>&nbsp;</p>
                    <p>
                        <input type="submit" value="Update"/>
                    </p>
                </form>

        </div>

        <div class="col-md-6">
            <h3>Change Password</h3>

        </div>
    </class>



<?php $this->load->view('userdashboard/partial/footer'); ?>