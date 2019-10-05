<?php 
class User extends Model {

    public function getUsers()
    {
        $result = $this->db->query("SELECT * FROM users");
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        echo '<pre>'; print_r($rows); echo '</pre>'; die;
    }

    public function getUser($id)
    {
        $result = $this->db->query("SELECT * FROM users WHERE id=" . (int)$id);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }

    public function saveUser()
    {
        // save user
    }

    public function validate()
    {
        // vaidate all fields before save
    }
}