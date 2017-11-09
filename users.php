<?php
session_start();
if(!isset($_SESSION["valid"]))
{
  header("Location: login.php");
  exit();
}
?>
<html>
<head>
    <?php require "general_header.php" ?>
    <link rel="stylesheet" type="text/css" href="./css/coolCompany.css">
</head>

<body>
  <div id="home_header" class="row header">
      <div class="section ">
        <nav>
          <a href = "/" class="logo">
            <img src="./images/galaxy.svg" alt="logo">
          </a>
          <ul class="menu">
            <li><a href="logout.php">Sign Out</a></li>
            <li><a href="./news.php">Users</a></li>
            <li><a href="./news.php">News</a></li>
            <li><a href="./products.php">Products</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./home.php">Home</a></li>
          </ul>
        </nav>
      </div>
  </div>
  
  <div id="home_content" class="row">
    <p class="table_title">Current Users</p>
    <table class="table">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text"><td>Mary</td><td>Smith</td><td>100@xmail.com</td></tr>
        <tr class="text"><td>John</td><td>Wang</td><td>101@xmail.com</td></tr>
        <tr class="text"><td>Alex</td><td>Bington</td><td>102@xmail.com</td></tr>
      </tbody>
    </table>
  </div>
  
  <div id="home_footer" class="row footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
