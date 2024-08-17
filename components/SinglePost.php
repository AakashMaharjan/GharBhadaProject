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
            <p id="pageLocationText">Home <i>/</i> <b>1BHK Room Available for Rent</b></p>
        </div>
        <div id="SinglePostMain">
            <div id="SinglePostInfo">
                <div id="SinglePostImage">
                    <div class="container">
                        <div class="mySlides">
                      
                          <img src="../images/SinglePost/SinglePost1.png" class="SlideMain">
                        </div>
                      
                        <div class="mySlides">
                      
                          <img src="../images/SinglePost/SinglePost2.svg" class="SlideMain">
                        </div>
                      
                        <div class="mySlides">
                      
                          <img src="../images/SinglePost/SinglePost3.svg" class="SlideMain">
                        </div>
                          
                          
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                      
                      
                        <div class="row">
                          <div class="column">
                            <img class="demo cursor" src="../images/SinglePost/SinglePost1.png" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="../images/SinglePost/SinglePost2.svg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="../images/SinglePost/SinglePost3.svg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                          </div>
                        </div>
                      </div>
                </div>
                <div id="SinglePostSpec">
                    <h1 id="SinglePostTitle">1BHK Room Available for Rent</h1>
                    <h2 id="SinglePostPrice">Rs.10,000/mo.</h2>
                    <ul id="SinglePostType">
                        <li id="Type">Type : Residential</li>
                        <li id="Entrance">Entrance : Separate</li>
                        <li id="Floor">Floor : Ground Floor</li>
                    </ul>
                    <div id="roomCardType">
                        <div id="roomCardTypeLocation">Baluwatar</div>
                        <div id="roomCardTypeForNumber">For family</div>  
                      </div>
                      <div id="Specification">
                        <h1>Specifications:</h1>
                        <p>Road Size : FiveToFourteenFt</p>
                        <p>Furnishing : None</p>
                        <p>Bathroom: 1</p>
                        <p>Living Room : 1</p>
                        <p>Bedroom : 2</p>
                        <p>Road Type : Pitched</p>
                      </div>
                </div>
                <div id="SinglePostContact">
                    <div id="LanlordInfo">
                        <h1>LANDLORD INFORMATION:</h1>
                        <div id="LandlordName">
                        <p>name : ram</p>
                        <p>phone : 982364843</p>
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
            <p>This spacious room is located in a modern downtown apartment, perfect for professionals or students. The room is large enough to comfortably fit a queen-sized bed, a desk, and a wardrobe, with modern furnishings and a neutral color scheme that creates a relaxing atmosphere. Residents will have access to a fully equipped kitchen, a cozy living room, and a stylish dining area, making it easy to enjoy both privacy and shared spaces. </p>
        </div>
    </section>
    <!-- log in section ends -->

    <script src="../js/SinglePost.js"></script>

    <?php
        include 'footer.php';
    ?>
</body>
</html>