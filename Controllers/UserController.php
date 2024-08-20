<?php
require_once '../Models/UserModel.php';

require_once '../Database/DatabaseConnection.php';

$UserModel = new UserModel($db);

if ( isset($_GET['action']) && $_GET['action'] === 'delete') {
    $id = $_GET['id'];
    $UserModel->DeleteUser($id);
    header('Location: ../router.php?route=DashBoard');
}


?>