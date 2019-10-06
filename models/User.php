<?php 
class User extends Model {

    public function getUsers()
    {
        $result = $this->db->query("SELECT * FROM users");
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }

    public function getUser($id)
    {
        $result = $this->db->query("SELECT * FROM users WHERE id=" . (int)$id);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }

    public function saveUser()
    {

        if ($_POST['password'] !== $_POST['re_password']) {
            $errors['errors'] = "Passwords don't match. Please fill in details again.";
        } 

        $email = $_POST['email'];

        $checkIfExists = $this->db->query("SELECT 1 FROM users WHERE email = '$email'");
        $checkResult = $checkIfExists->fetch_all(MYSQLI_ASSOC);

        if (!empty($checkResult)) {
            $errors['errors'] = "User with this email already exists.";
        }

        $fields = ['phone','first_name', 'last_name', 'address', 'postcode', 'country', 'password'];
        $data = [];
        
        foreach($fields as $field) {
            if(empty($_POST[$field])) {
                $errors['errors'] = "Please fill all required fields.";
                return $errors;
            }
            $data[$field] = $this->validate($_POST[$field]);
        }
        extract($data);
        $password = md5($this->validate($_POST['password']));

        $insertQuery = "INSERT INTO users (first_name, last_name, email, phone, address, postcode, country, password)
                            VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$postcode', '$country', '$password');";

        if (!empty($errors)) {
            return $errors;
        }

        $this->db->query($insertQuery);
    }

    public function validate($v)
    {
        $v = trim($v);
        filter_var($v, FILTER_SANITIZE_STRING);
        $v = $this->db->real_escape_string($v);

        return $v;
    }

    public function loginUser()
    {
        $email = $this->validate($_POST['email']);
        $password = md5($this->validate($_POST['password']));

        $checkIfValid = $this->db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $checkResult = $checkIfValid->fetch_all(MYSQLI_ASSOC);
        if (!empty($checkResult[0])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['user'] = $checkResult[0]['first_name'] . ' ' . $checkResult[0]['last_name'];
        } else {
            $errors['errors'] = "Email or password is wrong. Please try again.";
            return $errors;
        }

         
    }
}