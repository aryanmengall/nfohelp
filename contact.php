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
$area = $_POST['phno'];
$message = $_POST['message'];

//create the insert query
$query = "INSERT INTO `contactors`.`contactors`(name, email, phone, message)
VALUES ('$name', '$email', '$phone', '$message')";

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
    <title>CONTACT FORM</title>
    <style>
        #contact {
    width: 80%;
    margin: 0 auto;
    text-align: left;
  }
  
  #contact h2 {
    margin-bottom: 50px;
    font-size: 2em;
  }
  
  #contact form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  #contact label {
    width: 100%;
    margin-bottom: 10px;
    font-size: 1.2em;
  }
  
  #contact input[type="text"], #contact input[type="email"], #contact textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 0px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
  }
  
  #contact input[type="submit"] {
    width: 58%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.2em;
  }
  
  #contact input[type="submit"]:hover {
    background-color: #45a049;
  }
  #big-image {
    max-width: 30%; /* adjust as needed */
    float: right;
    margin-left: 12px; /* add some space between the form and the image */
    border-radius: 50px;
    border:2px solid #000;
  }
  body{
    background-color: #0be9e4;
  }
    </style>
<body>
    <div class="cause-section" >
        <div class="container">
    <a href="index.html"></a>
    <h1>CONTACT FORM</h1>
    <p></p>
    <?php
  if($insert == true){
  echo  "<p class='endmsg'>THANKS FOR SUBMITTING FORM , HAVE A GOOD DAY</p>"; }
   ?>
   <div id="contact">
    <h2>Contact Us</h2>
    <img href="https://donorbox.org/nfo-club" src="assets/images/logo.jpg" alt="Big Image" id="big-image">
    <form action="index.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br>
  
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br>
  
      <label for="message">Message:</label>
      <textarea id="message" name="message"></textarea><br>
  
      <input type="submit" value="Submit">
    </form>

</div>
    </div>
</body>
</html>

