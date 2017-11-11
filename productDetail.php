<?php
session_start();
if(!isset($_SESSION["valid"]))
{
  header("Location: login.php");
  exit();
}
?>
<?php 
// check existence of prod id
if(!isset($_GET["id"]))
{
  http_response_code(404);
  die();
}

$MAX_LEN = 5;
$prodID = $_GET["id"];

// update previously viewed products cookie
$preViewedJSON = $_COOKIE["preViewed"];
if(strlen($preViewedJSON) == 0)
{
  $preViewedJSON = "[]";
}
$preViewed = json_decode($preViewedJSON);
$newPreViewed = array();
// add the current id to the head
array_push($newPreViewed, $prodID);

$len = count($preViewed);
for ($i=0; $i < $len ; $i++) { 
  $currID = $preViewed[$i];
  if($currID != $prodID)
  {
    array_push($newPreViewed, $currID);
    if(count($newPreViewed) == $MAX_LEN)
    {
      break;
    }
  }
}

$preViewed = $newPreViewed;
setcookie("preViewed", json_encode($preViewed));

?>
<html>
<head>
    <?php require "common_head.php" ?>
    <link rel="stylesheet" type="text/css" href="./css/products.css">
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
      <?php require("./productDetails/prod" . $prodID . ".php");?>
    </div>
  </div>
  
  <div class="row footer coolcp_footer">
    <p>© 2017 Light Year Travel, Inc.</p>
  </div>
</body>
</html>
