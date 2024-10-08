<?php
// Get the current script's filename
$current_file = basename($_SERVER['PHP_SELF']);

// Initialize background colors
$background_color_profile = ''; // Default color or other color if needed
$background_color_ads = ''; // Default color or other color if needed

// Check if the current script is MyProfile.php inside the components folder
if (strpos($_SERVER['REQUEST_URI'], '/components/MyProfile.php') !== false) {
    $background_color_profile = '#1ABA1A';
      $text_colorInfo = 'white';
    $arrowColorInfo = 'arrowProfileInfo.svg';
}else{
    $background_color_profile = 'white';
    $text_colorInfo = 'black';
    $arrowColorInfo = 'blackArrow.svg';
}

// Check if the current script is MyAdvertisements.php inside the components folder
if (strpos($_SERVER['REQUEST_URI'], '/components/MyAdvertisements.php') !== false) {
    $background_color_ads = '#1ABA1A';
    $text_color = 'white';
  $arrowColor = 'arrowProfileInfo.svg';
}else{
    $background_color_ads = 'white';
    $text_color = 'black';
    $arrowColor = 'blackArrow.svg';
}

session_start(); 


if (!isset($_SESSION['user'])) {
    header('Location: ../components/Login.php');
    exit();
}

$user = $_SESSION['user'];
$name = $user['name']; 
$email = $user['email'];
$phoneNumber = $user['phone'];

$nameParts = explode(' ', $name);

// Check if we have at least two parts (first and last name)
if (count($nameParts) >= 2) {
    $firstName = $nameParts[0];
    $lastName = $nameParts[1];
} else {
    // Handle cases where the name might not be in "First Last" format
    $firstName = $name;
    $lastName = ''; // or some default value
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/website Logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/myProfile.css">
    <title>My Profile</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- My Profile section starts -->
     <section id="Profile">
        <div id="pageLocation">
            <p id="pageLocationText">Home <i>/</i> <b>profile</b></p>
        </div>
        <div id="ProfileBox">
            <div id="ProfileInfo">
                <img src="../images/MyProfile/MyProfile.svg" alt="" id="ProfileImage">
                <h1><?php echo ($name); ?></h1>
                <p><?php echo ($email); ?></p>
                <div class="MyAccount" style="background-color: <?php echo $background_color_profile;?>; color: <?php echo $text_colorInfo;?> ">
    <a href="../router.php?route=MyProfile" style="text-decoration: none; color: <?php echo $text_colorInfo;?>">My Profile</a> <img src="../images/MyProfile/<?php echo $arrowColorInfo ?>" alt="" id="arrowProfile">
</div>
<div class="MyAccount" style="background-color: <?php echo $background_color_ads;?>; color: <?php echo $text_color;?> ">
    <a href="../router.php?route=MyAdvertisements" style="text-decoration: none; color: <?php echo $text_color;?>">My Advertisements</a> <img src="../images/MyProfile/<?php echo $arrowColor ?>" alt="" id="arrowProfile">
</div>
            </div>
            <div id="ProfileMain">
                <h1>Account info</h1>
                <form action="../Controllers/LoginAndRegistrationController.php?action=logout" method="POST">
                    <div class="formGroupLarge" id="formGroupName">
                        <div class="formGroup">
                            <label for="name">First Name <b>*</b></label><br>
                            <input type="text" id="name" name="name" placeholder="Mark" required value="<?php echo ($firstName); ?>">
                        </div>
                        <div class="formGroup">
                            <label for="name">Last Name <b>*</b></label><br>
                            <input type="text" id="name" name="name" placeholder="Cole" required value="<?php echo ($lastName); ?>">
                        </div>
                    </div>
                        <div class="formGroupLarge">
                            <div class="formGroup">
                                <label for="name">Email Address <b>*</b></label><br>
                                <input type="text" id="inputLong" name="name" placeholder="markCole@gmail.com" required value="<?php echo ($email); ?>">
                            </div>
                        </div>
                        <div class="formGroupLarge">
                            <div class="formGroup">
                                <label for="name">Phone Number<b>*</b></label><br>
                                <input type="text" id="inputLong" name="name" placeholder="98*******" required value="<?php echo ($phoneNumber); ?>">
                            </div>
                        </div>
                        <button id="Logout">Logout</button>
                    </form>
            </div>
        </div>
     </section>
    <!-- My Profile section ends -->

    <?php
        include 'footer.php';
    ?>
</body>
</html>