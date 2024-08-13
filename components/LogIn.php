<?php
// Check if 'route' parameter is set and its value
if (isset($_GET['route']) && $_GET['route'] === 'login') {
    // Redirect to login.php
    header("Location: Login.php");
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
    <title>Log In</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- log in section starts -->
     <section id="Login">
        <div id="pageLocation">
            <p id="pageLocationText">Home <i>/</i> <b>Login</b></p>
        </div>
        <div id="loginMain">
            <img src="../images/loginAndRegistration/login.svg" alt="">
            <div id="loginForm">
                <form action="">
                    <h1 id="WelcomeBack">Welcome Back</h1>
                    <p id="loginToContinue">login to continue</p>
                    <label for="email" class="loginLabel">Email Address</label>
                    <input type="text" placeholder="Example@gmail.com">
                    <label for="password" class="loginLabel">Password</label>
                    <input type="password" placeholder="...">
                    <button>login</button>
                    <p id="SignUpHere">new user ? <b><a href="">Sign Up</a></b></p>
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