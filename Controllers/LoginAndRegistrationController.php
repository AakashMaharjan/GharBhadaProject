<?php
require_once '../Models/RegistrationModel.php';

require_once '../Database/DatabaseConnection.php';

$userModel = new RegisterUser($db);
$userLoginModel = new LoginUser($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'register') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    $userModel->registerUser($name, $email, $phone, $password);

    header('Location: ../components/Login.php');
    exit();
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $userLoginModel->loginUser($email);

    if($user){
        if(password_verify($password, $user['password'])){
            $_SESSION['user'] = $user;
            header('Location: ../index.php');
            exit();
        } else {
            $_SESSION['passwordError'] = "Incorrect password";
            header('Location: ../components/Login.php');
            exit();
        }
    } else {
        $_SESSION['EmailError'] = "Email not found";
        header('Location: ../components/Login.php');
        exit();
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header('Location: ../index.php');
    exit();
}
?>
