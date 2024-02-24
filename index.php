<?php
session_start();
if (!isset($_SESSION['level'])) {
    

?>


<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/style-login.css">

    <title>Situng Bengkong</title>
    
</head>  
<body>

    <div id="login-button">
      <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
    </div>

    <div id="container">
      <h1>Log In</h1>
      <span class="close-btn">
        <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png">
      </span>
      <form class="user" action="cek_login.php" method="post">
        <input type="email" name="email" id="exampleInputEmail" placeholder="E-mail">
        <input type="password" name="password" id="exampleInputPassword" placeholder="Password">
        <button type="submit" name="login" href="cek_login.php">Login</button>
        <div id="remember-container">
          <input type="checkbox" id="checkbox-2-1" class="checkbox" name="">
          <span id="remember">Remember me</span>
          <span id="forgotten">Forgotten password</span>
        </div>        
      </form>
      
    </div>

    <!----jquery cdn-link--------->   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	   
	  <!-----tweenmax.min.js cdn--------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>

    <script type="text/javascript">
      $('#login-button').click(function(){
        $('#login-button').fadeOut("slow",function(){
         $("#container").fadeIn();
         TweenMax.from("#container", .4, {scale: 0, ease:Sine.easeInOut});
         TweenMax.to("#container", .4, {scale: 1, ease:Sine.easeInOut});
        });
      });

      $(".close-btn").click(function(){
        TweenMax.from("#container", .4, {scale: 1, ease:Sine.easeInOut});
        TweenMax.to("#container", .4, {left:"0px", scale: 0, ease:Sine.easeInOut});
        $("#container, #forgotten-container").fadeOut(800, function(){
          $("#login-button").fadeIn(800);
        });
      });
    </script>

</body>
</html> 

<?php }else{
    header("location:halaman_utama.php");
} ?>   