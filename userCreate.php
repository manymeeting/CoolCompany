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
      <h1>NEBULA</h1>
      <article>Labore et dolore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </article>
    </div>
  </div>
  <div class="row coolcp_content">
    <div class="coolcp_section"> 
      <div class="coolcp_section_header">
        <span class="coolcp_section_header_title">Add a new user</span>
        <a href="users.php" id="cancelBtn" class="btn small round no-outline">Cancel</a>
      </div>
      <div class="autogrid full-width-forms">
        <div class="col-1-4 space"></div>
        <div class="col-1-2">
          <div class="box no-first-last bg-white">
            <p>
              <label><small>First Name</small></label><input placeholder="Michael" type="text">
            </p>
            <p>
              <label><small>Last Name</small></label><input placeholder="Wang" type="text">
            </p>
            <p>
              <label><small>Email</small></label><input placeholder="you@example.com" type="email">
            </p>
            <p>
              <label><small>Home Phone</small></label><input placeholder="123 South 1st St, San Jose, CA" type="text">
            </p>
            <p>
              <label><small>Cell Phone</small></label><input placeholder="408-123-1234" type="text">
            </p>
            <hr>
            <p>
              <a href="#" class="btn green outline">Create User</a>
            </p>
            <p class="center"><a href="users.php" class="btn no-outline">Cancel</a></p>
          </div>
        </div>
        <div class="col-1-4 space"></div>
      </div>

    </div>
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
