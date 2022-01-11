<?php 

include ('../dbconfig.php');

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		echo "<script>
            alert('Email is required please try again')
            window.location.href = 'login.php'
            </script>";
	}else if(empty($password)){
        echo "<script>
            alert('Password is required please try again')
            window.location.href = 'login.php'
            </script>";
	}else{
		// hashing the password
        $password = md5($password);

        
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                session_start();
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
				echo "<script>
            alert('Incorect user email or password')
            window.location.href = 'login.php'
            </script>";
			}
		}else{
			echo "<script>
            alert('Incorect user email or password')
            window.location.href = 'login.php'
            </script>";
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}