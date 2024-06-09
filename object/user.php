<?php
class User{

    // Database connection and table name
    private $conn;
    private $table_name = "user";

    // Object properties
    public $name;
    public $email_address;
    public $password;
    public $access_level;
    public $created;

    public function __construct($db){
        $this->conn = $db;
    }


    function create() {

        $query = "INSERT INTO 
            " . $this->table_name . " 
            SET 
                name=:name,
                email_address=:email_address, 
                password=:password, 
                access_level=:access_level, 
                created=:created";

        $stmt = $this->conn->prepare( $query );

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email_address = htmlspecialchars(strip_tags($this->email_address));
        $this->access_level = htmlspecialchars(strip_tags($this->access_level));
        $this->created = date('Y-m-d H:i:s');

        $password_hash = password_hash($this->password, PASSWORD_DEFAULT);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email_address", $this->email_address);
        $stmt->bindParam(":password", $password_hash);
        $stmt->bindParam(":access_level", $this->access_level);
        $stmt->bindParam(":created", $this->created);

        if($stmt->execute()){
            return true;
        } else {
            return false;
        }
    }

    function emailExists() {
        $query = "SELECT name, email_address, password, access_level, created
                FROM 
                " . $this->table_name . "
                WHERE email_address = ?";
        $stmt = $this->conn->prepare($query);
        
        // Bind parameter and execute query
        $stmt->bindParam(1, $this->email_address);
        $stmt->execute();
    
        // Check for errors
        if ($stmt->rowCount() > 0) {
            // Fetch and store user data for later use
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->lastname = $row['name'];
            $this->password = $row['password'];
            $this->access_level = $row['access_level'];
            return true;
        } else {
            return false;
        }
    }

    public function getUserName($email_address) {
        $query = "SELECT firstname, lastname FROM " . $this->table_name . " WHERE email_address = :email_address LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email_address', $email_address);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
    }

    function getUserData() {
        $query = "SELECT name, email_address, access_level, created
                  FROM " . $this->table_name . "
                  WHERE access_level = 'User'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $rows;
    }

    function getTeacherData() {
        $query = "SELECT name, email_address, access_level, created
                  FROM " . $this->table_name . "
                  WHERE access_level = 'Admin'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $rows;
    }
     
    public function deleteUser($email_address) {
        $query = "DELETE FROM " . $this->table_name . " WHERE email_address = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email_address);
    
        if ($stmt->execute()) {
            return true;
        }
    
        return false;
    }
    
}