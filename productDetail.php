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
    <link rel="stylesheet" type="text/css" href="./css/products.css">
    <script type="text/javascript" src="./js/products.js"></script>
</head>

<body>
  <?php require "page_header.php" ?>
  <div class="row coolcp_banner">
    <div class="section">
      <h1>BRAVE NEW WORLD</h1>
      <article>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain.</article>
    </div>
  </div>
  <div class="row coolcp_content">
    <div class="coolcp_section">
      <h1 class="coolcp_content_title">SpaceshipI</h1>
      <article class="coolcp_content_description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</article>
      <img class="coolcp_article_img" src="./images/products/spaceship01.jpg">
      <article>
        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
      </article>
    </div>
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>

  <!-- load products information -->
  <json class="json" id="productsInfo">
    <?php
        $productsFileName = 'products.txt';
        $productsInfo = fopen($productsFileName, "r") or die("Unable to open file");
        echo fread($productsInfo,filesize($productsFileName));
        fclose($productsInfo);
        ?>;
  </json>
</body>
</html>
