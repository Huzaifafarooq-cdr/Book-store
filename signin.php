<?php
session_start();
include("connection.php");
if(isset($_SESSION['username'])){
  echo ("<script>window.location='index.php';</script>");
}
if(isset($_POST['signup'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $email = $_POST['email'];
  $login_check = $sql->prepare("INSERT INTO `user`(`username`, `password`, `email`) VALUES (?,?,?)");
  $login_check->bind_param('sss',$username,$password,$email);
  $login_check->execute();
  if($login_check->affected_rows>0){
    $_SESSION['username'] = $username;
    echo("<script>alert('Register Successfully')</script>");
    echo("<script>window.location='index.php';</script>");
  }else{
    echo("<script>alert('Registration Failed Try again')</script>");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <title>Sign in</title>
</head>
<body>
<div class="heade" style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(img3.jpg);">
        <nav>
            <a href="index.html"><img src="logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="bookstore.html">BOOKS</a></li>
                    <li><a href="membership.html">MEMBERSHIP</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
      
    </div>
     <form class="modal-content animate" action="" method="post">
      <div class="parent_div" >
        <div class="imgcontainer">
          <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
          <img src="Avatar.png" alt="Avatar" class="avatar" />
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="username"
            required
          />

          <label for="email"><b>Email</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="email"
            required
          />
    
          <label for="psw"><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="password"
            required
          />

          <button type="submit" name="signup">Sign in</button>
        </div>
        <div class="container">
          <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
          <span class="psw"> <a href="login.php" style=" color: white; background-color: blue; text-decoration: none; ">Already Have Account! LOGIN</a></span>
        </div>
        <!-- <div class="container">
           <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div> -->
      </div>
    </form>
    <br><br><br><br>
    <div class="footer">
        <div class="container">
            <div class="row1">
                <div class="footer-col-1">
                    <h3>DOWNLOAD OUR APP</h3>

                    <div class="app-logo">
                        <img src="playstore.png" style="cursor: pointer;">
                        <img src="appstore.png" style="cursor: pointer;">
                    </div>
                </div>
                <div class="footer-col-2">
                    <a href="index.html"> <img src="logo.png" style="   width: 150px;
             border-radius: 17%;"></a>
                    <p style=" cursor: pointer; " class="e">RENT READ RETURN</p>
                </div>

                <div class="footer-col-4">
                    <h3>FOLLOW</h3>
                    <ul>
                        <a href="https://www.instagram.com/" style="text-decoration: none; color: black; ">
                            <li style="cursor: pointer;" class="a">INSTAGRAM</li>
                        </a>
                        <a href="https://www.facebook.com/" style="text-decoration: none; color: black;">
                            <li style="cursor: pointer;" class="a">FACEBOOK</li>
                        </a>
                        <a href="https://twitter.com/" style="text-decoration: none; color: black;">
                            <li style="cursor: pointer;" class="a">TWITTER</li>
                        </a>
            
                        </li>
                    </ul>
                </div>
            </div>

            <p class="copyright" style="cursor: pointer;"> Copyright
                2022 - BOOKS RETURN
            </p>
        </div>
    </div>
    
    
</body>
</html>