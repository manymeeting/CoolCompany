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
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
      <div>
        <span id="userSearchTitle">Search By: </span>
        <select id="userSearchType">
          <optgroup label="Search Options">
            <option>First Name</option>
            <option>Last Name</option>
            <option>Home Address</option>
            <option>Home Phone</option>
            <option>Cell Phone</option>
          </optgroup>
        </select>
        <input id="userSearchInput" placeholder="..." type="search">
        <a id="userSearchBtn" class="btn small round no-outline">Search</a>
        <a href="userCreate.php" id="userCreateBtn" class="btn small round no-outline green">Create</a>
      </div>
      
      <table class="table">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Home Address</th>
            <th>Home Phone</th>
            <th>Cell Phone</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text">
            <td>Mary</td><td>Smith</td><td>100@xmail.com</td><td>asd,CA</td><td>123-123-123</td><td>123-123-123</td>
          </tr>
          <tr class="text">
            <td>Mary</td><td>Smith</td><td>100@xmail.com</td><td>asd,CA</td><td>123-123-123</td><td>123-123-123</td>
          </tr>
          <tr class="text">
            <td>Mary</td><td>Smith</td><td>100@xmail.com</td><td>asd,CA</td><td>123-123-123</td><td>123-123-123</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
