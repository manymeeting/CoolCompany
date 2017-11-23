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
    <?php require "common_head.php" ?>
    <link rel="stylesheet" type="text/css" href="./css/users.css">
</head>

<body>
  <?php require "page_header.php" ?>
  <div class="row coolcp_banner">
    <div class="section">
      <h1>AMONG THE STARS</h1>
      <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </article>
    </div>
  </div>
  <div class="row coolcp_content">
    <div class="coolcp_section"> 
      <div class="coolcp_section_header">
        <span class="coolcp_section_header_title">Users</span>
        <a id="userCreateBtn" class="btn small round no-outline green">Create</a>
        <a id="userSearchBtn" class="btn small round no-outline">Search</a>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
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
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
