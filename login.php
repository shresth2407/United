<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $gmail = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "select * from form where email = '$gmail' limit 1";
        $result = mysqli_query($con, $query);

        echo '$result';

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['pass'] == $password)
                {
                    header('Location:C.html');


                }
            }
        }

        echo "<script type='text/javascript'> alert('login success')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Wrong user or password')</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page </title>
    
    <link rel="stylesheet" href="/login.css">
    <!-- font asm link for icons -->
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
    <link rel="stylesheet" href="index.css">
    
    </head>
<body style="background-image: url(United.webp);">


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

    <!----search form----->
    <form action="" id="search-form">
        <input type="search" placholder="search here"  name="" id="search-box" placeholder="search here">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fa-solid fa-xmark-large" id="close"></i>  
    </form>

    
<!---- login page -->
<div class="login-div">
    
<!-- login page me photo-->
    <div class="img-div">
    <div class="img-photo">
        
    </div>
</div>

<div class="login-container">
    <!-- HII HELLO -->
<div class="HII">
    <p class=" add-first"> Hii, Riashr-IT </p>
    <p class="add-second">Welocme Back to Riashr-IT</p>

<div class="login">
    <h1>login</h1>
    <form action="login.php" method="POST">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Password</label>
        <input type="password" name="pass" required>
        <input type="submit" name="" value="submit">

    </form>
    <p> not have an account? <a href="singpu.php">Sing Up here</a> 
<p>

 </div>
    
</div>


</body>
</html>