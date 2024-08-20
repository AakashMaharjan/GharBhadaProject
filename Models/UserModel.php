<?php

class UserModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function GetUsers()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->db->prepare($query);
        
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
        
        $stmt->execute();

        $result = $stmt->get_result();
        
        $users = [];

        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        
        $stmt->close();
        
        return $users;
    }

    public function DeleteUser($id){
        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
        
        $stmt->bind_param('i', $id);
        $stmt->execute();
        
        if ($stmt->affected_rows === 0) {
            die('Delete failed: ' . $this->db->error);
        }
        
        $stmt->close();
    }
    

}

?>