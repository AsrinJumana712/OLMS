<?php
require('dbconn.php');
?>

<?php
if ($_SESSION['RollNo']){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>OLMS</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            <img src="images/logo.jpg" alt=""></i>MillionOLMS
        </div>

        <div class="search_bar">
            <input type="text" placeholder="Search" />
        </div>

        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <i class='bx bx-sun' id="darkLight"></i>
            <img src="images/profile.jpg" alt="" class="profile" />
        </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
        <div class="menu_content">
            <ul class="menu_items">
                <div class="menu_title menu_dahsboard"></div>
                <!-- start -->
                <li class="item">
                    <a href="home.html" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class="bx bx-home-alt"></i>
                        </span>
                        <span class="navlink">Home</span>
                    </a>
                </li>

                <li class="item">
                    <a href="profile.html" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class='bx bx-user-circle'></i>
                        </span>
                        <span class="navlink">My Profile</span>
                    </a>
                </li>

                <li class="item">
                    <a href="message.html" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class='bx bx-chat'></i>
                        </span>
                        <span class="navlink">Messages</span>
                    </a>
                </li>

                <li class="item">
                    <a href="book_details.html" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class='bx bx-book'></i>
                        </span>
                        <span class="navlink">All Books</span>
                    </a>
                </li>

                <li class="item">
                    <a href="currently_reserved.html" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class='bx bxs-edit'></i>
                        </span>
                        <span class="navlink">Previously Borrowed <br> Books</span>
                    </a>
                </li>

                <li class="item">
                    <a href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class='bx bx-right-indent'></i>
                        </span>
                        <span class="navlink">Currently Reserved <br> Books</span>
                    </a>
                </li>

                <li class="item">
                    <a href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class='bx bx-log-out-circle'></i>
                        </span>
                        <span class="navlink">Logout</span>
                    </a>
                </li>

            </ul>

            <!-- Sidebar Open / Close -->
            <div class="bottom_content">
                <div class="bottom expand_sidebar">
                    <span> Expand</span>
                    <i class='bx bx-log-in'></i>
                </div>
                <div class="bottom collapse_sidebar">
                    <span> Collapse</span>
                    <i class='bx bx-log-out'></i>
                </div>
            </div>
        </div>
    </nav>

    <main class="message_content">
        <section class="message-section">
            <div>
                <button class="due_btn"><a style ="text-decoration:none; color: aliceblue;" href="Due_fund.html">Due Fund</a></button>  
            </div>
            <table class="message-table">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                </thead>
            <tbody>
                <?php
                $rollno = $_SESSION['RollNo'];
                $sql="select * FROM LMS.message where RollNo = '$rollno' order by Date DESC, Time DESC";
                $result=$conn-> query($sql);
                while($row=$result-> fetch_assoc())
                {
                    $msg=$row['Msg'];
                    $date=$row['Date'];
                    $time=$row['Time'];
                    ?>
                    
                        <tr>
                            <td><?php echo $msg ?></td>
                            <td><?php echo $date ?></td>
                            <td><?php echo $time ?></td>
                        </tr>
               <?php } ?>
            </tbody>
            </table>
        </section>
        </main>

        <footer>
            <div class="footer-content">
                <div>
                    <h3>Million Library</h3>
                    <p>OLMS</p>
                </div>
                <div>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="#">Plans</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        
        <p style="margin-left: 650px; margin-top: 20px;">&copy; 2024 Million Library. All rights reserved.</p>

        <script src="script.js"></script>
</body>

</html>

<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>  