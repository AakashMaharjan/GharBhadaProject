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
            'issssssssiiiiissss', 
            $userId, $name, $phoneNumber, $title, $rent, $location, $type, $floor, $entrance, $forWhom, 
            $roadSize, $bedrooms, $livingRooms, $restrooms, $image1, $image2, $image3, $description
        );

        if ($stmt->execute()) {
            return true;
        } else {
            die('Execute failed: ' . $stmt->error);
        }
    }
}


?>