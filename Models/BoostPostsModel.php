<?php

class BoostPosts
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function CreateBoostPost($post_id, $post_name, $transaction_screenshot){
        $query = "INSERT INTO boostedposts (post_id, post_name, transaction_screenshot) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
        
        $stmt->bind_param('iss', $post_id, $post_name, $transaction_screenshot);
        $stmt->execute();
        
        if ($stmt->affected_rows === 0) {
            die('Insert failed: ' . $this->db->error);
        }
        
        $stmt->close();
    }

    public function getBoostedPosts(){
        $query = "SELECT * FROM boostedposts";
        $stmt = $this->db->prepare($query);
        
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        $stmt->close();
        
        return $result;
    }

}

?>