<?php
class UserDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Load the UserDashboardModel on all pages
        $this->load->model('UserDashboardModel');

        $this->output->enable_profiler();
    }

    public function index()
    {
        // Assigns title tag
        $title_tag = 'User Dashboard Home';

        $this->load->view('userdashboard/home', array('title_tag' => $title_tag));
    }

    // Create sign in form page
    public function signin()
    {
        // Assigns title tag
        $title_tag = 'Sign In';

        // Assigns if the user is admin or normal user
        $user_type = 'admin';

        $this->load->view('userdashboard/signin', array('title_tag' => $title_tag, 'user_type' => $user_type));
    }

    // Error validation and redirect to:
    // admin page OR
    // normal user page
    public function checksignin()
    {

        $sec_email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $sec_password = substr(md5($password), 0, -2);

        $check_user = $this->UserDashboardModel->check_login_email($sec_email, $sec_password);

        // If user exists in database...
        if($check_user)
        {
            // If user_level is "admin"
            // go to page and create an "admin_session" variable
            if($check_user['user_level'] == 'admin')
            {
                $this->session->set_userdata('admin_session', 'admin_session');

                redirect(base_url() . 'dashboard/admin');
            }
            // Elseif user_level is "normal"
            // go to page and create an "normal_session" variable
            elseif($check_user['user_level'] == 'normal')
            {
                $this->session->set_userdata('normal_session', 'normal_session');

                redirect(base_url() . 'dashboard');
            }

        }
        else
        {
            // If the user doesn't exist in the database
            // redirect to the sign in page and
            // display the error session variable below
            $this->session->set_userdata('not_in_db_error', '<strong><p>Your email/password are invalid. Please try again.</p></strong>');

            redirect(base_url() . 'signin');
        }
    }

    public function register()
    {
        // Assigns title tag
        $title_tag = 'Register';

        // Assigns if the user is admin or normal user
        $user_type = 'admin';

        $this->load->view('userdashboard/register', array('title_tag' => $title_tag, 'user_type' => $user_type));
    }

    public function admin()
    {
        // Assigns title tag
        $title_tag = 'Admin Dashboard';

        // Assigns if the user is admin or normal user
        $user_type = 'admin';

        // Load the model method to
        // display all rows from the "users" table
        $show_users = $this->UserDashboardModel->show_all_users();

        $this->load->view('userdashboard/admin', array('title_tag' => $title_tag, 'user_type' => $user_type, 'show_users' => $show_users));
    }

    public function normaluser()
    {
        // Assigns title tag
        $title_tag = 'User Dashboard';

        // Assigns if the user is admin or normal user
        $user_type = 'normal';

        // Load the model method to
        // display all rows from the "users" table
        $show_users = $this->UserDashboardModel->show_all_users();

        $this->load->view('userdashboard/normal_user', array('title_tag' => $title_tag, 'user_type' => $user_type, 'show_users' => $show_users));
    }

    public function adduser()
    {
        // Assigns title tag
        $title_tag = 'New User';

        // Assigns if the user is admin or normal user
        $user_type = 'admin';

        $this->load->view('userdashboard/adduser', array('title_tag' => $title_tag, 'user_type' => $user_type));
    }

    public function userprofile()
    {
        die('On "userprofile" method');
    }

    public function destroy()
    {
        $this->session->sess_destroy();

        redirect(base_url());
    }

}
?>