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
          <div id="AdvertisementList">
            <p id="PostId">1</p>
            <p id="PostName">1BHK flat</p>
            <div id="PostActions">
              <button id="BoostPost">Boost Post</button>
              <button id="EditPost">Edit</button>
              <button id="DeletePost">Delete</button>
            </div>
          </div>
          <div id="AdvertisementList">
            <p id="PostId">2</p>
            <p id="PostName">1BHK flat</p>
            <div id="PostActions">
              <button id="BoostPost">Boost Post</button>
              <button id="EditPost">Edit</button>
              <button id="DeletePost">Delete</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- My Profile section ends -->

    <?php
        include 'footer.php';
    ?>
  </body>
</html>
