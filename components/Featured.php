<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../images/website Logo.jpg">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/Featured.css">
    <title>Add to Featured/Best Deals</title>
</head>
<body>
    <header>
        <div id="Dashboard">
        <p><img src="../images/Dashboard/homeIcon.svg" alt=""><a href="../router.php?route=DashBoard">Home</a></p>
        <p><img src="../images/Dashboard/settingsIcon.svg" alt=""><a href="../router.php?route=Featured">Add to Featured/ Best Deals</a></p>
    </div>
        <div id="AdminInfo">
            <img src="../images/contactMenu/ProfileImage.svg" alt="">
            <p>Admin</p>
        </div>
    </header>
    <main>
        <div id="DashboardMain">
            <div id="TotalEarnings">
                <img src="../images/Dashboard/shopIcon.svg" alt="">
                <div>
                    <h1>Total Earnings</h1>
                    <p>Rs.30,000</p>
                </div>
            </div>
            <div id="TotalUsers">
                <img src="../images/Dashboard/peopleIcon.svg" alt="">
                <div>
                    <h1>Total Users</h1>
                    <p>5,325</p>
                </div>
            </div>
            <div id="TotalPosts">
                <img src="../images/Dashboard/listIcon.svg" alt="">
                <div>
                    <h1>Total Posts</h1>
                    <p>4,444</p>    
                </div>
            </div>
        </div>
        <form action="">
            <div id="formFeature">
                <label for="">Post ID</label><br>
                <input type="text" placeholder="Post ID">
            </div>
            <div id="formFeature">
                <label for="">Post Name</label><br>
                <input type="text" placeholder="Post Name">
            </div>
            <div id="formFeature">
                <label for="">Type</label><br>
                <select name="Type" id="Type">
                    <option value="Featured">Featured</option>
                    <option value="Best Deals">Best Deals</option>
                </select>
            </div>
            <div>
            <button>Boost</button>
            </div>  
        </form>
        <div id="ListOfUsers">
            <h1>List of Boosted Posts</h1>
            <table>
                <tr>
                    <th>Post Name</th>
                    <th>Post Section</th>
                    <th>Boosted Date</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1BHK flat</td>
                    <td>Featured</td>
                    <td>24th of Jan</td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>1BHK flat</td>
                    <td>Featured</td>
                    <td>24th of Jan</td>
                    <td><button>Delete</button></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>