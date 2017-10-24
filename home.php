<html>
<?php
  $title = "Light Year Travel Agency";
?>
<head>
    <title><?php echo $title; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  
  <h1>Welcome to <?php echo $title; ?>!</h1>
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
