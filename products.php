<?php
require 'includes/functions.php';
?>

<?php

// load products information
$productsJSON = "";
$productsFileName = 'products.txt';

$productsFile = fopen($productsFileName, "r") or die("Unable to open file");
$productsJSON = $productsJSON . fread($productsFile,filesize($productsFileName));
fclose($productsFile);
$products = json_decode($productsJSON);

// get previously viewed from cookie
$preViewed = array();
$preViewedJSON = $_COOKIE["preViewed"];
if(strlen($preViewedJSON) > 0)
{
  $preViewed = json_decode($preViewedJSON);
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

    <!-- last five previously visited products -->
    <?php 
      if(count($preViewed) > 0)
      {
        require("./page_sections/pre_viewed_prod.php");
      }
    ?>

    <div class="coolcp_section">
      <div class="coolcp_section_header">
        <span class="coolcp_section_header_title">Amazing Products</span>
      </div>
      <div class="boxed-text">
        <div class="boxed-text-outer col-1-3" prodid="1" >
          <a href="productDetail.php?id=1">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>
        </div>
        <div class="boxed-text-outer col-2-3" prodid="2">
          <a href="productDetail.php?id=2">
            <div class="boxed-text-content">
              <h2>Ut enim ad minim veniam</h2>
              <p>Duis aute irure dolor in reprehenderit in voluptate</p>
            </div>
          </a>
        </div>
        <div class="clear"></div>
        <div class="boxed-text-outer col-2-3" prodid="3" >
          <a href="productDetail.php?id=3">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>
        </div>
        <div class="boxed-text-outer col-1-3" prodid="4" >
          <a href="productDetail.php?id=4">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>
        </div>
        <div class="clear"></div>
        <div class="boxed-text-outer" prodid="5" >
          <a href="productDetail.php?id=5">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>  
        </div>
        <div class="clear"></div>
        <div class="boxed-text-outer col-1-3" prodid="6" >
          <a href="productDetail.php?id=6">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>
        </div>
        <div class="boxed-text-outer col-1-3" prodid="7" >
          <a href="productDetail.php?id=7">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>
        </div>
        <div class="boxed-text-outer col-1-3" prodid="8" >
          <a href="productDetail.php?id=8">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>
        </div>
        <div class="clear"></div>
        <div class="boxed-text-outer" prodid="9" >
          <a href="productDetail.php?id=9">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>
        </div>
        <div class="clear"></div>
        <div class="boxed-text-outer" prodid="10" >
          <a href="productDetail.php?id=10">
            <div class="boxed-text-content">
              <h2>Cumque nihil impedit</h2>
              <p>harum quidem rerum facilis est et</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>

  <!-- provide products information in JSON for js -->
  <json class="json" id="productsInfo">
    <?php
        echo $productsJSON;
    ?>;
  </json>
</body>
</html>
