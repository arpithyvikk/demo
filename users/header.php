<?php include "../dbconfig.php"; ?>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"><img itemprop="image" class="mobile" src="https://hyvikk.com/wp-content/uploads/2018/06/Hyvikk-logo-350px-1.png" alt="Logo" style="height: 50px!important"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <?php 
            session_start();
              if(isset($_SESSION['id']))
              {
                ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <?php echo $_SESSION['name']; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">  
                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
            <?php } else{?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">  
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li><a class="dropdown-item" href="register.php">Register</a></li>
              </ul>
            </li>
            <?php } ?>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
</header>