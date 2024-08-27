<?php

class User {
    private $username;
    private $email;
    private $password;
    private $db;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->db = Database::getInstance()->getConnection(); // Ensure Database class is properly initialized
    }

    public function validateUsername() {
        return preg_match('/^[a-zA-Z0-9]{3,20}$/', $this->username);
    }

    public function validateEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function validatePassword() {
        return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $this->password);
    }

    public function hashPassword($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function isUsernameTaken() {
        $stmt = $this->db->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $this->username);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    public function isEmailTaken() {
        $stmt = $this->db->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    public function createUser() {
        if ($this->isUsernameTaken() || $this->isEmailTaken()) {
            throw new Exception('Username or email already exists.');
        }

        $hashedPassword = $this->hashPassword($this->password);
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->username, $this->email, $hashedPassword);

        if ($stmt->execute()) {
            return [
                'username' => $this->username,
                'email' => $this->email
            ];
        } else {
            throw new Exception('Could not create user.');
        }
    }
}
