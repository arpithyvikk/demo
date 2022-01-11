<?php 
include ('../dbconfig.php');

if ($_GET['id'] != ""){

    $id = $_GET['id'];

        $sql2 = "DELETE FROM `users` WHERE `users`.`id` = '$id'";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            echo "<script>
            window.location.href = 'users.php'
            </script>";
        }
        else {
            echo "<script>
            alert('User removing error')
            window.location.href = 'users.php'
            </script>";
        }
	
}
else
{
	echo "<script>
            alert('Redirection error')
            window.location.href = 'users.php'
            </script>";
	    exit();
}