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

require_once '../Models/PostCRUDModel.php';
require_once '../Database/DatabaseConnection.php';

$PostCRUDModel = new PostCRUD($db);
session_start();
$user = $_SESSION['user'];
    $id = $user['id'];
    $Posts = $PostCRUDModel->getUserPosts($id);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/website Logo.jpg" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/myProfile.css" />
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
          <img
            src="../images/MyProfile/MyProfile.svg"
            alt=""
            id="ProfileImage"
          />
          <h1>Mark Cole</h1>
          <p>markCole@gmail.com</p>
          <div
            class="MyAccount"
            style="background-color: <?php echo $background_color_profile;?>; color: <?php echo $text_colorInfo;?> "
          >
            <a
              href="../router.php?route=MyProfile"
              style="text-decoration: none; color: <?php echo $text_colorInfo;?>"
              >My Profile</a
            >
            <img
              src="../images/MyProfile/<?php echo $arrowColorInfo ?>"
              alt=""
              id="arrowProfile"
            />
          </div>
          <div
            class="MyAccount"
            style="background-color: <?php echo $background_color_ads;?>;  "
          >
            <a
              href="../router.php?route=MyAdvertisements"
              style="text-decoration: none; color: <?php echo $text_color;?>"
              >My Advertisements</a
            >
            <img
              src="../images/MyProfile/<?php echo $arrowColor ?>"
              alt=""
              id="arrowProfile"
            />
          </div>
        </div>
        <div id="AdvertismentMain">
          <h1>Advertisements List</h1>
          <div id="AdvertisementList">
            <p id="PostId">Post ID</p>
            <p id="PostName">Post Name</p>
            <div id="PostAction">
              <p>Post Action</p>
            </div>
          </div>
          <?php foreach ($Posts as $post): ?>
          <div id="AdvertisementList">
            <p id="PostId"><?php echo($post['id']) ?></p>
            <p id="PostName"><?php echo($post['title']) ?></p>
            <div id="PostActions">
              <button id="BoostPost" onclick="PaymentForBoost(event)">Boost Post</button>
              <button id="EditPost">Edit</button>
              <button id="DeletePost">Delete</button>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- My Profile section ends -->

    <div id="PaymentInfo">
      <h1>Payment Info</h1>
      <p>Pay using Esewa</p>
      <img src="../images/RecentPosts/roomImage1.png" alt="">
      <form action="">
        <label for="PostID">Post Id</label>
        <input type="text" id="PostID" name="PostID" placeholder="Post ID">
        <label for="PostName">Post Name</label>
        <input type="text" id="PostName" name="PostName" placeholder="Post Name">
        <label for="PayUsingEsewaMethod" id="PaymentScreenShotPicture">Upload Transaction Screenshot</label>
        <input type="file" id="PayUsingEsewaMethod" name="PayUsingEsewaMethod">
        <button onclick="PaymentMade()">Submit</button>
      </form>
    </div>

    <?php
        include 'footer.php';
    ?>

    <script src="../js/custom.js"></script>
  </body>
</html>
