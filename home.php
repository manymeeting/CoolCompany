<html>
<?php
  $title = "Light Year Travel Agency";
?>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/vital.css">
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./js/common.js"></script>
</head>

<body>
  <div class="row header">
      <div class="section">
        <nav>
          <a href = "/" class="logo">
            <img src="./images/logo.svg" alt="logo">
          </a>
          <ul class="menu">
            <li><a href="./news.php">News</a></li>
            <li><a href="./products.php">Products</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./home.php">Home</a></li>
          </ul>
        </nav>
      </div>
  </div>
  
  <div id="home_banner" class="row">
    <div class="section">
      <img src="./images/stars.svg" class="svg" align="middle">
      <h1>FLY ME TO THE MOON</h1>
      
      <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </article>
    </div>
  </div>
  
  <div id="home_content" class="row">
    <div class="padded">
      <div id="about-section" class="col-1-3">
        <h2>About Us</h2>
        <article>
          <?php echo $title; ?> was established in AC2020. Today, we have 1000+ spaceships and 9000+ rockets that are available from all over the world.
        </article>
        <p class="section-footer-btn"><a href="#" class="btn small round blue">more...</a></p>
      </div>
      
      <div id="products-section" class="col-1-3">
        <h2>Products</h2>
        <article>
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        </article>
        <p class="section-footer-btn"><a href="#" class="btn small round blue">more...</a></p>
      </div>
      
      <div id="news-section" class="col-1-3">
        <h2>News</h2>
        <article>
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irur
        </article>
        <p class="section-footer-btn"><a href="#" class="btn small round blue">more...</a></p>
      </div>
    </div>
  </div>
  
  <div id="home_footer" class="row footer">
    <h2>Contacts</h2>
    <ul id = "contacts-list">
    </ul>
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
      let contactsHTML = ""
      contacts.forEach(function(contact) {
        contactsHTML += "<li>" + contact.name + ": " + contact.email + ", tel: " + contact.tel + "</li>";
      });
      $("#contacts-list").html(contactsHTML);
      
    </script>
  </div>
</body>
</html>
