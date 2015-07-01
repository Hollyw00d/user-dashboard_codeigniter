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

    public function signin()
    {
        // Assigns title tag
        $title_tag = 'Sign In';

        // Assigns if the user is admin or normal user
        $user_type = 'admin';



        $this->load->view('userdashboard/signin', array('title_tag' => $title_tag, 'user_type' => $user_type));
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

}
?>