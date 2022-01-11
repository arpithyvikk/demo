<?php

include('../dbconfig.php');
$errors = [];
$data = [];

if (empty($_POST['id'])) {
    $errors['id'] = 'User not found.';
}

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
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $skills = implode(',', $_POST['skills']);
    $gender = $_POST['gender'];

    $sql2 = "UPDATE users SET name='$name', email='$email', mobile='$mobile', gender='$gender', dob='$date', city='$city', skills='$skills' WHERE id ='$id'";
    $result2 = mysqli_query($con, $sql2);
        
    $data['success'] = true;
    $data['message'] = 'Success!';
}
?>