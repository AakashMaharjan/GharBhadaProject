<?php
// Check if 'route' parameter is set and its value
if (isset($_GET['route']) && $_GET['route'] === 'register') {
    // Redirect to login.php
    header("Location: Register.php");
    exit(); // Ensure no further code is executed after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/website Logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Register</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- log in section starts -->
     <section id="Register">
        <div id="pageLocation">
            <p id="pageLocationText">Home <i>/</i> <b>Register</b></p>
        </div>
        <div id="RegisterMain">
            <img src="../images/loginAndRegistration/login.svg" alt="">
            <div id="loginForm">
                <form action="">
                    <h1 id="WelcomeBack">Register</h1>
                    <p id="loginToContinue">Join to us</p>
                    <label for="Name" class="loginLabel">Your name</label>
                    <input type="text" placeholder="Ram Laxman">
                    <label for="email" class="loginLabel">Email Address</label>
                    <input type="text" placeholder="Example@gmail.com">
                    <label for="phone number" class="loginLabel">Phone Number</label>
                    <input type="text" placeholder="98*******">
                    <label for="password" class="loginLabel">Password</label>
                    <input type="password" placeholder="...">
                    <label for="confirm password" class="loginLabel">Confirm Password</label>
                    <input type="password" placeholder="...">
                    <button>login</button>
                    <p id="SignUpHere">already user ? <b><a href="">Login</a></b></p>
                </form>
            </div>
        </div>
     </section>
    <!-- log in section ends -->

    <?php
        include 'footer.php';
    ?>
</body>
</html>