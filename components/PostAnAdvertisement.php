<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/website Logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/postAndAdvertisement.css">
    <title>Post an advertisement</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- Post and Advertisement section starts -->
     <section id="PostAnAdvertisement">
        <div id="pageLocation">
            <p id="pageLocationText">Home <i>/</i> <b>Post an Advertisment</b></p>
        </div>
        <h1 id="PostAnAdvertisementTitle">Post an advertisment</h1>
        <p id="fillAllBoxes">Please fill all boxes</p>
        <form action="">
            <div class="formGroupLarge">
            <div class="formGroup">
                <label for="name">Name <b>*</b></label><br>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="formGroup">
                <label for="name">Phone Number <b>*</b></label><br>
                <input type="text" id="phoneNumberform" name="phoneNumber" required>
            </div>
        </div>
            <div class="formGroupLarge">
            <div class="formGroup">
                <label for="name">Title of the room/apartment for rent <b>*</b></label><br>
                <input type="text" id="titlePost" name="title" required>
            </div>
        </div>
        <div class="formGroupLarge">
            <div class="formGroup">
                <label for="name">Rent per month  <b>*</b></label><br>
                <input type="text" id="rentPerMonth" name="phoneNumber" required>
            </div>
            <div class="formGroup">
                <label for="name">Location <b>*</b></label><br>
                <input type="text" id="location" name="location" required>
            </div>
        </div>
        <div class="formGroupLarge">
            <div class="formGroup">
                <label for="name">Type <b>*</b></label><br>
                <select name="type" id="type" required>
                    <option value="residential" selected>Residential</option>
                    <option value="apartment">Commercial</option>
                </select>
            </div>
        </div>
        <div class="formGroupLarge">
            <div class="formGroup">
                <label for="name">Floor  <b>*</b></label><br>
                <input type="text" id="floor" name="floor" required>
            </div>
            <div class="formGroup">
                <label for="name">Entrance <b>*</b></label><br>
                <input type="text" id="entrance" name="entrance" required>
            </div>
        </div>
        <div class="formGroupLarge">
            <div class="formGroup">
                <label for="name">For <b>*</b></label><br>
                <select name="for" id="for" required>
                    <option value="residential" selected>Family</option>
                    <option value="apartment">Single</option>
                </select>
            </div>
        </div>
        <div class="formGroupLarge">
            <div class="formGroup">
                <label for="name">Road Size  <b>*</b></label><br>
                <input type="text" id="floor" name="floor" required>
            </div>
            <div class="formGroup">
                <label for="name">Number of bedroom <b>*</b></label><br>
                <input type="text" id="entrance" name="entrance" required>
            </div>
        </div>
        <div class="formGroupLarge">
            <div class="formGroup">
                <label for="name">Number of living room <b>*</b></label><br>
                <input type="text" id="floor" name="floor" required>
            </div>
            <div class="formGroup">
                <label for="name">Number of bedroom <b>*</b></label><br>
                <input type="text" id="entrance" name="entrance" required>
            </div>
        </div>
        <div class="formGroupLarge">
            <div class="formGroup" id="image1box">
                <label for="name">Image 1 <b>*</b></label><br>
                <input type="file" id="image1" name="image1" required><label for="image1" id="ChooseFile">Choose file</label>
            </div>
            <div class="formGroup">
                <label for="name">Image 2 <b>*</b></label><br>
                <input type="file" id="image2" name="image2" required><label for="image2" id="ChooseFile">Choose file</label>
            </div>
            <div class="formGroup">
                <label for="name">Image 3 <b>*</b></label><br>
                <input type="file" id="image3" name="image3" required><label for="image3" id="ChooseFile">Choose file</label>
            </div>
            </div>
            </div>
        </div>
        <div class="formGroupLarge" id="DescriptionBox">
            <div class="formGroup>
                <label for="name">Description <b>*</b></label><br><br>
                <textarea name="description" id="description" placeholder="Room features, requirements, etc." required></textarea>
            </div>
        </div>
        <button id="submitPost">Submit</button>
        </form>
     </section>
    <!-- Post and Advertisement section ends -->

    <?php
        include 'footer.php';
    ?>
</body>
</html>