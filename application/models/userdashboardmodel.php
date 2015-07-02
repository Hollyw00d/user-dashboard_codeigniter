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

    public function insert_user($post_data)
    {

        $this->db->query("INSERT INTO users (first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())", array($post_data['first_name'], $post_data['last_name'], $post_data['email'], substr(md5($post_data['password']), 0, -2), 'normal'));

    }

    public function admin_insert_user($post_data)
    {
        $this->db->query("INSERT INTO users (first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())", array($post_data['first_name'], $post_data['last_name'], $post_data['email'], substr(md5($post_data['password']), 0, -2), $post_data['user_level']));
    }

}
?>