<?php
class UserDashboardModel extends CI_Model
{
    // Get all rows from "users" table
    public function show_all_users()
    {
        return $this->db->query("SELECT * FROM users")->result_array();
    }

    public function show_single_user($user_id)
    {
        return $this->db->query("SELECT * FROM users WHERE id = {$user_id}")->row_array();
    }










    public function update_single_record($post_data, $user_id)
    {
        $this->db->query("UPDATE users SET first_name = '{$post_data['first_name']}', last_name = '{$post_data['last_name']}', email = '{$post_data['email']}', user_level = '{$post_data['user_level']}', updated_at = NOW() WHERE id = $user_id");

    }











    // Check login email
    public function check_login_email($submitted_email, $submitted_password)
    {
        return $this->db->query("SELECT * FROM users WHERE (email = ? AND password = ?)", array($submitted_email, $submitted_password))->row_array();
    }

    // Registration form insert user
    public function insert_user($post_data)
    {

        $this->db->query("INSERT INTO users (first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())", array($post_data['first_name'], $post_data['last_name'], $post_data['email'], substr(md5($post_data['password']), 0, -2), 'normal'));

    }

    // After Admin is logged in insert user
    public function admin_insert_user($post_data)
    {
        $this->db->query("INSERT INTO users (first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())", array($post_data['first_name'], $post_data['last_name'], $post_data['email'], substr(md5($post_data['password']), 0, -2), $post_data['user_level']));
    }

}
?>