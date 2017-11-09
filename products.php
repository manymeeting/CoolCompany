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
      <h1>INTERSTELLAR LIFE</h1>
      
      <article>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id. </article>
    </div>
  </div>
  <div class="row coolcp_content">
    <div class="coolcp_section">
      <p class="coolcp_content_title">Amazing Products</p>
      <div class="boxed-text">
        <div class="boxed-text-outer col-1-3" prodid="1" >
          <div class="boxed-text-content">
            <h2>Cumque nihil impedit</h2>
            <p>harum quidem rerum facilis est et</p>
          </div>
        </div>
        <div class="boxed-text-outer col-2-3" prodid="2">
          <div class="boxed-text-content">
            <h2>Ut enim ad minim veniam</h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
          </div>
        </div>
      </div>
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
