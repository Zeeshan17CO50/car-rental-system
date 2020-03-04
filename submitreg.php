<?php

// include("checkdb.php");

if($_POST['btn-reg']) {
    $rollno = $_POST['rollno'];
    $name = $_POST['fname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $dept = $_POST['dept'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd = $_POST['pwd'];

    $sql = "INSERT INTO user (name,phone,email,username,password,address,rollno,gender,dob,dept) values ('$name','$phone','$email','$name','$pwd','$address','$rollno','$gender','$dob','$dept')";
    
    echo $sql;
    if(mysqli_query($conn, $sql)) {
        echo "new record inserted";
    }
    else {
        echo mysqli_error($conn);
    }
}

?>