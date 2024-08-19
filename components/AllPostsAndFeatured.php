<?php
require_once 'Models/PostCRUDModel.php';
require_once 'Database/DatabaseConnection.php';

$PostCRUDModel = new PostCRUD($db);

$AllPosts = $PostCRUDModel->getAllPosts();
?>

<section id="allPostsAndFeaturedMain">
    <div id="AllPosts">
        <p id="AllPostsTitle">All posts</p>
        <div id="AllPostsBox">
            <?php foreach ($AllPosts as $posts): ?>
              <a href="../router.php?route=SinglePost&post_id=<?php echo ($posts['id']); ?>" id="searchPost">
                <div id="AllPost">
                  <img src="<?php echo ($posts['image1']) ?>" alt="" id="AllPostImg">
                  <div id="AllPostInformation">
                    <h1 id="AllPostTitle"><?php echo ($posts['title']) ?></h1>
                    <p id="AllPostDescription"><?php echo ($posts['description']) ?></p>
                    <p id="AllPostPrice">Rs<?php echo number_format($posts['rent']) ?>/mo.</p>
                    <div id="AllPostType">
                        <div id="AllPostLocation"><?php echo ($posts['location']) ?></div>
                        <div id="AllPostRoomType"><?php echo ($posts['for_whom']) ?></div>
                    </div>
                    <div id="AllPostPhoneNumber">   
                        <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="AllPostPhoneIcon">
                        <p id="AllPostNumber"><?php echo ($posts['phone_number']) ?></p>
                    </div>
                  </div>
                </div>
              </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="FeaturedAndBestDeals">

        <p id="AllPostsTitle">Featured</p>
        <div class="FeaturedAndBestDealsSlides">
            <div id="leftButton1" class="btn prev1">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="90" viewBox="0 0 45 90" fill="none">
                    <rect x="0.299561" y="0.696045" width="44.2396" height="88.4793" rx="6.63594" fill="#EDEFF6"/>
                    <path d="M15.3717 46.8915L27.5778 57.6446C27.7783 57.8229 28.0168 57.9645 28.2796 58.0611C28.5424 58.1578 28.8243 58.2075 29.109 58.2075C29.3937 58.2075 29.6756 58.1578 29.9384 58.0611C30.2012 57.9645 30.4397 57.8229 30.6402 57.6446C31.0418 57.288 31.2673 56.8056 31.2673 56.3028C31.2673 55.8 31.0418 55.3176 30.6402 54.961L19.9652 45.445L30.6402 36.0242C31.0418 35.6676 31.2673 35.1852 31.2673 34.6824C31.2673 34.1796 31.0418 33.6973 30.6402 33.3407C30.4404 33.1609 30.2022 33.0178 29.9394 32.9198C29.6766 32.8218 29.3943 32.7708 29.109 32.7697C28.8237 32.7708 28.5414 32.8218 28.2786 32.9198C28.0157 33.0178 27.7776 33.1609 27.5778 33.3407L15.3717 44.0938C15.1528 44.272 14.9781 44.4883 14.8586 44.729C14.7391 44.9698 14.6774 45.2298 14.6774 45.4926C14.6774 45.7555 14.7391 46.0154 14.8586 46.2562C14.9781 46.497 15.1528 46.7133 15.3717 46.8915Z" fill="black"/>
                  </svg>
            </div>
            <div class="FeaturedSlidesContainer">
                <div class="FeaturedSlider">
                    <div class="FeaturedSlide">
                        <img src="images/RecentPosts/roomImage1.png" alt="room image 1">
              <h1>1BHK Available for Rent slide</h1>
              <p id="price1">Rs10,000/mo.</p>
              <div id="roomCardType1">
                <div id="roomCardTypeLocation1">Baluwatar</div>
                <div id="roomCardTypeForNumber1">For family</div>  
              </div>
              <div id="PhoneNumberCard1">
                <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="phoneIcon1">
                <p>9841234567</p>
              </div>
                    </div>
                    <div class="FeaturedSlide">
                        <img src="images/RecentPosts/roomImage1.png" alt="room image 1">
              <h1>1BHK Available for Rent</h1>
              <p id="price1">Rs10,000/mo.</p>
              <div id="roomCardType1">
                <div id="roomCardTypeLocation1">Baluwatar</div>
                <div id="roomCardTypeForNumber1">For family</div>  
              </div>
              <div id="PhoneNumberCard1">
                <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="phoneIcon1">
                <p>9841234567</p>
              </div>
                    </div>
                    <div class="FeaturedSlide">
                        <img src="images/RecentPosts/roomImage1.png" alt="room image 1">
              <h1>1BHK Available for Rent</h1>
              <p id="price1">Rs10,000/mo.</p>
              <div id="roomCardType1">
                <div id="roomCardTypeLocation1">Baluwatar</div>
                <div id="roomCardTypeForNumber1">For family</div>  
              </div>
              <div id="PhoneNumberCard1">
                <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="phoneIcon1">
                <p>9841234567</p>
              </div>
                    </div>
                    <div class="FeaturedSlide">
                        <img src="images/RecentPosts/roomImage1.png" alt="room image 1">
              <h1>1BHK Available for Rent</h1>
              <p id="price1">Rs10,000/mo.</p>
              <div id="roomCardType1">
                <div id="roomCardTypeLocation1">Baluwatar</div>
                <div id="roomCardTypeForNumber1">For family</div>  
              </div>
              <div id="PhoneNumberCard1">
                <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="phoneIcon1">
                <p>9841234567</p>
              </div>
                    </div>
                </div>
            </div>
            <div id="rightButton1" class="btn next1">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="89" viewBox="0 0 45 89" fill="none">
                    <rect x="0.308716" y="0.37793" width="44.2396" height="88.4793" rx="6.63594" fill="#EDEFF6"/>
                    <path d="M29.4762 43.7677L17.2701 33.0146C17.0696 32.8362 16.8311 32.6947 16.5683 32.598C16.3055 32.5014 16.0236 32.4517 15.7389 32.4517C15.4542 32.4517 15.1723 32.5014 14.9095 32.598C14.6467 32.6947 14.4082 32.8362 14.2077 33.0146C13.8061 33.3712 13.5806 33.8536 13.5806 34.3564C13.5806 34.8592 13.8061 35.3415 14.2077 35.6981L24.8827 45.2141L14.2077 54.635C13.8061 54.9916 13.5806 55.4739 13.5806 55.9767C13.5806 56.4795 13.8061 56.9619 14.2077 57.3185C14.4075 57.4983 14.6457 57.6414 14.9085 57.7394C15.1713 57.8374 15.4536 57.8884 15.7389 57.8894C16.0242 57.8884 16.3065 57.8374 16.5693 57.7394C16.8322 57.6414 17.0703 57.4983 17.2701 57.3185L29.4762 46.5654C29.6951 46.3872 29.8698 46.1709 29.9893 45.9301C30.1088 45.6894 30.1705 45.4294 30.1705 45.1666C30.1705 44.9037 30.1088 44.6437 29.9893 44.403C29.8698 44.1622 29.6951 43.9459 29.4762 43.7677Z" fill="black"/>
                  </svg>
            </div>
        </div>
        <p id="AllPostsTitle">Best Deals</p>
        <div class="FeaturedAndBestDealsSlides2">
            <div id="leftButton2" class="btn prev2">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="90" viewBox="0 0 45 90" fill="none">
                    <rect x="0.299561" y="0.696045" width="44.2396" height="88.4793" rx="6.63594" fill="#EDEFF6"/>
                    <path d="M15.3717 46.8915L27.5778 57.6446C27.7783 57.8229 28.0168 57.9645 28.2796 58.0611C28.5424 58.1578 28.8243 58.2075 29.109 58.2075C29.3937 58.2075 29.6756 58.1578 29.9384 58.0611C30.2012 57.9645 30.4397 57.8229 30.6402 57.6446C31.0418 57.288 31.2673 56.8056 31.2673 56.3028C31.2673 55.8 31.0418 55.3176 30.6402 54.961L19.9652 45.445L30.6402 36.0242C31.0418 35.6676 31.2673 35.1852 31.2673 34.6824C31.2673 34.1796 31.0418 33.6973 30.6402 33.3407C30.4404 33.1609 30.2022 33.0178 29.9394 32.9198C29.6766 32.8218 29.3943 32.7708 29.109 32.7697C28.8237 32.7708 28.5414 32.8218 28.2786 32.9198C28.0157 33.0178 27.7776 33.1609 27.5778 33.3407L15.3717 44.0938C15.1528 44.272 14.9781 44.4883 14.8586 44.729C14.7391 44.9698 14.6774 45.2298 14.6774 45.4926C14.6774 45.7555 14.7391 46.0154 14.8586 46.2562C14.9781 46.497 15.1528 46.7133 15.3717 46.8915Z" fill="black"/>
                  </svg>
            </div>
            <div class="FeaturedSlidesContainer2">
                <div class="FeaturedSlider2">
                    <div class="FeaturedSlide2">
                        <img src="images/RecentPosts/roomImage1.png" alt="room image 1">
              <h1>1BHK Available for Rent slide</h1>
              <p id="price2">Rs10,000/mo.</p>
              <div id="roomCardType2">
                <div id="roomCardTypeLocation2">Baluwatar</div>
                <div id="roomCardTypeForNumber2">For family</div>  
              </div>
              <div id="PhoneNumberCard2">
                <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="phoneIcon2">
                <p>9841234567</p>
              </div>
                    </div>
                    <div class="FeaturedSlide2">
                        <img src="images/RecentPosts/roomImage1.png" alt="room image 1">
              <h1>1BHK Available for Rent</h1>
              <p id="price1">Rs10,000/mo.</p>
              <div id="roomCardType1">
                <div id="roomCardTypeLocation1">Baluwatar</div>
                <div id="roomCardTypeForNumber1">For family</div>  
              </div>
              <div id="PhoneNumberCard1">
                <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="phoneIcon1">
                <p>9841234567</p>
              </div>
                    </div>
                    <div class="FeaturedSlide2">
                        <img src="images/RecentPosts/roomImage1.png" alt="room image 1">
              <h1>1BHK Available for Rent</h1>
              <p id="price1">Rs10,000/mo.</p>
              <div id="roomCardType1">
                <div id="roomCardTypeLocation1">Baluwatar</div>
                <div id="roomCardTypeForNumber1">For family</div>  
              </div>
              <div id="PhoneNumberCard1">
                <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="phoneIcon1">
                <p>9841234567</p>
              </div>
                    </div>
                    <div class="FeaturedSlide2">
                        <img src="images/RecentPosts/roomImage1.png" alt="room image 1">
              <h1>1BHK Available for Rent</h1>
              <p id="price1">Rs10,000/mo.</p>
              <div id="roomCardType1">
                <div id="roomCardTypeLocation1">Baluwatar</div>
                <div id="roomCardTypeForNumber1">For family</div>  
              </div>
              <div id="PhoneNumberCard1">
                <img src="images/RecentPosts/phoneIcon.svg" alt="phone icon" id="phoneIcon1">
                <p>9841234567</p>
              </div>
                    </div>
                </div>
            </div>
            <div id="rightButton2" class="btn next2">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="89" viewBox="0 0 45 89" fill="none">
                    <rect x="0.308716" y="0.37793" width="44.2396" height="88.4793" rx="6.63594" fill="#EDEFF6"/>
                    <path d="M29.4762 43.7677L17.2701 33.0146C17.0696 32.8362 16.8311 32.6947 16.5683 32.598C16.3055 32.5014 16.0236 32.4517 15.7389 32.4517C15.4542 32.4517 15.1723 32.5014 14.9095 32.598C14.6467 32.6947 14.4082 32.8362 14.2077 33.0146C13.8061 33.3712 13.5806 33.8536 13.5806 34.3564C13.5806 34.8592 13.8061 35.3415 14.2077 35.6981L24.8827 45.2141L14.2077 54.635C13.8061 54.9916 13.5806 55.4739 13.5806 55.9767C13.5806 56.4795 13.8061 56.9619 14.2077 57.3185C14.4075 57.4983 14.6457 57.6414 14.9085 57.7394C15.1713 57.8374 15.4536 57.8884 15.7389 57.8894C16.0242 57.8884 16.3065 57.8374 16.5693 57.7394C16.8322 57.6414 17.0703 57.4983 17.2701 57.3185L29.4762 46.5654C29.6951 46.3872 29.8698 46.1709 29.9893 45.9301C30.1088 45.6894 30.1705 45.4294 30.1705 45.1666C30.1705 44.9037 30.1088 44.6437 29.9893 44.403C29.8698 44.1622 29.6951 43.9459 29.4762 43.7677Z" fill="black"/>
                  </svg>
            </div>
        </div>
    </div>
</section>