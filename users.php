<?php
require 'includes/functions.php';
?>
<html>
<head>
    <?php require "common_head.php" ?>
    <link rel="stylesheet" type="text/css" href="./css/users.css">
    <script type="text/javascript" src="./js/users.js"></script>
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
        <form id="userSearchForm" method="post" action="searchUsers.php">
          <span id="userSearchTitle">Search By: </span>
          <select id="userSearchType" name="userSearchBy">
            <optgroup label="Search Options">
              <option value="firstname">First Name</option>
              <option value="lastname">Last Name</option>
              <option value="homeaddr">Home Address</option>
              <option value="homephone">Home Phone</option>
              <option value="cellphone">Cell Phone</option>
            </optgroup>
          </select>
          <input id="userSearchInput" name="userSearchVal" placeholder="..." type="search">
          <a id="userSearchBtn" class="btn small round no-outline">Search</a>  
          <a href="userCreate.php" id="userCreateBtn" class="btn small round no-outline green">Create</a>
        </form>
        
        
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
          <?php
          if(isset($_SESSION["userSearchResult"]))
          {
            $users = $_SESSION["userSearchResult"];
            $_SESSION['userSearchResult'] = null;
          }
          else
          {
            $userForm = new UserForm;
            $users = $userForm->fetchAllUser();
          }
          foreach ($users as $row) {
              $html =
              '<tr class="text">'. 
                "<td>".$row['firstname']."</td>".
                "<td>".$row['lastname']."</td>".
                "<td>".$row['email']."</td>".
                "<td>".$row['homeaddr']."</td>".
                "<td>".$row['homephone']."</td>".
                "<td>".$row['cellphone']."</td>".
              '</tr>';
              print $html. "\n";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
