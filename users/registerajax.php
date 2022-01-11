<?php

include('../dbconfig.php');
$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}
if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}
if (empty($_POST['mobile'])) {
    $errors['mobile'] = 'Mobile Number is required.';
}
if (empty($_POST['password'])) {
    $errors['password'] = 'Password is required.';
}
if (empty($_POST['date'])) {
    $errors['date'] = 'Birth Date is required.';
}
if (empty($_POST['city'])) {
    $errors['city'] = 'City is required.';
}
if (empty($_POST['gender'])) {
    $errors['gender'] = 'Gender is required.';
}
if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $skills = implode(',', $_POST['skills']);
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $password = md5($password);

    $number = rand(10,100);

    $sql2 = "INSERT INTO users(name,email,mobile,gender,dob,city,skills,password,list_number) VALUES('$name','$email','$mobile','$gender','$date','$city','$skills','$password','$number')";
    $result2 = mysqli_query($con, $sql2);

    if($result2)
    {
        $file = fopen("../list/".$number.".txt", 'a+');
        $file1 = fopen("../user_list.txt", 'a+');
        $text = "Name: ".$name."\nE-mail: ".$email."\nMobile No: ".$mobile."\nGender: ".$gender."\nBirth Date: ".$date."\nCity: ".$city."\nSkills: ".$skills."\n\n";
        fwrite($file, $text);
        fwrite($file1, $text);
        // $data['success'] = true;
        // $data['message'] = 'Success!';
        echo "Message Saved";
    }
    else {
        $data['success'] = false;
        $data['errors'] = $errors;
    }
}
die();
?>