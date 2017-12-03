<html>
  <head>
    <?php require "common_head.php" ?>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <script type="text/javascript" src="./js/login.js"></script>
  </head>

  <body>
    
    <div class="row">
      <div id="login_content" class="section">
        <img src="./images/galaxy.svg" class="svg">

        <div class="autogrid full-width-forms">
          <div class="col-1-4 space"></div>
          <div class="col-1-2">
            <h3 class="center">Sign In</h3>
            <div class="box bg-white no-first-last">
              <form method="post" action="checkLogin.php">
                <p>
                  <input name="username" placeholder="Username" type="text">
                  <input name="password" placeholder="Password" type="password">
                </p>
                <p><a href="#" id="login_submit_btn" class="btn gray-dark solid">Go</a></p>
                <hr>
                <div class="col-1-2">
                    <a href="#" class="btn gray-medium no-outline small">Sign Up</a>
                </div>
                <div class="col-1-2"><a href="#" class="btn gray-medium no-outline small">Forgot Password?</a></div>
                <div class="clear"></div>
            </form>
            </div>
          </div>
          <div class="col-1-4 space"></div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    
  </body>
</html>
