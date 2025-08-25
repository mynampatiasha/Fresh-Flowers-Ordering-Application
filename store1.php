<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];


$select1=$_POST['select1'];
$select2=$_POST['select2'];
$requirements=$_POST['requirements'];

$connect = mysqli_connect('localhost', 'root', '', 'Flower');
if (!$connect) {
    die('Connect Error: ' . mysqli_connect_error());
}

$query = "CREATE TABLE IF NOT EXISTS Data (
    Firstname VARCHAR(20) NOT NULL,
    Lastname VARCHAR(20) NOT NULL,
    Email VARCHAR(50) NOT NULL UNIQUE,
    Phonenumber VARCHAR(20) NOT NULL,
    Gender VARCHAR(10) NOT NULL,
    Your_Address VARCHAR(100),
    State VARCHAR(20) NOT NULL,
    Flower VARCHAR(20) NOT NULL,
    Requirements VARCHAR(100)
)";





if (!mysqli_query($connect, $query)) {
    echo 'Table Creation Error: ' . mysqli_error($connect);
} else {
    $insertQuery = "INSERT INTO Data (Firstname, Lastname, Email, Phonenumber, Gender, Your_Address,State,Flower, Requirements) VALUES (?, ?, ?, ?, ?, ?,?,?,?)";
    $stmt = mysqli_prepare($connect, $insertQuery);
    mysqli_stmt_bind_param($stmt, "sssssssss", $fname, $lname, $email, $phone, $gender, $address,$select1,$select2,$requirements);
  
    
    
    if (mysqli_stmt_execute($stmt)) {
        echo "<script> alert('Your data saved successfully')
         </script>";
    } 
    else {
        echo 'Insertion Error: ' . mysqli_error($connect);
    }


    mysqli_stmt_close($stmt);
    
}




mysqli_close($connect);

?>
