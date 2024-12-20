<?php
ob_start();
require('dbconn.php');
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
              <i class='bx bxs-user-detail'></i>
            </span>
            <span class="navlink">All Books</span>
          </a>
        </li>

        <li class="item">
          <a href="#" class="nav_link submenu_item">
            <span class="navlink_icon">
              <i class='bx bx-book'></i>
            </span>
            <span class="navlink">Previously Borrowed <br> Books</span>
          </a>
        </li>

        <li class="item">
          <a href="currently_reserved.html" class="nav_link submenu_item">
            <span class="navlink_icon">
              <i class='bx bxs-edit'></i>
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


  <!-- Profile Page -->
  <div class="profile_page">
    <div class="profile_box">
      <img src="images/profile.jpg" alt="User Image" class="profile_image" />
      <?php
      $rollno = $_SESSION['RollNo'];
      $sql = "select * from LMS.user where RollNo='$rollno'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $name = $row['Name'];
      $category = $row['Category'];
      $email = $row['EmailId'];
      $mobno = $row['MobNo'];
      ?>
      <i>
        <h1 class="card-title">
          <center><?php echo $name ?></center>
        </h1>
        <br>
        <p><b>Email ID: </b><?php echo $email ?></p>
        <br>
        <p><b>Roll No: </B><?php echo $rollno ?></p>
        <br>
        <p><b>Category: </b><?php echo $category ?></p>
        <br>
        <p><b>Mobile number: </b><?php echo $mobno ?></p>
        </b>
      </i>

    </div>
  </div>
  <a href="edit_profile.html" class="edit_button">Edit Details</a>
  </div>
  </div>

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