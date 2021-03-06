<?php session_start(); ?>
<html>
<head>
    <?php require "common_head.php" ?>
    <link rel="stylesheet" type="text/css" href="./css/home.css">
</head>

<body>
  <?php require "page_header.php" ?>
  
  <div class="row coolcp_banner">
    <div class="section">
      <img src="./images/stars.svg" class="svg">
      <h1>FLY ME TO THE MOON</h1>
      
      <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </article>
    </div>
  </div>
  
  <div class="row coolcp_content">
    <div class="padded">
      <div id="about-section" class="col-1-3">
        <h3>About Us</h3>
        <article>
          <?php echo $title; ?> was established in AC2020. Today, we have 1000+ spaceships and 9000+ rockets that are available from all over the world.
        </article>
        <p class="section-footer-btn"><a href="#" class="btn small round blue">more...</a></p>
      </div>
      
      <div id="products-section" class="col-1-3">
        <h3>Products</h3>
        <article>
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        </article>
        <p class="section-footer-btn"><a href="#" class="btn small round blue">more...</a></p>
      </div>
      
      <div id="news-section" class="col-1-3">
        <h3>News</h3>
        <article>
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irur
        </article>
        <p class="section-footer-btn"><a href="#" class="btn small round blue">more...</a></p>
      </div>
    </div>
  </div>
  
  <div id="home_contacts" class="row">
    <h2>Need Help?</h2>
    <div id="contacts-section">
      <div id="contacts-list" class="autogrid">
      </div>
    </div>
    
    <script>
      // load contacts information from file
      let contacts = [];
      contacts = <?php
        $contactsFileName = 'contacts.txt';
        $contacts = fopen($contactsFileName, "r") or die("Unable to open file");
        echo fread($contacts,filesize($contactsFileName));
        fclose($contacts);
        ?>;
      
      // initialize contacts list
      let contactsHTML = "";
      for(let i = 0; i < contacts.length; i++)
      {
        contactsHTML +=
        '<div class="col">' +
          '<img src="./images/chat.png" class="size-forty">' +
          '<strong>' + contacts[i].name + '</strong>' +
          '<article>' + contacts[i].intro + '</article>' +
          '<p><a href="#" class="btn small solid round">' + contacts[i].email + '</a></p>' +
        '</div>';
      }
      
      $("#contacts-list").html(contactsHTML);
      
    </script>
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
