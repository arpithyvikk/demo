<?php 
session_start();
if(isset($_SESSION['id']))
{
    echo "<script>
            window.location.href = 'users/index.php'
            </script>";
} elseif(isset($_SESSION['admin_id']))
{
    echo "<script>
    window.location.href = 'admin/index.php'
    </script>";
} 
else{?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://hyvikk.com/wp-content/uploads/2018/06/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Arpit | Home</title>
    <style>
        .button1{
            height:100px;
            width:250px;
            font-size:32px!important;
            margin:25% 5px 0px 5px!important;
        }
    </style>
  </head>
  <body>
  <?php include "dbconfig.php"; ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" target="blank_" href="https://hyvikk.com/"><img itemprop="image" class="mobile" src="https://hyvikk.com/wp-content/uploads/2018/06/Hyvikk-logo-350px-1.png" alt="Logo" style="height: 50px!important"></a>
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
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid main">
        <div class="row" style="text-align:center!important">
            <div class="col-md-6 col-sm-10" style="text-align:right!important">
                <a href="users/index.php"><button class="btn btn-primary button1">Users</button></a>
            </div>
            <div class="col-md-6 col-sm-10" style="text-align:left!important">
            <a href="admin/index.php"><button class="btn btn-danger button1">Admin</button></a>
            </div>
        </div>
    </div>

    <footer>
    <nav class="navbar navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="#">
            @2022 Hyvikk Solutions. All right Reserved.
        </a>
      </nav>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  
    </body>
</html>
<?php } ?>