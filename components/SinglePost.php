<?php
require_once '../Models/PostCRUDModel.php';
require_once '../Database/DatabaseConnection.php';

$PostCRUDModel = new PostCRUD($db);

if (isset($_GET['post_id'])) {
    $id = $_GET['post_id'];
    $SinglePost = $PostCRUDModel->getSinglePost($id);
} else {
    // Handle the case where post_id is not provided
    echo "No post ID provided.";
    exit();
}

function formatDate($dateString) {
  $date = new DateTime($dateString);
  return $date->format('jS \of F Y');
}

// Usage
$formattedDate = formatDate($SinglePost['created_at']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/website Logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/SinglePost.css">
    <title>Log In</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- log in section starts -->
     <section id="SinglePost">
        <div id="pageLocation">
            <p id="pageLocationText">Home <i>/</i> <b><?php echo($SinglePost['title']) ?></b></p>
        </div>
        <div id="SinglePostMain">
            <div id="SinglePostInfo">
                <div id="SinglePostImage">
                    <div class="container">
                        <div class="mySlides">
                      
                          <img src="<?php echo($SinglePost['image1']) ?>" class="SlideMain">
                        </div>
                      
                        <div class="mySlides">
                      
                          <img src="<?php echo($SinglePost['image2']) ?>" class="SlideMain">
                        </div>
                      
                        <div class="mySlides">
                      
                          <img src="<?php echo($SinglePost['image3']) ?>" class="SlideMain">
                        </div>
                          
                          
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                      
                      
                        <div class="row">
                          <div class="column">
                            <img class="demo cursor" src="<?php echo($SinglePost['image1']) ?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="<?php echo($SinglePost['image2']) ?>" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="<?php echo($SinglePost['image3']) ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                          </div>
                        </div>
                      </div>
                </div>
                <div id="SinglePostSpec">
                    <h1 id="SinglePostTitle"><?php echo($SinglePost['title']) ?></h1>
                    <h2 id="SinglePostPrice"><?php echo number_format($SinglePost['rent']) ?>/mo.</h2>
                    <ul id="SinglePostType">
                        <li id="Type">Type : <?php echo($SinglePost['type']) ?></li>
                        <li id="Entrance">Entrance : <?php echo($SinglePost['entrance']) ?></li>
                        <li id="Floor">Floor : <?php echo($SinglePost['floor']) ?></li>
                    </ul>
                    <div id="roomCardType">
                        <div id="roomCardTypeLocation"><?php echo($SinglePost['location']) ?></div>
                        <div id="roomCardTypeForNumber">For <?php echo($SinglePost['for_whom']) ?></div>  
                      </div>
                      <div id="Specification">
                        <h1>Specifications:</h1>
                        <p>Road Size : <?php echo($SinglePost['road_size']) ?></p>
                        <p>Bathroom: <?php echo($SinglePost['restrooms']) ?></p>
                        <p>Living Room : <?php echo($SinglePost['living_rooms']) ?></p>
                        <p>Bedroom : <?php echo($SinglePost['bedrooms']) ?></p>
                        <p>Created at : <?php echo($formattedDate) ?></p>
                      </div>
                </div>
                <div id="SinglePostContact">
                    <div id="LanlordInfo">
                        <h1>LANDLORD INFORMATION:</h1>
                        <div id="LandlordName">
                        <p>name : <?php echo($SinglePost['name']) ?></p>
                        <p>phone : <?php echo($SinglePost['phone_number']) ?></p>
                    </div>
                    </div>
                    <div id="Note">
                        <p>Note: We recommend you to physically inspect the apartment/ room before making payment. Avoid paying fees or advance payment to sellers. </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="SinglePostDescription">
            <h1>description</h1>
            <p><?php echo($SinglePost['description']) ?> </p>
        </div>
    </section>
    <!-- log in section ends -->

    <script src="../js/SinglePost.js"></script>

    <?php
        include 'footer.php';
    ?>
</body>
</html>