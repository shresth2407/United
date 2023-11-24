<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $Gender= $_POST['gender'];
    $gmail = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into form (fname,lname,gender,email,pass) values('$firstname','$lastname','$Gender','$gmail','$password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfullt Register')</script>";
    }

    else
    {
        echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
    }
    

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing up</title>
    
    <link rel="stylesheet" href="singpu.css">
    <link rel="stylesheet" href="index.css">

    <!-- font asm link for icons -->
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body style="background-color: #8fdbff;">
    

        <!---- nav bar section start -->

    <header style="background-color: #8fdbff;">

<a href="#" class="logo"><i class="fa-sharp fa-solid fa-utensils"></i>RishriT</a>
<nav class="navbar">
    <a  class="active" href="#home"> Home</a>
    <a href="#dishes">Dishes</a>
    <a href="#about">About</a>
    <a href="#menu"> menu</a>
    <a href="#review">Review</a>
    <a href="#order">Order</a>
</nav>
<div class="icons">
    <i class="fa-solid fa-bars" id="menu-bars"></i>
    <i class="fa-solid fa-magnifying-glass " id="search-icon"></i>
    <a href="#" class="fa-solid fa-heart"></a>
    <a href="#" class="fa-solid fa-cart-shopping"></a>



</div>

</header>


<!---- nav bar section  end -->
    
     <div class="sigup">
        <h1>Sign Up</h1>
        <h4>It is free and only takes a minut</h4>
        <form action="singpu.php" method="post"> 
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname"required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="submit">

        </form>
        <p> By clicking the sign up bitton you agerss to our <br>
        <a href="" > Terms and condition </a> and <a href="">policy privary</a>
    </p>
    <p>Already have an acciunt ? <a href="login.php">Login here</a></p>

     </div>


</body>
</html>