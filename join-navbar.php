<?php

$insert= false;
if (isset($_POST['name'])) {

 // Connect to the database
 $server = "localhost";
 $username = "root";
 $password = "";
 $con = mysqli_connect($server, $username, $password);
 // Check connection
 if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
 }
//get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cnic = $_POST['cnic'];
$address = $_POST['address'];
$area = $_POST['area'];
$message = $_POST['message'];

//create the insert query
$query = "INSERT INTO `volunteers`.`volunteers`(name, email, phone, cnic, address, area, message)
VALUES ('$name', '$email', '$phone','$cnic', '$address', '$area', '$message')";

//run the query
if ($con->query($query) === TRUE) {
    //echo "New volunteer added successfully";
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}

//close the connection
$con->close(); }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BECOME A VOLUNTER</title>

<style>
    form {
width: 80%;
margin: 0 auto;
padding: 30px;
background-color: #f9f9f9;
border: 1px solid #ddd;
border-radius: 10px;
}

h2 {
    text-align: center;
    margin-bottom: 30px;
}

label {
    font-weight: bold;
    margin-top: 15px;
    display: block;
}

input, select, textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 14px 20px;
    margin-top: 20px;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

select {
    height: 40px;
}

textarea {
    height: 150px;
    resize: none;
}

body{
    background-color:  #381d1d;
  }
  .causes-section {
        padding: 38px 0;
            background-color: #381d1d;
      }
      
      .causes-section .container {
        background-color: #5dbcca;
  border-radius: 27px;
  box-shadow: 16px -21px 21px #f1eaea;
  padding: 30px;
      }
      .causes-section p {
        border-color: #381d1d;
border-radius: 26px;
font-size: 17px;
line-height: 1.5;
color: black;
text-align: center;
background-color: paleturquoise;
border-style: double;
      }
h1{
        text-align: center;
        color: #5dbcca;
      }
    </style>
</head>
<body>
    <div class="cause-section" >
        <div class="container">
    <a href="index.html"></a>
    <h1>BECOME OUR VOLUNTER</h1>
    <p></p>
    <?php
  if($insert == true){
  echo  "<p class='endmsg'>THANKS FOR SUBMITTING FORM , HAVE A GOOD DAY</p>"; } 
   ?>

    <form action="join-navbar.php" method="post">
  <h2>Volunteer Sign Up Form</h2>
  
  <label for="name">Full Name:</label>
  <input type="text" id="name" name="name" required>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  
  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone" required>

  <label for="phone">CNIC Number:</label>
<input type="number" id="cnic" name="cnic" required>
  
  <label for="address">Address:</label>
  <input type="text" id="address" name="address" required>
  
  <label for="area">Area of Interest:</label>
  <select id="area" name="area" required>
    <option value="">Select an Area</option>
    <option value="education">Education</option>
    <option value="healthcare">Healthcare</option>
    <option value="community">Community Development</option>
    <option value="environment">Environment</option>
    <option value="other">Other</option>
  </select>
  
  <label for="message">Tell us why you want to volunteer:</label>
  <textarea id="message" name="message" required></textarea>
  <input type="submit" value="Submit">
</form>
        </div>
    </div>
</body>
</html>