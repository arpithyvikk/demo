<?php 
include ('dbconfig.php');

if (isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $skills = implode(',', $_POST['skills']);
    $gender = $_POST['gender'];
    $password = mysqli_real_escape_string($con, $_POST['password']);
	if (empty($name)) {
        echo "<script>
            alert('Plase enter your full name')
            window.location.href = 'register.php'
            </script>";
	    exit();
	}else if(empty($email)){
        echo "<script>
        alert('Plase enter your email address')
        window.location.href = 'register.php'
        </script>";
        exit();
	}
	else if(empty($mobile)){
        echo "<script>
        alert('Plase enter your mobile number')
        window.location.href = 'register.php'
        </script>";
        exit();
	}

	else if(empty($date)){
        echo "<script>
            alert('Plase enter your birth date')
            window.location.href = 'register.php'
            </script>";
	    exit();
	}
    else if(empty($password)){
        echo "<script>
        alert('Plase enter password')
        window.location.href = 'register.php'
        </script>";
        exit();
	}
    else if(empty($city)){
        echo "<script>
            alert('Plase select your city')
            window.location.href = 'register.php'
            </script>";
	    exit();
	}
    else if(empty($gender)){
        echo "<script>
            alert('Plase select you gender')
            window.location.href = 'register.php'
            </script>";
	    exit();
	}
	else
    {

		// hashing the password
        $password = md5($password);
	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<script>
            alert('This E-mail address is already taken')
            window.location.href = 'register.php'
            </script>";
	        exit();
		}
        else 
        {
            $sql2 = "INSERT INTO users(name,email,mobile,gender,dob,city,skills,password) VALUES('$name','$email','$mobile','$gender','$date','$city','$skills','$password')";
            $result2 = mysqli_query($con, $sql2);
            if ($result2) {
                echo "<script>
                alert('Your account has created successfully')
                window.location.href = 'register.php'
                </script>";
            }
            else {
                echo "<script>
                alert('Registration form submition error')
                window.location.href = 'register.php'
                </script>";
            }
		}
	}
	
}
else
{
	echo "<script>
            alert('Redirection error')
            window.location.href = 'register.php'
            </script>";
	    exit();
}