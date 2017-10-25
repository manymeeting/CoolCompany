<html>
<?php
  $title = "Light Year Travel Agency";
?>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/vital.css">
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
              <li><a href="./home.php">Home</a></li>
              <li><a href="./about.php">About</a></li>
              <li><a href="./news.php">News</a></li>
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
  
  
  <section id="home-section">
    <h3>Home</h3>
    <main>
      We are an amazing group! We bring you to any planet in the universe!
    </main>
  </section>
  
  <section id="about-section">
    <h3>About</h3>
    <article>
      <?php echo $title; ?> was established in AC2020. Today, we have 1000+ spaceships and 9000+ rockets that are available from all over the world.
    </article>
  </section>
  
  <section id="products-section">
    <h3>Products</h3>
    <p>We offer exciting products!</p>
    <ol>
      <li>Fly me to me Moon</li>
      <li>Solar System Safari</li>
      <li>Inside Andromeda Galaxy</li>
    </ol>
  </section>
  
  <section id="news-section">
    <h3>News</h3>
    <p>Amazing things happen everyday!</p>
    <ol>
      <li>Spruce Goose safely came back from Mars!</li>
      <li>Of Course I Still Love You launched successfully!</li>
      <li>100 Anniversary Next Month!</li>
    </ol>
  </section>
  
  <section id="contacts-section">
    <h3>Contacts</h3>
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
  </section>
</body>
</html>
