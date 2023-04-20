<?php 
include 'db.php';
session_start();
if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pass = $_POST['pass'];
    // Validate form data
    if (empty($uname) || empty($email) || empty($number) || empty($pass)) {
        $_SESSION['error'] = "Please fill in all fields";
        header("Location: signin.php");
        exit;
    }
    $sql = "INSERT INTO `signup`(`uname`,`email`,`number`,`pass`) VALUES('$uname','$email','$number','$pass')";
    $result = mysqli_query($conn,$sql);
  
    if($result){
        echo"Data was enterd successfuly".mysqli_error($conn);
    }else{
        echo"Data was not enterd in to database".mysqli_error($conn);
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/signup.css">
    <title>SignUp</title>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>


</head>
<body>
    <!-- <form action="signup" method="post">
        <header>
          <a href="../index.html" class="home_page_linke"><h2>Package Station</h2></a>
            <ul>
        <input type="text" id="uname" name="uname" placeholder="username" required><br>
        <label for="uname">@Username</label><br>
        <input type="eamil" id="email" name="email" placeholder="Email" required><br>
        <label for="email">@email</label><br>
        <input type="text" id="number" name="number" placeholder="Number" required><br>
        <label for="number">#number</label><br>
        <input type="password" id="password" name="pass" placeholder="password" required><br>
        <label for="password">Password</label><br>
        <input type="password" id="pass" name="pass" placeholder="Confirm Password" required><br>
        <label for="cpass">Confirm Password</label><br>
         </ul>
    
    </header>
    <h4 class="note">Alreay have an account ?</h4>

    <a href="signin.php" class="signup_link">SignIn</a>
    <button class="btn btn-lg btn-primary " id="s-btn" type="submit">Submit</button>
   
    </form> -->
    <form method="post" action="signup.php">
    <header>
          <a href="../index.html" class="home_page_linke"><h2>Package Station</h2></a>
            <ul>
  <input type="text" id="uname"  name="uname" placeholder="Name" required><br>
  <label for="uname">@Username</label><br>
  <input type="email" id="email" name="email" placeholder="Email" required><br>
  <label for="email">@email</label><br>
  <input type="number" id="number" name="number" placeholder="Number" required><br>
  <label for="number">#number</label><br>
  <input type="password"id="pass"  name="pass" placeholder="Password" required><br>
  <label for="password">Password</label><br>
            </ul>
    </header>
    <h4 class="note">Alreay have an account ?</h4>

    <a href="signin.php" class="signup_link">SignIn</a>
    <button class="btn btn-lg btn-primary " id="s-btn" name="submit" type="submit">Submit</button>
  
</form>
</body>
</html>