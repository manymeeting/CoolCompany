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
    <link rel="stylesheet" type="text/css" href="./css/users.css">
</head>

<body>
  <div class="row header coolcp_header">
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
  <div class="row coolcp_banner">
    <div class="section">
      <h1>AMONG THE STARS</h1>
      
      <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </article>
    </div>
  </div>
  <div class="row coolcp_content">
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
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
