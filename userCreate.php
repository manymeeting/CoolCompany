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
    <script type="text/javascript" src="./js/userCreate.js"></script>
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
        <span class="coolcp_section_header_title center">Add User</span>
      </div>
      <form id="createUserForm" method="post" action="createUser.php">
        <div class="autogrid full-width-forms">
          <div class="col-1-4 space"></div>
          <div class="col-1-2">
            <div class="no-first-last">
              <p>
                <label><small>First Name</small></label><input name="firstname" placeholder="Michael" type="text">
              </p>
              <p>
                <label><small>Last Name</small></label><input name="lastname" placeholder="Wang" type="text">
              </p>
              <p>
                <label><small>Email</small></label><input name="email" placeholder="you@example.com" type="email">
              </p>
              <p>
                <label><small>Home Address</small></label><input name="homeaddr" placeholder="123 South 1st St, San Jose, CA" type="text">
              </p>
              <p>
                <label><small>Home Phone</small></label><input name="homephone" placeholder="408-123-1000" type="text">
              </p>
              <p>
                <label><small>Cell Phone</small></label><input name="cellphone" placeholder="408-123-1234" type="text">
              </p>
              <hr>
              <p>
                <a id="create_user_submit_btn" href="#" class="btn green outline">Create User</a>
              </p>
              <p class="center"><a href="users.php" class="btn no-outline">Cancel</a></p>
            </div>
          </div>
          <div class="col-1-4 space"></div>
        </div>
      </form>

    </div>
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
