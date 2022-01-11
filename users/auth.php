<?php 

include ('../dbconfig.php');


if(!isset($_SESSION['id'])){
    echo "<script>
            window.location.href = 'login.php'
            </script>";
}
?>