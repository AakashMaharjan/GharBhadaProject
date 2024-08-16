<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../images/website Logo.jpg">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Dashboard</title>
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
        <div id="ListOfUsers">
            <h1>List of Users</h1>
            <table>
                <tr>
                    <th>Username</th>
                    <th>User ID</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td>1</td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>Laxman</td>
                    <td>2</td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>Sita</td>
                    <td>3</td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>Hanuman</td>
                    <td>4</td>
                    <td><button>Delete</button></td>
                </tr>
            </table>
        </div>
        <div id="ListOfUsers">
            <h1>List of Advertisements</h1>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Post Name</th>
                    <th>Post ID</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td>1BHK flat</td>
                    <td>1</td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td>1BHK flat</td>
                    <td>1</td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td>1BHK flat</td>
                    <td>1</td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td>1BHK flat</td>
                    <td>1</td>
                    <td><button>Delete</button></td>
                </tr>
            </table>
        </div>
        <div id="ListOfUsers">
            <h1>Boost Post Requests</h1>
            <table>
                <tr>
                    <th>Post ID</th>
                    <th>Post Name</th>
                    <th>Payment Image</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>  
                    <td>1BHK flat</td>
                    <td><img src="../images/RecentPosts/roomImage1.png" alt=""></td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>2</td>  
                    <td>1BHK flat</td>
                    <td><img src="../images/RecentPosts/roomImage1.png" alt=""></td>
                    <td><button>Delete</button></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>