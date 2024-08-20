<?php

class PostCRUD
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createPost($userId, $name, $phoneNumber, $title, $rent, $location, $type, $floor, $entrance, $forWhom, $roadSize, $bedrooms, $livingRooms, $restrooms, $image1, $image2, $image3, $description)
    {

        $query = "INSERT INTO Posts (user_id, name, phone_number, title, rent, location, type, floor, entrance, for_whom, road_size, bedrooms, living_rooms, restrooms, image1, image2, image3, description)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);

        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }

        $stmt->bind_param(
            'isssssssssiiiissss', 
            $userId, $name, $phoneNumber, $title, $rent, $location, $type, $floor, $entrance, $forWhom, 
            $roadSize, $bedrooms, $livingRooms, $restrooms, $image1, $image2, $image3, $description
        );

        if ($stmt->execute()) {
            return true;
        } else {
            die('Execute failed: ' . $stmt->error);
        }
    }

    // get all posts
    public function getPosts()
    {
        $query = "SELECT * FROM Posts ORDER BY created_at DESC";

        $stmt = $this->db->query($query);

        if ($stmt === false) {
            die('Query failed: ' . $this->db->error);
        }

        $posts = [];

        while ($row = $stmt->fetch_assoc()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getAllPosts()
    {
        $query = "SELECT * FROM Posts ORDER BY RAND()";

        $stmt = $this->db->query($query);

        if ($stmt === false) {
            die('Query failed: ' . $this->db->error);
        }

        $posts = [];

        while ($row = $stmt->fetch_assoc()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getSinglePost($id)
    {
        $query = "SELECT * FROM Posts WHERE id = ?";
        $stmt = $this->db->prepare($query);
    
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
    
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result === false) {
            die('Query failed: ' . $this->db->error);
        }
    
        $post = $result->fetch_assoc();
    
        $stmt->close();
    
        return $post;
    }

    public function getUserPosts($id){
        $query = "SELECT * FROM Posts WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
    
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
    
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result === false) {
            die('Query failed: ' . $this->db->error);
        }
    
        $posts = [];
    
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
    
        $stmt->close();
    
        return $posts;
    }

    public function UpdatePost($name, $phoneNumber, $title, $rent, $location, $type, $floor, $entrance, $forWhom, $roadSize, $bedrooms, $livingRooms, $restrooms, $description, $id){
        $query = "UPDATE Posts SET name = ?, phone_number = ?, title = ?, rent = ?, location = ?, type = ?, floor = ?, entrance = ?, for_whom = ?, road_size = ?, bedrooms = ?, living_rooms = ?, restrooms = ?, description = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
    
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
    
        $stmt->bind_param('sssssssssiiiisi', $name, $phoneNumber, $title, $rent, $location, $type, $floor, $entrance, $forWhom, 
        $roadSize, $bedrooms, $livingRooms, $restrooms, $description, $id);
    
        if ($stmt->execute()) {
            return true;
        } else {
            die('Execute failed: ' . $stmt->error);
        }
    }

    public function deletePost($id){
        $query = "SELECT image1, image2, image3 FROM Posts WHERE id = ?";
        $stmt = $this->db->prepare($query);
    
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
    
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->bind_result($image1, $image2, $image3);
        $stmt->fetch();
        $stmt->close();
    
        $images = [$image1, $image2, $image3];
        foreach ($images as $image) {
            if (!empty($image)) {
                if (file_exists($image)) {
                    unlink($image);
                }
            }
        }

        $query = "DELETE FROM Posts WHERE id = ?";
        $stmt = $this->db->prepare($query);
    
        if ($stmt === false) {
            die('Prepare failed: ' . $this->db->error);
        }
    
        $stmt->bind_param('i', $id);
    
        if ($stmt->execute()) {
            return true;
        } else {
            die('Execute failed: ' . $stmt->error);
        }
    }
    
    
}


?>