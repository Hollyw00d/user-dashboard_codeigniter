<?php
class UserDashboardModel extends CI_Model
{
    // Get all rows from "users" table
    public function show_all_users()
    {
        return $this->db->query("SELECT * FROM users")->result_array();
    }


}
?>