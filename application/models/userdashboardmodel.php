<?php
class UserDashboardModel extends CI_Model
{
    // Get all rows from "users" table
    public function show_all_users()
    {
        return $this->db->query("SELECT * FROM users")->result_array();
    }

    public function check_login_email($submitted_email, $submitted_password)
    {
        return $this->db->query("SELECT * FROM users WHERE (email = ? AND password = ?)", array($submitted_email, $submitted_password))->row_array();
    }

}
?>