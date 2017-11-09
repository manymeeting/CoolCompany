<div class="row header coolcp_header">
    <div class="section">
      <nav>
        <a href = "/" class="logo">
          <img src="./images/galaxy.svg" alt="logo">
        </a>
        <ul class="menu">
          <?php
          if(isset($_SESSION["valid"]))
          {
            echo '<li><a href="logout.php">Sign Out</a></li>';
            echo '<li><a id="signOut" href="./users.php">Users</a></li>';
          }
          ?>
          <li><a href="#">News</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">About</a></li>
          <li><a href="./home.php">Home</a></li>
          
        </ul>
        
      </nav>
      
    </div>
</div>