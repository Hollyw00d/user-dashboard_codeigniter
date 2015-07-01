<?php
class UserDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler();
    }

    public function index()
    {

        $this->load->view('userdashboard/home');
    }

    public function signin()
    {
        die('Inside "signin" method');
    }

}
?>